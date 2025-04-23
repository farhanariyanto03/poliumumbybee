@extends('layouts.master')

@section('title', 'SIP-Kes')

@section('pageContent')
<div class="container py-4">
    <h1 class="mb-4" style="color: #111754; font-weight: 700; font-size: 2.5rem;">Antrean Poli Umum</h1>

    {{-- Search Bar --}}
    <div class="mb-3 d-flex justify-content-end">
        <input type="text" class="form-control w-25 me-2" placeholder="Data Pasien">
        <button class="btn btn-primary"><i class="ti ti-search"></i></button>
    </div>

    {{-- Table --}}
    <div class="card p-3 shadow-sm">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead style="background-color: #F9FAFC; border: 1px solid #B9B9B9;">
                    <tr>
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
                    {{-- Simulasi data dummy --}}
                    @foreach (range(1, 10) as $i)
                    <tr style="background-color: white;">
                        <td>{{ $i }}</td>
                        <td>00100{{ $i }}</td>
                        <td>{{ ['Arga Pratama', 'Keisha Anindya', 'Dimas Fadlan', 'Nayla Putri', 'Rizqy Maulana', 'Alika Salsabila', 'Revan Aditya', 'Tania Ramadhani', 'Ilham Setiawan', 'Vania Lestari'][$i-1] }}</td>
                        <td>{{ ['3590168908650001','359578436678975','3597752345678999','3527865357988752','3578864323456788','3594576445678956','3594733458886544','3598754323456788','3576544567899667','3590776555444332'][$i-1] }}</td>
                        <td>{{ ['01-03-2004','16-12-2000','31-03-1998','07-10-2006','25-07-2001','23-01-1997','15-08-1978','19-11-2008','13-04-2005','14-02-1999'][$i-1] }}</td>
                        <td>17-04-2025</td>
                        <td>Umum</td>
                        <td>{{ ['dr. Oktavia', 'dr. Erwiyan', 'dr. Laili Fitriana', 'dr. Erwiyan', 'dr. Oktavia Putri', 'dr. Sisil Karina', 'dr. Shofi', 'dr. Arvin Maulana', 'dr. Arvin Maulana', 'dr. Sisil Karina'][$i-1] }}</td>
                        <td>{{ $i % 3 == 0 ? 'BPJS' : 'Umum' }}</td>
                        <td>
                            @if($i <= 5)
                                <span style="color: #007bff;">Diperiksa</span>
                            @else
                                <span style="color: #F5A623;">Antri</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">Pilih</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
