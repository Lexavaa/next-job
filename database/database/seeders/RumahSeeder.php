<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RumahSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Generate data for the rumah table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('rumah')->insert([
                'perumahan_id' => $faker->randomElement([1, 2, 3]), // Contoh id perumahan
                'konsumen_id' => $faker->numberBetween(1, 10), // Contoh id konsumen
                'blok' => $faker->randomLetter,
                'ukuran' => $faker->randomNumber,
                'progress' => $faker->numberBetween(10,100),
                'status_subsidi' => $faker->boolean,
                'status_pesan' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
