<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TmDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_dosen', function (Blueprint $table) {
            $table->increments('idin_dosen');
            $table->integer('id_pengguna');
            $table->string('nip');
            $table->string('nama_dosen');
            $table->string('foto_dosen');
            $table->integer('no_hp');
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
        Schema::dropIfExists('tm_dosen');
    }
}
