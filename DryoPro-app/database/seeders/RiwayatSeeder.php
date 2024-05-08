<?php

namespace Database\Seeders;

use App\Models\Riwayat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Riwayat::create([
            'user_id' => '1',
            'tanggal' => now()->toDateString(),
            'waktu' => now()
        ]);
    }
}
