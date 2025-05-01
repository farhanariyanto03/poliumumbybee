<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::paginate(10);
        return view('pasiens.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasiens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'norm' => 'required|string|max:20|unique:pasiens',
            'nama' => 'required|string|max:100',
            'nik' => 'required|digits:16|unique:pasiens',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:tidak_diketahui,laki_laki,perempuan,tidak_dapat_ditentukan,tidak_mengisi',
            'agama' => 'required|string',
            'status_perkawinan' => 'required|in:belum_kawin,kawin,cerai_hidup,cerai_mati',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'kewarganegaraan' => 'required|in:wni,wna',
            'no_telepon' => 'required|numeric|min:10',
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
            'telepon_wali' => 'nullable|numeric|min:10|max_digits:13',
            'alamat_wali' => 'nullable|string',
            'layanan' => 'required|in:poliumum,poligigi,kia,circum,vaksin',
            'dokter' => 'required|string',
            'cara_pembayaran' => 'required|in:umum,bpjs',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.pemeriksaan.create', ['id' => $pasien->id])
                         ->with('success', 'Data pasien berhasil disimpan.');
    }

    public function show(Pasien $pasien)
    {
        return view('pasiens.show', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'norm' => 'required|string|max:20|unique:pasiens,id,' . $pasien->id,
            'nik' => 'required|digits:16|unique:pasiens,id,' . $pasien->id,
        ]);

        $pasien->update($request->all());

        return back()->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return back()->with('success', 'Data pasien berhasil dihapus.');
    }
}