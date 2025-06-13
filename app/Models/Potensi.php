<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Potensi extends Model
{
    use HasUuids;
    protected  $guarded = [];

    protected $casts = [
        'koordinat' => 'array',
    ];
}
