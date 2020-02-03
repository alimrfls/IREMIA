<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeraturanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peraturan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemakaman_id')->unsigned();
            $table->string('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('pemakaman_id')->references('id')->on('pemakaman');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table ='peraturan';
    public function down()
    {
        Schema::dropIfExists('peraturan');
    }
}
