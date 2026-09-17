<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carnet/asistencia/{user}', [PdfController::class, 'carnet'])->name('carnet.asistencia');
Route::get('/pdf/generate/timesheet/{user}', [PdfController::class, 'TimesheetRecords'])->name('pdf.example');
