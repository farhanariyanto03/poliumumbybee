<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PasienFactory extends Factory
{
    protected $model = Pasien::class;

    public function definition()
    {
        return [
            'norm' => 'RM' . mt_rand(1000, 9999),
            'nama' => $this->faker->name(),
            'nik' => $this->faker->unique()->numerify('################'),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-70 years', '-18 years'),
            'jenis_kelamin' => $this->faker->randomElement(['laki_laki', 'perempuan']),
            'agama' => $this->faker->randomElement(['islam', 'kristen', 'katolik', 'hindu', 'buddha']),
            'status_perkawinan' => $this->faker->randomElement(['belum_kawin', 'kawin']),
            'pendidikan' => $this->faker->randomElement(['sd', 'sltp', 'slta', 'd3', 's1']),
            'pekerjaan' => $this->faker->jobTitle,
            'kewarganegaraan' => $this->faker->randomElement(['wni', 'wna']),
            'no_telepon' => '08' . mt_rand(1000000000, 9999999999),
            'alamat_lengkap' => $this->faker->address,
            'rt' => str_pad(mt_rand(1, 99), 3, "0", STR_PAD_LEFT),
            'rw' => str_pad(mt_rand(1, 99), 3, "0", STR_PAD_LEFT),
            'kelurahan' => $this->faker->word(),
            'kecamatan' => $this->faker->word(),
            'kota' => $this->faker->city(),
            'provinsi' => $this->faker->state(),
            'kode_pos' => mt_rand(10000, 99999),
            'hubungan_wali' => $this->faker->randomElement(['diri_sendiri', 'orang_tua', 'saudara']),
            'nama_wali' => $this->faker->optional()->name(),
            'tanggal_lahir_wali' => $this->faker->optional()->dateTimeBetween('-70 years', '-18 years'),
            'telepon_wali' => $this->faker->optional()->phoneNumber,
            'alamat_wali' => $this->faker->optional()->address,
            'layanan' => $this->faker->randomElement(['poliumum', 'poligigi', 'kia', 'circum', 'vaksin']),
            'dokter' => $this->faker->name(),
            'cara_pembayaran' => $this->faker->randomElement(['umum', 'bpjs']),
        ];
    }
}