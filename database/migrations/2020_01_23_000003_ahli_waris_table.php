<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AhliWarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahli_waris', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nomor_ktp_ahliwaris');
            $table->string('nama_ahliwaris');
            $table->string('alamat_ahliwaris');
            $table->integer('rt_ahliwaris');
            $table->integer('rw_ahliwaris');
            $table->string('kelurahan_ahliwaris');
            $table->string('kecamatan_ahliwaris');
            $table->string('kota_ahliwaris');
            $table->string('telepon_ahliwaris', 13);
            $table->string('hubungan_ahliWaris');
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
        Schema::dropIfExists('tumpangan');
    }
}
