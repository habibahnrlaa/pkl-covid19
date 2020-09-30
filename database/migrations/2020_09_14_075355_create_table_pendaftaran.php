<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id_pendaftaran');
            $table->string('Data_Pemesanan');
            $table->string('NIK');
            $table->integer('id_Lokasi');
            $table->date('Tgl_Test');
            $table->date('Tanggal_Daftar');
            $table->integer('No_Antrian');
            $table->integer('Total_Biaya');
            $table->integer('id_Petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
