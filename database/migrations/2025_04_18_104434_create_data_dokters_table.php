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
        Schema::create('data_dokters', function (Blueprint $table) {
            $table->bigIncrements('id_data_dokter');
            $table->string('nama_dokter', 150);
            $table->string('gelar_depan', 10)->nullable();
            $table->string('gelar_belakang', 20)->nullable();
            $table->string('nip_dokter', 20)->nullable();
            $table->string('no_sip_dokter', 30)->nullable();
            $table->string('email_dokter', 100)->nullable();
            $table->string('no_telepon_dokter', 15)->nullable();
            $table->time('jadwal_layanan_dokter')->nullable();
            $table->string('alamat_dokter', 150)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dokters');
    }
};
