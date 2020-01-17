<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemakaman extends Model
{
    protected $fillable=[
        'namaPemakaman',
        'alamatPemakaman',
        'kotaPemakaman',
        'provinsiPemakaman',
        'kodeposPemakaman',
        'emailPemakaman',
        'jumlahPemakaman',
        'luasPemakaman',
        'deskripsiPemakaman',
        'photoPemakaman'
        ];
    protected $table='pemakaman';
    protected $primaryKey = 'pemakamanid';
}
