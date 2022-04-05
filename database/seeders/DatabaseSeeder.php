<?php

namespace Database\Seeders;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
        $this->call([
            MejaSeeder::class,
            KategoriSeeder::class,
            MenuSeeder::class,
            PesananSeeder::class
        ]);
    }
}
