<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Ambil semua jabatan dari tabel jabatan
        $jabatan = DB::table('jabatan')->pluck('id');

        // Generate data for the users table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'jabatan_id' => $faker->randomElement($jabatan),
                'nik' => $faker->numerify('#############'),
                'nama' => $faker->name,
                'email' => $faker->email,
                'telepon' => $faker->numerify('############'),
                'username' => $faker->userName,
                'password' => Hash::make('iyain'),
                'foto' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
