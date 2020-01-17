<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'address',
        'gender',
        'images',
        'KepalaPemakaman',
        'NIPKepalaPemakaman',
        'pemakaman_id',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table='users';
    protected $hidden = [
        'password', 'remember_token',
    ];
}
