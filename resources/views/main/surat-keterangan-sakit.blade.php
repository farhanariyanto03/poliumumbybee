<!-- resources/views/surat-keterangan-sakit.blade.php -->

@extends('layouts.master')

@section('title', 'SIP-Kes')

@section('pageContent')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-4xl font-bold text-center mb-8 text-blue-900">Surat Keterangan Sakit</h1>

    <div class="flex justify-end mb-4">
        <div class="relative">
            <select class="border border-gray-300 rounded-lg p-2 mr-2">
                <option>Data Pasien</option>
                <!-- Add more options if needed -->
            </select>
            <button class="absolute top-2 right-2 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l4-4-4-4m6 8l4-4-4-4" />
                </svg>
            </button>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full table-auto text-center">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">No.</th>
                    <th class="px-4 py-2">Tanggal Periksa</th>
                    <th class="px-4 py-2">No. RM</th>
                    <th class="px-4 py-2">Nomor Surat</th>
                    <th class="px-4 py-2">Nama Pasien</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $pasien = [
                        ['tanggal' => '17-04-2025', 'rm' => 'RM000123', 'nomor_surat' => '30/B/IM/IV/2025', 'nama' => 'Laili Fitriana'],
                        ['tanggal' => '17-04-2025', 'rm' => 'RM000124', 'nomor_surat' => '31/B/IM/IV/2025', 'nama' => 'Dewitasari Putri'],
                        ['tanggal' => '17-04-2025', 'rm' => 'RM000125', 'nomor_surat' => '32/B/IM/IV/2025', 'nama' => 'Erwiyan'],
                        ['tanggal' => '17-04-2025', 'rm' => 'RM000126', 'nomor_surat' => '33/B/IM/IV/2025', 'nama' => 'Shofi'],
                        ['tanggal' => '17-04-2025', 'rm' => 'RM000127', 'nomor_surat' => '34/B/IM/IV/2025', 'nama' => 'Na Jaemin'],
                        ['tanggal' => '18-04-2025', 'rm' => 'RM000128', 'nomor_surat' => '35/B/IM/IV/2025', 'nama' => 'Mingyu'],
                        ['tanggal' => '18-04-2025', 'rm' => 'RM000129', 'nomor_surat' => '36/B/IM/IV/2025', 'nama' => 'Lalisa'],
                        ['tanggal' => '18-04-2025', 'rm' => 'RM000131', 'nomor_surat' => '38/B/IM/IV/2025', 'nama' => 'lu think think'],
                        ['tanggal' => '18-04-2025', 'rm' => 'RM000132', 'nomor_surat' => '39/B/IM/IV/2025', 'nama' => 'Joshuaa'],
                        ['tanggal' => '18-04-2025', 'rm' => 'RM000130', 'nomor_surat' => '37/B/IM/IV/2025', 'nama' => 'Asahi'],
                    ];
                @endphp

                @foreach ($pasien as $index => $p)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $p['tanggal'] }}</td>
                        <td class="px-4 py-2">{{ $p['rm'] }}</td>
                        <td class="px-4 py-2">{{ $p['nomor_surat'] }}</td>
                        <td class="px-4 py-2">{{ $p['nama'] }}</td>
                        <td class="px-4 py-2 flex justify-center space-x-2">
                            <button class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-1 px-3 rounded flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l4-4-4-4m6 8l4-4-4-4" />
                                </svg>
                                Cetak
                            </button>
                            <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-1 px-3 rounded">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
