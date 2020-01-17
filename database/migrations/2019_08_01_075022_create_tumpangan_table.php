<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTumpanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tumpangan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pemakaman_id')->nullable();
            $table->string('nomor_surat')->nullable();
            $table->string('tahun_surat')->nullable();
            $table->string('nama_kelurahan')->nullable();
            $table->string('nomor_surat_rtrw');
            $table->date('tanggal_surat_rtrw');
            $table->string('nomor_sk_kematian_rumah_sakit');
            $table->string('nomor_sk_kematian_kelurahan');
            $table->string('nomor_iptm');
            $table->date('tanggal_iptm');
            $table->string('nomor_kehilangan_kepolisian');
            $table->date('tanggal_kehilangan_kepolisian');
            $table->string('nomor_ktp_ahliwaris');
            $table->string('nomor_ktp_almarhum');
            $table->string('nomor_kartu_keluarga');
            $table->string('nama_ahliwaris');
            $table->string('alamat_ahliwaris');
            $table->integer('rt_ahliwaris');
            $table->integer('rw_ahliwaris');
            $table->string('kelurahan_ahliwaris');
            $table->string('kecamatan_ahliwaris');
            $table->string('kota_ahliwaris');
            $table->integer('telepon_ahliwaris');
            $table->string('hubungan_ahliWaris');
            $table->string('lokasi_tpu');
            $table->string('nama_almarhum');
            $table->date('tanggal_wafat');
            $table->string('nama_almarhum_lama');
            $table->string('blok_makam');
            $table->string('blad_makam');
            $table->string('petak_makam');
            $table->date('masa_berlaku_iptm');
            $table->string('file_iptm_asli');
            $table->string('file_sk_kematian_rumah_sakit');
            $table->string('file_ktp_almarhum');
            $table->string('cetak_by')->nullable();
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
        Schema::dropIfExists('tumpangan');
    }
}
