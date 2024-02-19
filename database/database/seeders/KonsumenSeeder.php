<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KonsumenSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Generate data for the konsumen table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('konsumen')->insert([
                'nama' => $faker->name,
                'nik' => $faker->randomNumber(9, true),
                'no_hp' => $faker->randomNumber(9, true),
                'alamat' => $faker->address,
                'tanggal_input' => $faker->date,
                'diinput_oleh' => $faker->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
