<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTumpanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tumpangan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iptm_lama_id')->unsigned();
            $table->integer('iptm_penumpang_id')->unsigned();

            $table->string('nomor_surat')->nullable();
            $table->string('tahun_surat')->nullable();

            $table->string('nomor_kehilangan_kepolisian');
            $table->date('tanggal_kehilangan_kepolisian');

            /* ini buat siapa?
             * $table->string('nomor_kartu_keluarga');
             * $table->string('nama_kelurahan')->nullable();
             * $table->string('nomor_surat_rtrw');
             * $table->date('tanggal_surat_rtrw');
             */
            $table->string('status')->nullable();
            $table->string('cetak_oleh')->nullable();
            $table->timestamps();

            $table->foreign('iptm_lama_id')->references('id')->on('iptm');;
            $table->foreign('iptm_penumpang_id')->references('id')->on('iptm');;
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
