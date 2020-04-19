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
            $table->integer('iptm_id')->unsigned()->nullable();

            $table->string('nama_almarhum');
            $table->date('tanggal_wafat');

            $table->string('nomor_ktp_almarhum');
            $table->string('file_ktp_almarhum')->nullable();

            $table->string('nomor_kk_almarhum');
            $table->string('file_kk_almarhum')->nullable();

            $table->string('nomor_sp_rtrw');
            $table->date('tanggal_sp_rtrw');
            $table->string('file_sp_rtrw')->nullable();

            $table->string('nomor_sk_kematian_rs');
            $table->date('tanggal_sk_kematian_rs');
            $table->string('file_sk_kematian_rs')->nullable();

            $table->timestamps();

            $table->foreign('ahli_waris_id')->references('id')->on('ahli_waris');
            $table->foreign('iptm_id')->references('id')->on('iptm');
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
