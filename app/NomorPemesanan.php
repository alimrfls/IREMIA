<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomorPemesanan extends Model
{
    protected $fillable=[
        'Registrasi_number',
        'Registrasi_Status',
        'tumpangan_id',
        'perizinan_id'
    ];
    protected $table='nomorpemesanan';
    protected $primaryKey='nomorpemesananid';
}

