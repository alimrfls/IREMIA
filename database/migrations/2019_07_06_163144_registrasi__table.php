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
            $table->increments('nomorpemesananid');
            $table->string('Registrasi_number');
            $table->string('Registrasi_Status');
            $table->char('tumpangan_id')->nullable();
            $table->char('perizinan_id')->nullable();
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
        //
    }
}
