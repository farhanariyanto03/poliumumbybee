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


// Pendaftaran dan Proses Pemeriksaan Step-by-Step
Route::controller(PasienController::class)->group(function () {
    Route::get('/pendaftaran', 'create')->name('pendaftaran.create');
    Route::post('/pendaftaran', 'store')->name('pendaftaran.store');

    Route::get('/pendaftaran/{id}/pemeriksaan', 'showPemeriksaan')->name('pasien.pemeriksaan');
    Route::get('/pendaftaran/{id}/diagnosa', 'showDiagnosis')->name('pasien.diagnosa');
    Route::get('/pendaftaran/{id}/farmasi', 'showFarmasi')->name('pasien.farmasi');
    Route::get('/pendaftaran/{id}/pembayaran', 'showPembayaran')->name('pasien.pembayaran');
});


// route dokter
Route::resource('doctors', DoctorController::class);

// route suratSakit

Route::get('/surat-keterangan-sakit', [SuratKeteranganSakitController::class, 'index'])->name('surat.sakit');
