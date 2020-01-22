<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullname' => 'dinas',
                'email' => 'admindinas@apps.com',
                'password' => bcrypt('dinas123'),
                'address' => 'jl taman harapan baru',
                'gender' => 'male',
                'role' => 'admin_dinas',
                'kepala_pemakaman' => null,
                'NIP_kepala_pemakaman' => null,
                'pemakaman_id' => null
            ],
            [
                'fullname' => 'yudha',
                'email' => 'yudha@apps.com',
                'password' => bcrypt('dinas123'),
                'address' => 'jl taman harapan baru33',
                'gender' => 'male',
                'role' => 'admin_tpu',
                'kepala_pemakaman' => 'Saimin',
                'NIP_kepala_pemakaman' => '1233412341232',
                'pemakaman_id' => '1'
            ],
            [
                'fullname' => 'Ilham Ridho A',
                'email' => 'ridho@email.com',
                'password' => bcrypt('member'),
                'address' => 'Jln. H Rijin Depok',
                'gender' => 'male',
                'role' => 'member',
                'kepala_pemakaman' => null,
                'NIP_kepala_pemakaman' => null,
                'pemakaman_id' => null
            ]
        ]);
    }
}
