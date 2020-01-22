<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemakamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemakaman');
            $table->string('alamat_pemakaman');
            $table->string('kota_pemakaman');
            $table->string('provinsi_pemakaman');
            $table->string('kodepos_pemakaman');
            $table->string('email_pemakaman');
            $table->string('jumlah_pemakaman');
            $table->string('luas_pemakaman');
            $table->string('deskripsi_pemakaman');
            $table->string('photo_pemakaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table ='pemakaman';
    public function down()
    {
        Schema::dropIfExists('pemakaman');
    }
}
