<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemakaman_id')->unsigned()->nullable();
            $table->string('fullname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('images')->nullable();
            $table->string('kepala_pemakaman')->nullable();
            $table->string('NIP_kepala_pemakaman')->nullable();
            $table->string('role')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('pemakaman_id')->references('id')->on('pemakaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
