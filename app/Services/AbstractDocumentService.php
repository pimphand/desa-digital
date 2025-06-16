<?php

namespace App\Services;

use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

abstract class AbstractDocumentService
{
    abstract protected function getTemplateName(): string;
    abstract protected function getPlaceholders($record): array;
    abstract protected function getFolderName(): string;

    protected function getTemplatePath(): string
    {
        $templatePath = storage_path('template/' . $this->getTemplateName());
        if (!file_exists($templatePath)) {
            throw new \Exception("Template file not found at: " . $templatePath);
        }
        return $templatePath;
    }

    protected function saveDocument(TemplateProcessor $template, string $filename): string
    {
        // Create temp directory if it doesn't exist
        $tempDir = 'surat';
        if (!Storage::disk('public')->exists($tempDir)) {
            Log::info('Creating directory: ' . $tempDir);
            Storage::disk('public')->makeDirectory($tempDir);
        }

        $filePath = 'surat/' . $filename;
        $finalPath = storage_path('app/public/' . $filePath);

        // Ensure directory exists
        $finalDir = dirname($finalPath);
        if (!is_dir($finalDir)) {
            mkdir($finalDir, 0755, true);
        }

        Log::info('Saving document to: ' . $finalPath);
        $template->saveAs($finalPath);

        // Verify file was created and has content
        if (!file_exists($finalPath)) {
            throw new \Exception("DOCX file was not created at: " . $finalPath);
        }

        $fileSize = filesize($finalPath);
        Log::info('File saved successfully. Size: ' . $fileSize . ' bytes');

        if ($fileSize < 1000) {
            Log::warning('Generated file size is suspiciously small: ' . $fileSize . ' bytes');
            throw new \Exception('Generated file appears to be corrupt or empty');
        }

        return $filePath;
    }

    protected function convertToPdf(string $filePath, $record, string $path): void
    {
        Log::info('Converting to PDF: ' . $filePath);
        $outputDir = storage_path('app/public/surat/pdf/' . $path);
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
        }

        $finalPath = storage_path('app/public/' . $filePath);
        $pdfPath = $outputDir . '/' . str_replace('.docx', '.pdf', basename($filePath));
        $command = "node " . base_path('convertToPdf.js') . ' ' . $finalPath . ' ' . $pdfPath;

        exec($command, $output, $returnVar);
        if ($returnVar !== 0) {
            Log::error('Node conversion command failed: ' . implode("\n", $output));
            throw new \Exception('PDF conversion failed with command: ' . $command);
        }

        Log::info('PDF conversion completed successfully');
        $record->update(['file_surat' => 'surat/pdf/' . $path . '/' . str_replace('.docx', '.pdf', basename($filePath))]);
        Log::info('Record updated with new file path: ' . $filePath);
    }

    public function generateDocument($record): void
    {
        try {
            // Load the template
            $templatePath = $this->getTemplatePath();
            Log::info('Loading template from: ' . $templatePath);

            $template = new TemplateProcessor($templatePath);
            Log::info('Template loaded successfully');

            $placeholders = $this->getPlaceholders($record);
            Log::info('Setting placeholders: ' . json_encode($placeholders));

            // Try setValues first, if fails use setValue one by one
            try {
                $template->setValues($placeholders);
            } catch (\Exception $e) {
                Log::warning('setValues failed, falling back to individual setValue calls');
                foreach ($placeholders as $key => $value) {
                    Log::info("Setting placeholder {$key} with value: {$value}");
                    $template->setValue($key, replace: $value);
                }
            }

            // Delete old file if exists
            if ($record->file_surat && Storage::disk('public')->exists($record->file_surat)) {
                Log::info('Deleting old file: ' . $record->file_surat);
                Storage::disk('public')->delete($record->file_surat);
            }

            // Generate unique filename
            $filename = str_replace(' ', '_', $record->nama) . '_' . '.docx';
            $filePath = $this->saveDocument($template, $filename);

            // Update record with file path
            $record->update(['file_surat' => $filePath]);

            // Convert to PDF
            $this->convertToPdf($filePath, $record, $this->getFolderName());
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
            Log::error('PhpWord Error: ' . $e->getMessage());
            Log::error('This might be due to template format or placeholder issues');
            throw new \Exception('Template processing failed: ' . $e->getMessage());
        } catch (\Exception $e) {
            Log::error('Document Generation Error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            throw $e;
        }
    }

    public function debugTemplate(): array
    {
        try {
            $templatePath = $this->getTemplatePath();
            $template = new TemplateProcessor($templatePath);

            // Get all variables from template
            $variables = $template->getVariables();
            Log::info('Template variables found: ' . json_encode($variables));

            return $variables;
        } catch (\Exception $e) {
            Log::error('Debug template error: ' . $e->getMessage());
            return [];
        }
    }
}
