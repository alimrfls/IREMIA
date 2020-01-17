<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPTMPemindahan extends Model
{
    protected $fillable=[
        'pemakaman_id',
        'nomorSurat',
        'tahunSurat',
        'Namakelurahan',
        'NomorPengantarRT',
        'TanggalPengantarRT',
        'NomorIPTM',
        'TanggalIPTM',
        'NomorKehilangan',
        'TanggalKehilangan',
        'NoKtp_ahliwaris',
        'NomorKK',
        'Nama_Ahliwaris',
        'AlamatAhliwaris',
        'RTAhliwaris',
        'RWAhliwaris',
        'KelurahanAhliwaris',
        'KecamatanAhliwaris',
        'KotaAhliwaris',
        'PhoneAhliwaris',
        'LokasiTPU',
        'NamaAlmarhum',
        'Blok',
        'Blad',
        'Petak',
        'Pindahke',
        'BlokBaru',
        'BladBaru',
        'NomorPetakBaru',
        'TanggalSurat',
        'ketersediaan_makam',
        'status_perpanjangan',
        'fileIPTM_asli',
        'CetakBy'
    ];
    protected $table='ijinpemindahan';
    protected $primaryKey='pemindahanid';
}

