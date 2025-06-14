<?php

use App\Http\Controllers\GeneratePdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generate-skck-pdf', [GeneratePdfController::class, 'generateSkckPdf']);
