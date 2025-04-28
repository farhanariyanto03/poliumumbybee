<?php

use App\Http\Controllers\Master\DoctorController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuratKeteranganSakitController;

Route::get('/', function () {
    return view('main.index');
});

Route::get('/{main}/{view}', [PageController::class, 'show']);

Route::resource('pasien', PasienController::class);
Route::resource('doctors', DoctorController::class);

// route suratSakit

Route::get('/surat-keterangan-sakit', [SuratKeteranganSakitController::class, 'index'])->name('surat.sakit');
