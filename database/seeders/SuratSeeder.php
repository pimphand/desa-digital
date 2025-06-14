<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "SKCK" => [
                "nama" => "Surat Keterangan Catatan Kepolisian",
                "icons" => "heroicon-o-shield-check",
                "code" => "SKCK",
            ],
            "SKTM" => [
                "nama" => "Surat Keterangan Tidak Mampu",
                "icons" => "heroicon-o-document-text",
                "code" => "SKTM",
            ],
            "SK" => [
                "nama" => "Surat Kematian",
                "icons" => "heroicon-o-document",
                "code" => "SK",
            ],
            "SKP" => [
                "nama" => "Surat Keterangan Pindah",
                "icons" => "heroicon-o-arrow-right",
                "code" => "SKP",
            ],
            "SKD" => [
                "nama" => "Surat Keterangan Domisili",
                "icons" => "heroicon-o-home",
                "code" => "SKD",
            ],
            "SKBM" => [
                "nama" => "Surat Keterangan Belum Menikah",
                "icons" => "heroicon-o-heart",
                "code" => "SKBM",
            ],
            "SKU" => [
                "nama" => "Surat Keterangan Usaha",
                "icons" => "heroicon-o-briefcase",
                "code" => "SKU",
            ],
            "SKC" => [
                "nama" => "Surat Keterangan Cerai",
                "icons" => "heroicon-o-gavel",
                "code" => "SKC",
            ],
            "NA" => [
                "nama" => "Surat Pengantar Nikah",
                "icons" => "heroicon-o-wedding",
                "code" => "NA",
            ],
        ];

        foreach ($data as $key => $value) {
            \App\Models\Surat::updateOrCreate(
                ['code' => $key],
                [
                    'nama' => $value['nama'],
                    'icons' => $value['icons'],
                    'syarat' => json_encode([]),
                ]
            );
        }
        $this->command->info('Surat table seeded successfully!');
    }
}
