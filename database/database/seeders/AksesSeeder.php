<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akses')->insert([
            [
                'akses' => 'Menu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Dashboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Master Data',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Setting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Log Pekerjaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Laporan All',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Serah Terima',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Data Perumahan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Konsumen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Laporan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Keuangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Kas Harian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Akuntansi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Laporan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Logistik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Permintaan Spb',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Gudang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Daftar Harga Supplier',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Laporan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Standard Rab',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Design Engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Opname Tukang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Opname Interior',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Opname Renovasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'akses' => 'Laporan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
