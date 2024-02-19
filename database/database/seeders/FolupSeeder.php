<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FolupSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Generate data for the folup table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('folup')->insert([
                'konsumen_id' => $faker->numberBetween(1, 10), // Contoh id konsumen
                'tipe' => $faker->randomElement(['Pemberkasan', 'Dp', 'Lainnya']),
                'keterangan' => $faker->text,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
