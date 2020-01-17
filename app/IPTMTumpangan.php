<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPTMTumpangan extends Model
{
    protected $fillable=[
        'pemakaman_id',
        'nomor_surat',
        'tahun_surat',
        'nama_kelurahan',
        'nomor_surat_rtrw',
        'tanggal_surat_rtrw',
        'nomor_sk_kematian_rumah_sakit',
        'nomor_sk_kematian_kelurahan',
        'nomor_iptm',
        'tanggal_iptm',
        'nomor_kehilangan_kepolisian',
        'tanggal_kehilangan_kepolisian',
        'nomor_ktp_ahliwaris',
        'nomor_ktp_almarhum',
        'nomor_kartu_keluarga',
        'nama_ahliwaris',
        'alamat_ahliwaris',
        'rt_ahliwaris',
        'rw_ahliwaris',
        'kelurahan_ahliwaris',
        'kecamatan_ahliwaris',
        'kota_ahliwaris',
        'telepon_ahliwaris',
        'hubungan_ahliWaris',
        'lokasi_tpu',
        'nama_almarhum',
        'tanggal_wafat',
        'nama_almarhum_lama',
        'blok_makam',
        'blad_makam',
        'petak_makam',
        'masa_berlaku_iptm',
        'file_iptm_asli',
        'file_sk_kematian_rumah_sakit',
        'file_ktp_almarhum',
        'cetak_by'
    ];
    protected $table='tumpangan';
    protected $primaryKey='id';
}
