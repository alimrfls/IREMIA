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
        Schema::create('makams', function (Blueprint $table) {
            $table->increments('makamid');
            $table->string('nama_Almarhum')->nullable();
            $table->string('tanggal_Wafat');
            $table->string('lokasi_Pemakaman')->nullable();
            $table->string('pemakaman_id')->nullable();
            $table->string('blok')->nullable();
            $table->string('blad')->nullable();
            $table->string('petak')->nullable();
            $table->string('MasaBerlaku')->nullable();
            $table->string('nama_Ahliwaris')->nullable();
            $table->string('alamat_Ahliwaris')->nullable();
            $table->string('RT_Ahliwaris')->nullable();
            $table->string('RW_Ahliwaris')->nullable();
            $table->string('email_Ahliwaris')->unique();
            $table->string('phone_Ahliwaris')->nullable();
            $table->string('masa_Berlakuizin')->nullable();
            $table->string('avail_tumpangan')->nullable();
            $table->string('photo_makam');
            $table->string('photo_makam2');
            $table->string('photo_makam3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table='makams';
    public function down()
    {
        Schema::dropIfExists('makams');
    }
}
