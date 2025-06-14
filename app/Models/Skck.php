<?php

namespace App\Models;

use App\Services\SKCKDocumentService;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Skck extends Model
{
    use HasUuids;
    protected  $guarded = [];
}
