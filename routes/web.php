<?php

use App\Http\Controllers\Master\DoctorController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuratKeteranganSakitController;


// Route::get('/', function () {
//     return view('main.index');
// });

// Route::get('/{main}/{view}', [PageController::class, 'show']);

// Dashboard
Route::get('/', function () { return view('dashboard'); })->name('dashboard');

// Pendaftaran
Route::get('/pendaftaran', [PasienController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PasienController::class, 'store'])->name('pendaftaran.store');

// Surat
Route::get('/surat/sehat', function () { return view('surat.sehat'); })->name('surat.sehat');
Route::get('/surat/sakit', function () { return view('surat.sakit'); })->name('surat.sakit');

// Poli Umum
Route::get('/poliumum/antrian', function () { return view('poli.umum.antrian'); });
Route::get('/poliumum/tindakan', function () { return view('poli.umum.tindakan'); });

// Farmasi
Route::get('/farmasi/dataobat', function () { return view('farmasi.dataobat'); });
Route::get('/farmasi/resep', function () { return view('farmasi.resep'); });
Route::get('/farmasi/pengambilan', function () { return view('farmasi.pengambilan'); });

// Master Data
Route::get('/masterdata/pasien', function () { return view('masterdata.pasien'); });

// Doctor
Route::get('/doctor', function () { return view('dokter.index'); })->name('doctor.index');


// // route dokter
// Route::resource('doctors', DoctorController::class);

// // route suratSakit

// Route::get('/surat-keterangan-sakit', [SuratKeteranganSakitController::class, 'index'])->name('surat.sakit');
