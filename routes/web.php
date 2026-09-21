<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carnet/asistencia/{user}', [PdfController::class, 'carnet'])->name('carnet.asistencia');
Route::get('/pdf/generate/timesheet/{user}', [PdfController::class, 'TimesheetRecords'])->name('pdf.example');
