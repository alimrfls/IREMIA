<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makam', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemakaman_id')->unsigned();
            $table->integer('almarhum_id')->unsigned();

            $table->string('blok')->nullable();
            $table->string('blad')->nullable();
            $table->string('petak')->nullable();

            $table->string('avail_tumpangan')->nullable();
            $table->string('ketersediaan_makam')->nullable();

            $table->string('photo_makam');
            $table->string('photo_makam2');
            $table->string('photo_makam3');
            $table->timestamps();

            $table->foreign('pemakaman_id')->references('id')->on('pemakaman');
            $table->foreign('almarhum_id')->references('id')->on('almarhum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makam');
    }
}
