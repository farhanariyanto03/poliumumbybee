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
        Schema::create('data_wali_pasien', function (Blueprint $table) {
            $table->bigIncrements('id_data_wali_pasien');
            $table->integer('no_rm');
            $table->string('nama_wali', 100);
            $table->date('tanggal_lahir_wali');
            $table->string('hubungan_dengan_pasien');
            $table->string('no_telepon_wali', 15)->nullable();
            $table->string('alamat_wali', 100)->nullable();
        
            $table->foreign('no_rm')->references('no_rm')->on('data_pasiens')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_walis');
    }
};
