<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlmarhumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almarhum', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ahli_waris_id')->unsigned();
            $table->integer('makam_id')->unsigned();

            $table->string('nomor_ktp_almarhum');
            $table->string('nama_almarhum');
            $table->date('tanggal_wafat');
            $table->string('nomor_sk_kematian_kelurahan');
            $table->string('nomor_sk_kematian_rumah_sakit');

            $table->string('file_sk_kematian_kelurahan');
            $table->string('file_sk_kematian_rumah_sakit');
            $table->string('file_ktp_almarhum');
            $table->timestamps();

            $table->foreign('ahli_waris_id')->references('id')->on('ahli_waris');
            $table->foreign('makam_id')->references('id')->on('makam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
