<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    private $stepTitles = [
        0 => 'Pendaftaran',
        1 => 'Pemeriksaan Awal',
        2 => 'Diagnosis & Tindakan Poli Umum',
        3 => 'Farmasi',
        4 => 'Pembayaran'
    ];

    public function create()
    {
        return view('pasiens.create');
    }

    public function store(StorePasienRequest $request)
    {
        $pasien = Pasien::create($request->all());

        return redirect()->route('pasien.pemeriksaan', ['id' => $pasien->id])
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

    public function update(UpdatePasienRequest $request, Pasien $pasien)
    {
        $pasien->update($request->validated());

        return back()->with('success', 'Data pasien diperbarui.');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return back()->with('success', 'Data pasien dihapus.');
    }

    public function showPemeriksaan($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasiens.step2', compact('pasien'));
    }

    public function showDiagnosis($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasiens.step3', compact('pasien'));
    }

    public function showFarmasi($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasiens.step4', compact('pasien'));
    }

    public function showPembayaran($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasiens.step5', compact('pasien'));
    }
}