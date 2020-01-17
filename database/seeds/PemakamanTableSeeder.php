<?php

use Illuminate\Database\Seeder;

class PemakamanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemakaman')->insert([
            [
                'namaPemakaman' => 'Karet Bivak',
                'alamatPemakaman' => 'Jl.Karet Pasar Baru',
                'kotaPemakaman' => 'Jakarta',
                'provinsiPemakaman' => 'DKI Jakarta',
                'kodeposPemakaman' => '10250',
                'emailPemakaman' => 'bivak@email.com',
                'jumlahPemakaman' => '1000',
                'luasPemakaman' => '500',
                'deskripsiPemakaman' => 'TPU BIVAK tidak menerima pemakaman baru',
                'photoPemakaman' => '',
            ]
        ]);
    }
}
