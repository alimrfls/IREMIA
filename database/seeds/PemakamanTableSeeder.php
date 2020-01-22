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
                'nama_pemakaman' => 'Karet Bivak',
                'alamat_pemakaman' => 'Jl.Karet Pasar Baru',
                'kota_pemakaman' => 'Jakarta',
                'provinsi_pemakaman' => 'DKI Jakarta',
                'kodepos_pemakaman' => '10250',
                'email_pemakaman' => 'bivak@email.com',
                'jumlah_pemakaman' => '1000',
                'luas_pemakaman' => '500',
                'deskripsi_pemakaman' => 'TPU BIVAK tidak menerima pemakaman baru',
                'photo_pemakaman' => '',
            ]
        ]);
    }
}
