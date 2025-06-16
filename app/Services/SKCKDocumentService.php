<?php

namespace App\Services;

use App\Models\Skck;
use PhpOffice\PhpWord\TemplateProcessor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SKCKDocumentService extends AbstractDocumentService
{
    protected function getTemplateName(): string
    {
        return 'pengantar_skck.docx';
    }

    protected function getFolderName(): string
    {
        return 'skck';
    }

    protected function getPlaceholders($record): array
    {
        return [
            'nomor' => $record->no_surat ?? '',
            'nama' => $record->nama ?? '',
            'nik' => $record->nik ?? '',
            'ttl' => ($record->tempat_lahir ?? '') . ', ' . ($record->tanggal_lahir ?? ''),
            'jenis_kelamin' => $record->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan',
            'agama' => $record->agama ?? '',
            'pekerjaan' => $record->pekerjaan ?? '',
            'status' => $record->status_perkawinan ?? '',
            'kewarganegaraan' => $record->kewarganegaraan ?? '',
            'alamat' => $record->alamat . " " . $record->rt . '/' . $record->rw . ', ' . $record->dusun ?? '',
            'keperluan' => $record->keperluan ?? '',
            'nama_desa' => config('app.name') ?? '',
            'tanggal' => now()->format('d F Y'),
            'nama_kepala_desa' => 'Nama Kepala Desa'
        ];
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

    public function generateDocument($record): void
    {
        if (!$record instanceof Skck) {
            throw new \InvalidArgumentException('Record must be an instance of Skck');
        }
        parent::generateDocument($record);
    }

    protected function convertToPdf(string $filePath, $record, string $path): void
    {
        if (!$record instanceof Skck) {
            throw new \InvalidArgumentException('Record must be an instance of Skck');
        }
        parent::convertToPdf($filePath, $record, $path);
    }

    /**
     * Debug method to check what placeholders exist in template
     */
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
