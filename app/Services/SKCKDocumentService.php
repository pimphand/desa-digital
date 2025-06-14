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
            if (!file_exists($templatePath)) {
                throw new \Exception("Template file not found at: " . $templatePath);
            }

            $template = new TemplateProcessor($templatePath);

            // Replace placeholders
            $template->setValue('nomor', $record->no_surat);
            $template->setValue('nama', $record->nama);
            $template->setValue('nik', $record->nik);
            $template->setValue('ttl', $record->tempat_lahir . ', ' . $record->tanggal_lahir);
            $template->setValue('jenis_kelamin', $record->jenis_kelamin);
            $template->setValue('agama', $record->agama);
            $template->setValue('pekerjaan', $record->pekerjaan);
            $template->setValue('status', $record->status_perkawinan);
            $template->setValue('kewarganegaraan', $record->kewarganegaraan);
            $template->setValue('alamat', $record->alamat);
            $template->setValue('keperluan', $record->keperluan);
            $template->setValue('nama_desa', config('app.name'));
            $template->setValue('tanggal', now()->format('d F Y'));
            $template->setValue('nama_kepala_desa', 'Nama Kepala Desa');

            // Create temp directory if it doesn't exist
            $tempDir = 'surat';
            if (!Storage::exists($tempDir)) {
                Storage::makeDirectory($tempDir);
            }

            // Generate unique filename
            $filename = $record->id . '.docx';
            $filePath = 'surat/' . $filename;

            // Save the modified template to a temporary file first
            $tempFile = tempnam(sys_get_temp_dir(), 'skck_') . '.docx';
            $template->saveAs($tempFile);

            // Read the temporary file and save it using Storage::put
            $fileContent = file_get_contents($tempFile);
            $saved = Storage::disk('public')->put($filePath, $fileContent);

            // Clean up temporary file
            if (file_exists($tempFile)) {
                unlink($tempFile);
            }

            if (!$saved) {
                throw new \Exception("Failed to save DOCX file to storage using put method");
            }

            // Verify file exists
            if (!Storage::disk('public')->exists($filePath)) {
                throw new \Exception("DOCX file was not saved successfully");
            }

            // Update record with file path (without 'public/' prefix)
            $record->update(['file_surat' => $filePath]);
        } catch (\Exception $e) {
            Log::error('SKCK Document Generation Error: ' . $e->getMessage());
            throw $e;
        }
    }
}
