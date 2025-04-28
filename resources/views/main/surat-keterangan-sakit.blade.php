<!-- resources/views/surat-keterangan-sakit.blade.php -->

@extends('layouts.master')

@section('title', 'SIP-Kes')

@section('pageContent')
@extends('layouts.app') {{-- Sesuaikan dengan layoutmu --}}

@section('content')
<div class="container py-4">
    <h1 class="text-center fw-bold" style="font-size: 3rem; text-shadow: 2px 2px 5px rgba(0,0,0,0.3);">
        Surat Keterangan Sakit
    </h1>

    <div class="d-flex justify-content-end my-4">
        <div class="input-group" style="width: 300px;">
            <input type="text" class="form-control" placeholder="Data Pasien" aria-label="Search">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search"></i> {{-- Pastikan fontawesome sudah di-include --}}
            </button>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead class="text-center">
                        <tr>
                            <th>NO.</th>
                            <th>TANGGAL PERIKSA</th>
                            <th>NO. RM</th>
                            <th>NOMOR SURAT</th>
                            <th>NAMA PASIEN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle text-center">
                        @foreach ($pasien as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_periksa)->format('d-m-Y') }}</td>
                                <td>{{ $item->no_rm }}</td>
                                <td>{{ $item->nomor_surat }}</td>
                                <td>{{ $item->nama_pasien }}</td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('surat.cetak', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-print"></i> Cetak
                                    </a>
                                    <a href="{{ route('surat.detail', $item->id) }}" class="btn btn-info btn-sm">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        {{-- Kalau data kosong --}}
                        @if($pasien->isEmpty())
                            <tr>
                                <td colspan="6">Data tidak ditemukan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
