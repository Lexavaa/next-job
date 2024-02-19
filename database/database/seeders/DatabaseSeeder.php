<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Deadline;
use App\Models\Folup;
use App\Models\Konsumen;
use App\Models\Perumahan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            JabatanSeeder::class,
            AksesSeeder::class,
            UserSeeder::class,
            HakAksesSeeder::class,
            DeadlineSeeder::class,
            PerumahanSeeder::class,
            KonsumenSeeder::class,
            RumahSeeder::class,
            FolupSeeder::class,
        ]);
    }
}
