<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PemindahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijinpemindahan', function (Blueprint $table) {
            $table->increments('pemindahanid');
            $table->string('pemakaman_id')->nullable();
            $table->string('nomorSurat')->nullable();
            $table->string('tahunSurat')->nullable();
            $table->string('Namakelurahan')->nullable();
            $table->string('NomorPengantarRT');
            $table->string('TanggalPengantarRT');
            $table->string('NomorIPTM');
            $table->string('TanggalIPTM');
            $table->string('NomorKehilangan');
            $table->string('TanggalKehilangan');
            $table->string('NoKtp_ahliwaris');
            $table->string('NomorKK');
            $table->string('Nama_Ahliwaris');
            $table->string('AlamatAhliwaris');
            $table->string('RTAhliwaris');
            $table->string('RWAhliwaris');
            $table->string('KelurahanAhliwaris');
            $table->string('KecamatanAhliwaris');
            $table->string('KotaAhliwaris');
            $table->string('PhoneAhliwaris');
            $table->string('LokasiTPU');
            $table->string('NamaAlmarhum');
            $table->string('Blok');
            $table->string('Blad');
            $table->string('Petak');
            $table->string('Pindahke')->nullable();
            $table->string('BlokBaru')->nullable();
            $table->string('BladBaru')->nullable();
            $table->string('NomorPetakBaru')->nullable();
            $table->string('TanggalSurat')->nullable();
            $table->string('ketersediaan_makam')->nullable();
            $table->string('status_perpanjangan')->nullable();
            $table->string('fileIPTM_asli');
            $table->string('CetakBy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table='ijinpemindahan';
    public function down()
    {
        schema::dropIfExists('ijinpemindahan');
    }
}
