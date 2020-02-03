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

            $table->string('nomor_surat_kehilangan');
            $table->date('tanggal_surat_kehilangan');

            $table->string('nomor_surat')->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->integer('tahun_surat')->nullable();

            $table->string('jumlah')->nullable();

            $table->string('status')->nullable();

            $table->string('cetak_oleh')->nullable();
            $table->timestamps();

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
