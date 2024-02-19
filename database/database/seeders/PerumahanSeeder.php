<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PerumahanSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Generate data for the rumah table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('perumahan')->insert([
                'nama' => $faker->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
