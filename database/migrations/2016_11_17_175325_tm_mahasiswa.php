<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TmMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_mahasiswa', function (Blueprint $table) {
            $table->increments('idin_mahasiswa');
            $table->integer('id_pengguna');
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->string('foto_mahasiswa');
            $table->string('no_hp');
            $table->string('email');

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
        Schema::dropIfExists('tm_mahasiswa');
    }
}
