<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerpanjanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpanjangan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iptm_id')->unsigned();
            $table->integer('ahli_waris_id')->unsigned();
            $table->integer('pemohon_id')->unsigned();

            $table->string('nomor_surat_kehilangan');
            $table->date('tanggal_surat_kehilangan');

            $table->string('nomor_surat')->nullable();
            $table->date('tanggal_surat')->nullable();

            $table->string('status')->nullable();
            $table->string('cetak_oleh')->nullable();
            $table->timestamps();

            $table->foreign('iptm_id')->references('id')->on('iptm');
            $table->foreign('ahli_waris_id')->references('id')->on('ahli_waris');
            $table->foreign('pemohon_id')->references('id')->on('users');
            //$table->string('nama_kelurahan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table='ijinperpanjangan';
    public function down()
    {
        Schema::dropIfExists('ijinperpanjangan');
    }
}
