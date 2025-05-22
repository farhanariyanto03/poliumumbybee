<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\generalConsentController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\TriageController;
use App\Http\Controllers\PoliUmum\AntrianRiwayatController;
use App\Http\Controllers\PoliUmum\PendafataranController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('main.index');
});
Route::get('/login', function () {
    return view('login');
});

Route::prefix('dokter')->name('doctor.')->group(function () {
    Volt::route('/', 'doctor.index')->name('index');
    Volt::route('/create', 'doctor.create')->name('create');
    Volt::route('/{dokter}', 'doctor.edit')->name('edit');
});

// Route General Consent
Route::post('/main/general-content/save', [generalConsentController::class, 'store'])->name('general-consent.store');
Route::get('/main/cetak-general-consent/{id}', [generalConsentController::class, 'cetak'])->name('general-consent.cetak');
Route::get('/sign-request/{token}', [generalConsentController::class, 'showForm']);
Route::post('/sign-request/{token}', [generalConsentController::class, 'submitForm']);


Route::resource('/layanan', LayananController::class);
// Route::resource('/users', UsersController::class);
Route::resource('/triase', TriageController::class);

Route::get('/get-layanan-by-ajax', [LayananController::class, 'getByAjax'])->name('get-layanan-by-ajax');
Route::get('/get-list-layanan', [LayananController::class, 'getListLayanan'])->name('get-list-layanan');
Route::get('/get-list-icd', [TriageController::class, 'getListICD'])->name('get-list-icd');
Route::post('/store-pasien', [TriageController::class, 'storePasien'])->name('store-pasien');
Route::get('/get-pasien', [TriageController::class, 'getPasien'])->name('get-pasien');
Route::get('/get-list-obat', [TriageController::class, 'getObat'])->name('get-list-obat');
Route::get('/print-pdf/{id}', [TriageController::class, 'printPdf'])->name('print-pdf');

Route::get('/main/pendaftaran', [PendafataranController::class, 'index'])->name('pendaftaran.index');
Route::post('/main/pendaftaran/pasien', [PendafataranController::class, 'storePendafataran'])->name('pendaftaran.store');
Route::get('/get-data-pasien/{no_rm}', [PendafataranController::class, 'getDataPasien']);
// Route::get('/get-kabupaten/{province_code}', [PendafataranController::class, 'getKabupaten']);
// Route::get('/get-kecamatan/{city_code}', [PendafataranController::class, 'getKecamatan']);
// Route::get('/get-desa/{code_kecamatan}', [PendaftaranController::class, 'getDesa']);

Route::get('/{main}/{view}', [PageController::class, 'show']);
Route::get('/main/to/{path}', [PageController::class, 'showByPath'])->where('path', '.*');

Route::prefix('main/poliumum')->group(function () {
    Route::get('/antrean', [AntrianRiwayatController::class, 'antrean'])->name('antrean.poliumum');
    Route::get('/riwayat', [AntrianRiwayatController::class, 'riwayat'])->name('riwayat.poliumum');
});


// Route detail riwayat pasien
Route::get('/poli-umum/detail/{rm}', function ($rm) {
    return view('PoliUmum.detailPasien');
})->name('poli-umum.detail');

Route::get('/poli-umum/search-pasien', [App\Http\Controllers\PoliUmum\AntrianRiwayatController::class, 'searchPasien'])->name('poli-umum.search-pasien');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

use App\Http\Controllers\PoliUmum\SuratKeteranganSakitController;
use App\Http\Controllers\PoliUmum\SuratKeteranganSehatController;

// Route Surat Keterangan Sehat
Route::get('surat-keterangan-sehat', [SuratKeteranganSehatController::class, 'index'])->name('surat.sehat');

// Route Surat Keterangan Sakit
Route::get('surat-keterangan-sakit', [SuratKeteranganSakitController::class, 'index'])->name('surat.sakit');

// Route Riwayat Medis
use App\Http\Controllers\RiwayatMedisController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

Route::get('riwayat-medis', [RiwayatMedisController::class, 'index'])->name('riwayat.medis');
//Route::get('riwayat-medis/{id}', [RiwayatMedisController::class, 'show'])->name('riwayat.medis.show');

// Poli
Route::resource('/poli', PoliController::class);

// Laporan Kunjungan
Route::get('/laporan/kunjungan', [KunjunganController::class, 'index']);
Route::get('/laporan/kunjungan/report', [KunjunganController::class, 'getReport'])->name('api.poli-kia.report');



Route::get('/main/{path}', [PageController::class, 'showByPath'])->where('path', '.*');
