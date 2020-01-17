<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemakamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakaman', function (Blueprint $table) {
            $table->increments('pemakamanid');
            $table->string('namaPemakaman');
            $table->string('alamatPemakaman');
            $table->string('kotaPemakaman');
            $table->string('provinsiPemakaman');
            $table->string('kodeposPemakaman');
            $table->string('emailPemakaman');
            $table->string('jumlahPemakaman');
            $table->string('luasPemakaman');
            $table->string('deskripsiPemakaman');
            $table->string('photoPemakaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table ='pemakaman';
    public function down()
    {
        Schema::dropIfExists('pemakaman');
    }
}
