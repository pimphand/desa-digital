<?php

namespace App\Services;

use App\Models\Sku;

class SKUDocumentService extends AbstractDocumentService
{
    protected function getTemplateName(): string
    {
        return 'keterangan_usaha.docx';
    }

    protected function getPlaceholders($record): array
    {
        return [
            'nomor' => $record->no_surat ?? '',
            'nama' => $record->nama ?? '',
            'nik' => $record->nik ?? '',
            'alamat' => $record->alamat ?? '',
            'no_hp' => $record->no_hp ?? '',

            // Usaha details
            'bidang_usaha' => $record->bidang_usaha ?? '',
            'nama_usaha' => $record->nama_usaha ?? '',
            'jenis_usaha' => $record->jenis_usaha ?? '',
            'alamat_usaha' => $record->alamat_usaha ?? '',
            'sejak' => $record->sejak ?? '',
            'kondisi' => $record->kondisi ?? '',

            // Document details
            'nama_desa' => config('app.name') ?? '',
            'tanggal' => now()->format('d F Y'),
            'nama_kepala_desa' => 'Nama Kepala Desa'
        ];
    }

    public function generateDocument($record): void
    {
        if (!$record instanceof Sku) {
            throw new \InvalidArgumentException('Record must be an instance of Sku');
        }
        parent::generateDocument($record);
    }

    protected function convertToPdf(string $filePath, $record, $path): void
    {
        if (!$record instanceof Sku) {
            throw new \InvalidArgumentException('Record must be an instance of Sku');
        }
        parent::convertToPdf($filePath, $record, $path);
    }

    public function debugTemplate(): array
    {
        $skuService = new SKUDocumentService();
        $placeholders = $skuService->getPlaceholders(new Sku());
        return $placeholders;
    }

    protected function getFolderName(): string
    {
        return 'sku';
    }
}
