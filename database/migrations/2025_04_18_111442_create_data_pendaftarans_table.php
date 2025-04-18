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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id_pendaftaran');
            $table->unsignedBigInteger('id_poli'); // fk ke tabel poli
            $table->integer('no_rm');
            $table->unsignedBigInteger('id_jenis_pembayaran'); // fk ke jenis pembayaran
            $table->unsignedBigInteger('id_dokter'); // fk ke dokter
            $table->unsignedBigInteger('id_data_wali_pasien'); // fk ke data_wali_pasien
            // $table->unsignedBigInteger('id_data_perawat'); // fk ke data_perawat

            // Foreign key relations (optional)
            // $table->foreign('id_poli')->references('id')->on('poli');
            $table->foreign('no_rm')->references('no_rm')->on('data_pasiens')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_data_perawat')->references('id_data_perawat')->on('data_perawats')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_jenis_pembayaran')->references('id')->on('jenis_pembayaran');
            $table->foreign('id_dokter')->references('id')->on('dokter');
            $table->foreign('id_data_wali_pasien')->references('id_data_wali_pasien')->on('data_wali_pasien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pendaftarans');
    }
};
