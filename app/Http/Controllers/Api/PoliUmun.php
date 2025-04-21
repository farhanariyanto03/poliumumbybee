<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PoliUmun extends Controller
{
    public function getNoRM($id)
    {
        $pendaftaran = Pendaftaran::with('pasien')->find($id);
        if ($pendaftaran) {
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $pendaftaran
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }
}
