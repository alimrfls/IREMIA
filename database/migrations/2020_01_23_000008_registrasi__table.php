<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomorpemesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iptm_id')->unsigned();
            $table->string('registrasi_number');
            $table->string('registrasi_status');
            /*
             * $table->char('tumpangan_id')->nullable();
             * $table->char('perizinan_id')->nullable();
             */
            $table->timestamps();

        });

        Schema::table('nomorpemesanan', function($table) {
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
