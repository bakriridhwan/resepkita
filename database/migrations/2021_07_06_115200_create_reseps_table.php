<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // $table->bigIncrements('id');
            $table->string('judul');
            $table->string('gambar');
            $table->string('bahan');
            $table->string('alat');
            $table->text('langkah');
            $table->timestamps();

            $table->string('keterangan');
            $table->string('arsip');

            $table->foreignId('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseps');
    }
}
