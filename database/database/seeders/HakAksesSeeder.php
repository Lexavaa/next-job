<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HakAkses;
use App\Models\Jabatan;
use App\Models\Akses;
use Faker\Factory as Faker;

class HakAksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Ambil semua jabatan dan akses
        $jabatans = Jabatan::pluck('id')->toArray();
        $akses = Akses::pluck('id')->toArray();

        // Generate data hak akses
        foreach ($jabatans as $jabatanId) {
            // Ambil 3 akses secara acak
            $randomAkses = $faker->randomElements($akses, 3);

            foreach ($randomAkses as $aksesId) {
                HakAkses::create([
                    'jabatan_id' => $jabatanId,
                    'akses_id' => $aksesId,
                ]);
            }
        }
    }
}
