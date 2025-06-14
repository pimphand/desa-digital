<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasUuids;

    protected  $guarded = [];

    protected $casts = [
        'syarat' => 'array',
    ];
}
