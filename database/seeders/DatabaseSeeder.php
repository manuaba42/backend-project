<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        DB::collection('users')->delete();
        DB::collection('mobils')->delete();
        DB::collection('motors')->delete();

        DB::collection('users')->insert(
            [
                [
                    'name' => 'yoga',
                    'email' => 'tes@gmail.com',
                    'password' => '$2y$10$ODKuGBseacpsr2Uv0scDZ.W2zJ2Pkb6GlIw37A1tWXgdsnL7rM61.',
                    'role' => 'admin',
                ],
                [
                    'name' => 'manuaba',
                    'email' => 'tes2@gmail.com',
                    'password' => '$2y$10$76Ujb/IJ1QW/k6yKNZFSfehp/aobLI39Cro3f89Mh89CWr5iPvub.',
                    'role' => 'user',
                ],
            ]
        );

        DB::collection('mobils')->insert(
            [
                [
                    "tahun_keluaran"=> "2000",
                    "warna"=> "biru",
                    "harga"=> "5000000",
                    "mesin"=> "ada",
                    "kapasitas_penumpang"=> "6",
                    "tipe"=> "lama",
                    "status"=> "Sold",
                ],
                [
                    "tahun_keluaran"=> "1999",
                    "warna"=> "merah",
                    "harga"=> "7000000",
                    "mesin"=> "bagus",
                    "kapasitas_penumpang"=> "2",
                    "tipe"=> "baru",
                    "status"=> "Available",
                ],
                [
                    "tahun_keluaran"=> "1988",
                    "warna"=> "kuning",
                    "harga"=> "90000",
                    "mesin"=> "bagus",
                    "kapasitas_penumpang"=> "3",
                    "tipe"=> "baru",
                    "status"=> "Available",
                ],
                [
                    "tahun_keluaran"=> "2004",
                    "warna"=> "hijau",
                    "harga"=> "10000",
                    "mesin"=> "rusak",
                    "kapasitas_penumpang"=> "8",
                    "tipe"=> "lama",
                    "status"=> "Sold",
                ],
            ]
        );

        DB::collection('motors')->insert(
            [
                [
                    "tahun_keluaran"=> "2000",
                    "warna"=> "biru",
                    "harga"=> "5000000",
                    "mesin"=> "ada",
                    "tipe_suspensi"=>"independen",
                    "tipe_transmisi"=>"cvt",
                    "status"=> "Sold",
                ],
                [
                    "tahun_keluaran"=> "1999",
                    "warna"=> "merah",
                    "harga"=> "7000000",
                    "mesin"=> "bagus",
                    "tipe_suspensi"=>"multi link",
                    "tipe_transmisi"=>"at",
                    "status"=> "Available",
                ],
                [
                    "tahun_keluaran"=> "1988",
                    "warna"=> "kuning",
                    "harga"=> "90000",
                    "mesin"=> "bagus",
                    "tipe_suspensi"=>"multi link",
                    "tipe_transmisi"=>"cvt",
                    "status"=> "Available",
                ],
                [
                    "tahun_keluaran"=> "2004",
                    "warna"=> "hijau",
                    "harga"=> "10000",
                    "mesin"=> "rusak",
                    "tipe_suspensi"=>"independen",
                    "tipe_transmisi"=>"dct",
                    "status"=> "Sold",
                ],
            ]
        );
    }
}
