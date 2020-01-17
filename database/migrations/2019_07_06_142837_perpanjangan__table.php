<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerpanjanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpanjangan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemakaman_id')->nullable();
            $table->string('nomor_surat')->nullable();
            $table->integer('tahun_surat')->nullable();
            $table->string('nama_kelurahan')->nullable();
            $table->bigInteger('nomor_ktp_ahliwaris');
            $table->string('nomor_iptm');
            $table->date('tanggal_iptm');
            $table->string('nomor_surat_kehilangan');
            $table->date('tanggal_surat_kehilangan');
            $table->string('nama_ahliwaris');
            $table->string('alamat_ahliwaris');
            $table->integer('rt_ahliwaris');
            $table->integer('rw_ahliwaris');
            $table->string('kelurahan_ahliwaris');
            $table->string('kecamatan_ahliwaris');
            $table->string('kota_ahliwaris');
            $table->string('telepon_ahliwaris');
            $table->string('hubungan_ahliwaris');
            $table->string('lokasi_tpu');
            $table->string('nama_almarhum');
            $table->date('tanggal_wafat');
            $table->string('blok_makam');
            $table->string('blad_makam');
            $table->string('petak_makam');
            $table->date('masa_berlaku');
            $table->string('jumlah_perpanjangan')->nullable();
            $table->date('tanggal_surat')->nullable();
            $table->string('ketersediaan_makam')->nullable();
            $table->string('status_perpanjangan')->nullable();
            $table->string('file_iptm_asli');
            $table->string('cetak_oleh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $table='ijinperpanjangan';
    public function down()
    {
        Schema::dropIfExists('ijinperpanjangan');
    }
}
