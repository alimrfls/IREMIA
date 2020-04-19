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
            $table->integer('pemohon_id')->unsigned();
            $table->integer('almarhum_id')->unsigned();

            $table->string('file_iptm_asli')->nullable();

            $table->string('nomor_surat')->nullable();
            $table->date('tanggal_surat')->nullable();

            $table->string('nomor_sk_kehilangan_kepolisian');
            $table->date('tanggal_sk_kehilangan_kepolisian');
            $table->string('file_sk_kehilangan_kepolisian')->nullable();

            $table->string('status')->nullable();
            $table->string('cetak_oleh')->nullable();
            $table->timestamps();

            $table->foreign('iptm_lama_id')->references('id')->on('iptm');
            $table->foreign('almarhum_id')->references('id')->on('almarhum');
            $table->foreign('pemohon_id')->references('id')->on('users');

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
