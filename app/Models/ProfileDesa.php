<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileDesa extends Model
{
    use \Illuminate\Database\Eloquent\Concerns\HasUuids;

    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'email',
        'website',
        'logo',
        'thumbnail',
        'banner_data',
        'visi_misi',
        'batas_wilayah',
        'sejarah_desa',
        'lokasi',
    ];

    protected $casts = [
        'visi_misi' => 'array',
        'batas_wilayah' => 'array',
        'lokasi' => 'array',
        'banner_data' => 'array',
    ];
}
