@extends('layouts.master')

@section('title', 'SIP-Kes')

@section('pageContent')
<div class="container my-4">
    <h2 class="text-center fw-bold" style="font-size: 2.5rem; color: #1A1A1A;">Antrean Poli Umum</h2>

    <div class="d-flex justify-content-end mb-3">
        <div class="input-group" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Data Pasien">
            <button class="btn btn-primary" type="button">
                <i class="ti ti-search"></i> {{-- Sesuaikan dengan icon library kamu --}}
            </button>
        </div>
    </div>

    <div class="card shadow p-3">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>NO ANTRIAN</th>
                        <th>NOMOR RM</th>
                        <th>NAMA</th>
                        <th>NIK</th>
                        <th>Tanggal Lahir</th>
                        <th>TANGGAL PERIKSA</th>
                        <th>UNIT LAYANAN</th>
                        <th>DOKTER</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Contoh data statis. Nanti ini diganti dari controller --}}
                    @foreach ($antreanPoliUmum as $a)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $a->no_rm }}</td>
                            <td>{{ $a->nama }}</td>
                            <td>{{ $a->nik }}</td>
                            <td>{{ $a->tanggal_lahir->format('d-m-Y') }}</td>
                            <td>{{ $a->tanggal_periksa->format('d-m-Y') }}</td>
                            <td>{{ $a->unit_layanan }}</td>
                            <td>{{ $a->dokter }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
