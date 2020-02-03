<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IptmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('iptm', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('makam_id')->unsigned();
            $table->string('nomor_iptm');
            $table->date('tanggal_iptm');
            $table->date('masa_berlaku');
            $table->string('file_iptm_asli');
            $table->string('status');
            $table->timestamps();

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
