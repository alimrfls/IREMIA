<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakamTumpangan extends Model
{
    protected $fillable=[
        'nama_Almarhum',
        'tanggal_Wafat',
        'lokasi_Pemakaman',
        'pemakaman_id',
        'blok',
        'blad',
        'petak',
        'MasaBerlaku',
        'nama_Ahliwaris',
        'alamat_Ahliwaris',
        'RT_Ahliwaris',
        'RW_Ahliwaris',
        'email_Ahliwaris',
        'phone_Ahliwaris',
        'masa_Berlakuizin',
        'avail_tumpangan',
        'photo_makam',
        'photo_makam2',
        'photo_makam3'
    ];
    protected $table='makams';
    protected $primaryKey='makamid';
}
