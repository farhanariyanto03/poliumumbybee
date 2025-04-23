@extends('layouts.master')

@section('title', 'SIP-Kes')

@section('pageContent')
<h1 class="fw-bold text-primary mb-4">Antrean Poli Umum</h1>

<div class="card p-4 shadow">
    <table class="table table-bordered table-striped">
        <thead>
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
            @php
                $antreanPoliUmum = [
                    ['no_rm' => '001001', 'nama' => 'Arga Pratama', 'nik' => '3590168908650001', 'tgl_lahir' => '01-03-2004', 'tgl_periksa' => '17-04-2025', 'layanan' => 'Umum', 'dokter' => 'dr. Oktavia'],
                    ['no_rm' => '001002', 'nama' => 'Keisha Anindya', 'nik' => '359578436678975', 'tgl_lahir' => '16-12-2000', 'tgl_periksa' => '17-04-2025', 'layanan' => 'Umum', 'dokter' => 'dr. Erwiyan'],
                    // Tambah data lain sesuai kebutuhan
                ];
            @endphp

            @foreach ($antreanPoliUmum as $index => $a)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $a['no_rm'] }}</td>
                    <td>{{ $a['nama'] }}</td>
                    <td>{{ $a['nik'] }}</td>
                    <td>{{ $a['tgl_lahir'] }}</td>
                    <td>{{ $a['tgl_periksa'] }}</td>
                    <td>{{ $a['layanan'] }}</td>
                    <td>{{ $a['dokter'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection