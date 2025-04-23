@extends('layouts.master')

@section('title', 'SIP-Kes')

@section('pageContent')
@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-3">
    <h2 style="color: #111754; font-weight: 800; font-size: 70px; line-height: 100%; letter-spacing: 5%; font-family: 'Montserrat', sans-serif;">
        Antrean Poli Umum
    </h2>

    <!-- Search Bar -->
    <div class="mb-3 d-flex justify-content-end">
        <input type="text" class="form-control w-25 me-2" placeholder="Cari Pasien...">
        <button class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered" style="background-color: white;">
            <thead style="background-color: #F9FAFC;">
                <tr style="text-align: center;">
                    <th>NO ANTRIAN</th>
                    <th>NOMOR RM</th>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>Tanggal Lahir</th>
                    <th>TANGGAL PERIKSA</th>
                    <th>UNIT LAYANAN</th>
                    <th>DOKTER</th>
                    <th>TIPE PASIEN</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($antreanPoliUmum as $a)
                <tr style="text-align: center;">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->no_rm }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->nik }}</td>
                    <td>{{ $a->tanggal_lahir }}</td>
                    <td>{{ $a->tanggal_periksa }}</td>
                    <td>{{ $a->unit_layanan }}</td>
                    <td>{{ $a->dokter }}</td>
                    <td>{{ $a->tipe_pasien }}</td>
                    <td class="{{ $a->status == 'Diperiksa' ? 'text-primary' : 'text-warning' }}">
                        {{ $a->status }}
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm text-white">Pilih</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Custom CSS -->
<style>
    th {
        white-space: nowrap;
        background-color: #F9FAFC !important;
        border: 1px solid #B9B9B9 !important;
        font-weight: bold;
        text-align: center;
        vertical-align: middle;
    }

    td {
        vertical-align: middle;
    }

    table {
        border: 1px solid #B9B9B9;
    }
</style>
@endsection
