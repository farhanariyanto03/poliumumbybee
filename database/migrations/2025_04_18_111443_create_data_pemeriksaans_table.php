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
        Schema::create('data_pemeriksaans', function (Blueprint $table) {
            $table->bigIncrements('id_data_pemeriksaan');
            $table->integer('no_rm');
            $table->unsignedBigInteger('id_layanan'); // fk
            $table->string('kode_tindakan'); // fk
            $table->string('kode_diagnosa', 10); // fk
            $table->unsignedBigInteger('id_perawat'); // fk
            $table->unsignedBigInteger('id_obat'); // fk
            $table->unsignedBigInteger('id_pendaftaran'); // fk
            $table->timestamp('tanggal_periksa_pasien');

            $table->unsignedInteger('sistole')->nullable();
            $table->unsignedInteger('diastole')->nullable();
            $table->string('suhu', 5)->nullable();
            $table->string('tb_pasien', 3)->nullable();
            $table->string('bb_pasien', 3)->nullable();
            $table->string('rr_pasien', 15)->nullable();
            $table->string('spo2', 5)->nullable();

            $table->string('diagnosa', 150)->nullable();
            $table->text('subjektif')->nullable();
            $table->text('pemeriksaan_fisik')->nullable();
            $table->string('kunjungan_sakit', 5)->nullable();
            $table->date('rencana_kontrol')->nullable();
            $table->string('catatan_obat', 100)->nullable();
            $table->unsignedTinyInteger('status')->default(1);

            $table->foreign('no_rm')->references('no_rm')->on('data_pasiens')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('id_layanan')->references('id')->on('layanan');
            // $table->foreign('kode_tindakan')->references('kode')->on('tindakan');
            $table->foreign('kode_diagnosa')->references('kode_diagnosa')->on('icd_10');
            // $table->foreign('id_perawat')->references('id')->on('perawat');
            // $table->foreign('id_obat')->references('id')->on('obat');
            $table->foreign('id_pendaftaran')->references('id_pendaftaran')->on('pendaftarans')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pemeriksaans');
    }
};
