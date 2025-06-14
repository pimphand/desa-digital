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

            // Replace placeholders
            $placeholders = [
                'nomor' => $record->no_surat,
                'nama' => $record->nama,
                'nik' => $record->nik,
                'ttl' => $record->tempat_lahir . ', ' . $record->tanggal_lahir,
                'jenis_kelamin' => $record->jenis_kelamin,
                'agama' => $record->agama,
                'pekerjaan' => $record->pekerjaan,
                'status' => $record->status_perkawinan,
                'kewarganegaraan' => $record->kewarganegaraan,
                'alamat' => $record->alamat,
                'keperluan' => $record->keperluan,
                'nama_desa' => config('app.name'),
                'tanggal' => now()->format('d F Y'),
                'nama_kepala_desa' => 'Nama Kepala Desa'
            ];

            foreach ($placeholders as $key => $value) {
                Log::info("Setting placeholder {$key} with value: {$value}");
                $template->setValue($key, $value);
            }

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

            // Generate filename based on record ID
            $filename = $record->id . '.docx';
            $filePath = 'surat/' . $filename;
            Log::info('Generated file path: ' . $filePath);

            // Save the modified template to a temporary file first
            $tempFile = tempnam(sys_get_temp_dir(), 'skck_') . '.docx';
            Log::info('Saving to temporary file: ' . $tempFile);
            $template->saveAs($tempFile);

            // Verify temp file was created
            if (!file_exists($tempFile)) {
                throw new \Exception("Failed to create temporary file");
            }

            // Read the temporary file and save it using Storage::put
            $fileContent = file_get_contents($tempFile);
            if ($fileContent === false) {
                throw new \Exception("Failed to read temporary file");
            }

            Log::info('Saving file to storage: ' . $filePath);
            $saved = Storage::disk('public')->put($filePath, $fileContent);

            // Clean up temporary file
            if (file_exists($tempFile)) {
                unlink($tempFile);
                Log::info('Temporary file cleaned up');
            }

            if (!$saved) {
                throw new \Exception("Failed to save DOCX file to storage using put method");
            }

            // Verify file exists and has content
            if (!Storage::disk('public')->exists($filePath)) {
                throw new \Exception("DOCX file was not saved successfully");
            }

            $fileSize = Storage::disk('public')->size($filePath);
            Log::info('File saved successfully. Size: ' . $fileSize . ' bytes');

            // Update record with file path
            $record->update(['file_surat' => $filePath]);
            Log::info('Record updated with new file path');
        } catch (\Exception $e) {
            Log::error('SKCK Document Generation Error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            throw $e;
        }
    }
}
