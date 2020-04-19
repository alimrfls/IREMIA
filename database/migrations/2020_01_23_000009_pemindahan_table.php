<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PemindahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemindahan', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('iptm_lama_id')->unsigned();
            $table->integer('iptm_baru_id')->unsigned();

            $table->string('nomor_surat')->nullable();
            $table->string('tanggal_surat')->nullable();
            $table->string('tahun_surat')->nullable();

            $table->string('nomor_pengantar_rt');
            $table->string('tanggal_pengantar_rt');

            $table->string('nomor_kehilangan');
            $table->string('tanggal_kehilangan');

            $table->string('status')->nullable();
            $table->string('ketersediaan_makam')->nullable();
            $table->string('cetak_oleh')->nullable();
            $table->timestamps();

            $table->foreign('iptm_lama_id')->references('id')->on('iptm');
            $table->foreign('iptm_baru_id')->references('id')->on('iptm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table='ijinpemindahan';
    public function down()
    {
        schema::dropIfExists('ijinpemindahan');
    }
}
