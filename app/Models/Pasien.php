<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens'; // atau nama tabel sesuai kebutuhan
    protected $fillable = [
        'norm', 'nama', 'nik', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin', 'agama', 'status_perkawinan', 'pendidikan',
        'pekerjaan', 'kewarganegaraan', 'no_telepon',
        'alamat_lengkap', 'rt', 'rw', 'kelurahan', 'kecamatan',
        'kota', 'provinsi', 'kode_pos', 'hubungan_wali',
        'nama_wali', 'tanggal_lahir_wali', 'telepon_wali', 'alamat_wali',
        'layanan', 'dokter', 'cara_pembayaran'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_lahir_wali' => 'date',
    ];
}