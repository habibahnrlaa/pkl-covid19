<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteTableCoustumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coustumers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NIK');
            $table->string('NamaCoustumer');
            $table->text('Alamat');
            $table->string('TglLahir');
            $table->string('JenisKelamin');
            $table->string('StatusKawin');
            $table->string('NoHp');
            $table->string('username');
            $table->string('password');
            $table->string('photo');
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
        Schema::dropIfExists('coustumers');
    }
}
