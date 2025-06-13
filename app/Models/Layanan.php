<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
