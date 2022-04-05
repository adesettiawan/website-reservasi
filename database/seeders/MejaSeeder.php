<?php

namespace Database\Seeders;

use App\Models\Meja;
use Illuminate\Database\Seeder;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meja::create([
            'no_meja' => 1,
            'status' => "Tersedia"
        ]);
        Meja::create([
            'no_meja' => 2,
            'status' => "Tersedia"
        ]);
        Meja::create([
            'no_meja' => 3,
            'status' => "Tersedia"
        ]);
        Meja::create([
            'no_meja' => 4,
            'status' => "Tersedia"
        ]);
        
    }
}
