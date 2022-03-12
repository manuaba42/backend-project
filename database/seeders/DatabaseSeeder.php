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
    }
}
