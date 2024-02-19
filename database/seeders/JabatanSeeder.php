<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatan')->insert([
            [
                'jabatan' => 'Owner',
                'role' => 'ow',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Logistik',
                'role' => 'lg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Marketing',
                'role' => 'mk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Keuangan',
                'role' => 'ku',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Desain & Engineering',
                'role' => 'de',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Staff Karyawan',
                'role' => 'sk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Project Manager',
                'role' => 'pm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Operasional Manager',
                'role' => 'om',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
