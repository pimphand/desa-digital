<?php

namespace App\Services;

use App\Models\Skck;
use PhpOffice\PhpWord\TemplateProcessor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SKCKDocumentService
{
    public function generateDocument(Skck $record): void
    {
        try {
            // Load the template
            $templatePath = storage_path('template/pengantar_skck.docx');
            Log::info('Loading template from: ' . $templatePath);

            if (!file_exists($templatePath)) {
                throw new \Exception("Template file not found at: " . $templatePath);
            }

            $template = new TemplateProcessor($templatePath);
            Log::info('Template loaded successfully');

            // Replace placeholders - GUNAKAN FORMAT ${variable} untuk template DOCX
            $placeholders = [
                'nomor' => $record->no_surat ?? '',
                'nama' => $record->nama ?? '',
                'nik' => $record->nik ?? '',
                'ttl' => ($record->tempat_lahir ?? '') . ', ' . ($record->tanggal_lahir ?? ''),
                'jenis_kelamin' => $record->jenis_kelamin ?? '',
                'agama' => $record->agama ?? '',
                'pekerjaan' => $record->pekerjaan ?? '',
                'status' => $record->status_perkawinan ?? '',
                'kewarganegaraan' => $record->kewarganegaraan ?? '',
                'alamat' => $record->alamat ?? '',
                'keperluan' => $record->keperluan ?? '',
                'nama_desa' => config('app.name') ?? '',
                'tanggal' => now()->format('d F Y'),
                'nama_kepala_desa' => 'Nama Kepala Desa'
            ];

            // Set semua placeholder sekaligus untuk efisiensi
            Log::info('Setting placeholders: ' . json_encode($placeholders));
            $template->setValues($placeholders);

            // Alternative: Set satu per satu jika setValues() tidak bekerja
            /*
            foreach ($placeholders as $key => $value) {
                Log::info("Setting placeholder {$key} with value: {$value}");
                $template->setValue($key, $value);
            }
            */

            // Cek dan hapus placeholder yang tidak terpakai
            $template->setImageValue('foto', null); // Jika ada placeholder foto

            // Delete old file if exists
            if ($record->file_surat && Storage::disk('public')->exists($record->file_surat)) {
                Log::info('Deleting old file: ' . $record->file_surat);
                Storage::disk('public')->delete($record->file_surat);
            }

            // Create temp directory if it doesn't exist
            $tempDir = 'surat';
            if (!Storage::disk('public')->exists($tempDir)) {
                Log::info('Creating directory: ' . $tempDir);
                Storage::disk('public')->makeDirectory($tempDir);
            }

            // Generate unique filename to avoid caching issues
            $timestamp = now()->format('YmdHis');
            $filename = $record->id . '_' . $timestamp . '.docx';
            $filePath = 'surat/' . $filename;
            Log::info('Generated file path: ' . $filePath);

            // Save directly to final destination
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

            if ($fileSize < 1000) { // File terlalu kecil, kemungkinan corrupt
                Log::warning('Generated file size is suspiciously small: ' . $fileSize . ' bytes');
            }

            // Update record with file path
            $record->update(['file_surat' => $filePath]);
            Log::info('Record updated with new file path: ' . $filePath);
        } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
            Log::error('PhpWord Error: ' . $e->getMessage());
            Log::error('This might be due to template format or placeholder issues');
            throw new \Exception('Template processing failed: ' . $e->getMessage());
        } catch (\Exception $e) {
            Log::error('SKCK Document Generation Error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            throw $e;
        }
    }

    /**
     * Debug method to check what placeholders exist in template
     */
    public function debugTemplate(): array
    {
        try {
            $templatePath = storage_path('template/pengantar_skck.docx');
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
