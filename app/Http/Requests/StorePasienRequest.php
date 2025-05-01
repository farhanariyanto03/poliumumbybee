<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePasienRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Sesuaikan jika ada auth
    }

    public function rules()
    {
        return [
            'norm' => 'required|string|max:20|unique:pasiens,norm',
            'nama' => 'required|string|max:100',
            'nik' => 'required|digits:16|unique:pasiens,nik',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:laki_laki,perempuan,tidak_diketahui,tidak_mengisi,tidak_dapat_ditentukan',
            'agama' => 'required|string',
            'status_perkawinan' => 'required|in:belum_kawin,kawin,cerai_hidup,cerai_mati',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'kewarganegaraan' => 'required|in:wni,wna',
            'no_telepon' => 'nullable|numeric|min:10',
            'alamat_lengkap' => 'required|string',
            'rt' => 'required|numeric|max_digits:3',
            'rw' => 'required|numeric|max_digits:3',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|digits:5',
            'hubungan_wali' => 'required|string',
            'nama_wali' => 'nullable|string',
            'tanggal_lahir_wali' => 'nullable|date',
            'telepon_wali' => 'nullable|numeric|min:10',
            'alamat_wali' => 'nullable|string',
            'layanan' => 'required|in:poliumum,poligigi,kia,circum,vaksin',
            'dokter' => 'required|string',
            'cara_pembayaran' => 'required|in:umum,bpjs',
        ];
    }
}