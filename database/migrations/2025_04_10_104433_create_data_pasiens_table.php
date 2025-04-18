<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pasiens', function (Blueprint $table) {
            $table->integer('no_rm')->primary(); // tanpa panjang, karena panjang tidak berlaku untuk integer
            $table->unsignedBigInteger('id_desa');
            $table->unsignedBigInteger('id_kecamatan');
            $table->unsignedBigInteger('id_kabupaten');
            $table->unsignedBigInteger('id_provinsi');
            $table->unsignedBigInteger('id_kode_pos');
        
            $table->string('nik_pasien', 16)->nullable();
            $table->string('nama_pasien', 150);
            $table->string('tempat_lahir_pasien', 50);
            $table->date('tanggal_lahir_pasien');
            $table->unsignedTinyInteger('jenis_kelamin');
            $table->unsignedTinyInteger('agama');
            $table->unsignedTinyInteger('pendidikan_pasien');
            $table->string('pekerjaan_pasien')->nullable();
            $table->string('alamat_pasien', 100);
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('no_telepon_pasien', 15)->nullable();
            $table->unsignedTinyInteger('status_perkawinan');
            $table->unsignedTinyInteger('kewarganegaraan');
            $table->unsignedTinyInteger('gol_darah');
        
            // Foreign keys bisa diaktifkan kalau tabel relasi sudah dibuat
            // $table->foreign('id_desa')->references('id')->on('desa');
            // $table->foreign('id_kecamatan')->references('id')->on('kecamatan');
            // $table->foreign('id_kabupaten')->references('id')->on('kabupaten');
            // $table->foreign('id_provinsi')->references('id')->on('provinsi');
            // $table->foreign('id_kode_pos')->references('id')->on('kode_pos');
        
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pasiens');
    }
};
