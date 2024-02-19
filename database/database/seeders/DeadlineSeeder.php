<?php

namespace Database\Seeders;

use App\Models\Deadline;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DeadlineSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Generate data for the deadline table
        for ($i = 1; $i <= 10; $i++) {
            DB::table('deadline')->insert([
                'tugas' => $faker->name,
                'waktu' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
