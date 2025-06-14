<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skck;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GeneratePdfController extends Controller
{
    public function generateSkckPdf()
    {
        try {
            $skck = Skck::first();

            if (!$skck) {
                return response()->json(['error' => 'No SKCK record found'], 404);
            }

            // Load the template
            $templatePath = storage_path('template/pengantar_skck.docx');

            if (!file_exists($templatePath)) {
                return response()->json(['error' => 'Template file not found'], 404);
            }

            $template = new TemplateProcessor($templatePath);

            // Replace placeholders - using {$placeholder} format
            $template->setValue('{$nomor}', $skck->no_surat);
            $template->setValue('{$nama}', $skck->nama);
            $template->setValue('{$nik}', $skck->nik);
            $template->setValue('{$ttl}', $skck->tempat_lahir . ', ' . $skck->tanggal_lahir);
            $template->setValue('{$jenis_kelamin}', $skck->jenis_kelamin);
            $template->setValue('{$agama}', $skck->agama);
            $template->setValue('{$pekerjaan}', $skck->pekerjaan);
            $template->setValue('{$status}', $skck->status_perkawinan);
            $template->setValue('{$kewarganegaraan}', $skck->kewarganegaraan);
            $template->setValue('{$alamat}', $skck->alamat);
            $template->setValue('{$keperluan}', $skck->keperluan);
            $template->setValue('{$nama_desa}', config('app.name'));
            $template->setValue('{$tanggal}', now()->format('d F Y'));
            $template->setValue('{$nama_kepala_desa}', 'Nama Kepala Desa');

            // Create temp directory if it doesn't exist
            $tempDir = storage_path('app/public/surat');
            if (!file_exists($tempDir)) {
                mkdir($tempDir, 0755, true);
            }

            // Save the modified template
            $tempDocx = $tempDir . '/' . Str::uuid() . '.docx';
            $template->saveAs($tempDocx);

            if (!file_exists($tempDocx)) {
                return response()->json(['error' => 'Failed to save temporary DOCX file'], 500);
            }

            $skck->file_surat = $tempDocx;
            $skck->save();

            return [
                'message' => 'SKCK PDF generated successfully',
                'file_path' => $tempDocx,
                'download_link' => Storage::url('public/surat/' . basename($tempDocx))
            ];
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
