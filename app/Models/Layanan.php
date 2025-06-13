<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Layanan extends Model
{
    use \Illuminate\Database\Eloquent\Concerns\HasUuids;
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'persyaratan' => 'array',
        'prosedur' => 'array',
    ];

    /**
     * static function boot()
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = (string) Str::slug($model->nama_layanan);
        });
    }
}
