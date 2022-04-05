<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama_kategori' => 'Coffee',
            'jumlah' => 3
        ]);
        Kategori::create([
            'nama_kategori' => 'Makanan',
            'jumlah' => 3
        ]);
        Kategori::create([
            'nama_kategori' => 'Minuman',
            'jumlah' => 3
        ]);
        Menu::create([
            'foto' => 'foto_menu/latte.jpg',
            'nama_menu' => 'Coffe Latte',
            'harga' => 10000,
            'kategori_id' => 1
        ]);
        Menu::create([
            'foto' => 'foto_menu/americano.jpg',
            'nama_menu' => 'Americano',
            'harga' => 12000,
            'kategori_id' => 1
        ]);
        Menu::create([
            'foto' => 'foto_menu/kopi-susu.jpg',
            'nama_menu' => 'Kopi Susu',
            'harga' => 13000,
            'kategori_id' => 1
        ]);

        //makanan
        Menu::create([
            'foto' => 'foto_menu/spageti.jpg',
            'nama_menu' => 'Sepagethi',
            'harga' => 13000,
            'kategori_id' => 2
        ]);
        Menu::create([
            'foto' => 'foto_menu/cumi.jpg',
            'nama_menu' => 'Cumi Crispy',
            'harga' => 13000,
            'kategori_id' => 2
        ]);
        Menu::create([
            'foto' => 'foto_menu/udang.jpg',
            'nama_menu' => 'Udang Crispy',
            'harga' => 13000,
            'kategori_id' => 2
        ]);

        //minuman
        Menu::create([
            'foto' => 'foto_menu/jeruk.jpg',
            'nama_menu' => 'Jus Jeruk',
            'harga' => 13000,
            'kategori_id' => 3
        ]);

        Menu::create([
            'foto' => 'foto_menu/naga.jpg',
            'nama_menu' => 'Jus Naga',
            'harga' => 13000,
            'kategori_id' => 3
        ]);

        Menu::create([
            'foto' => 'foto_menu/teh.jpg',
            'nama_menu' => 'Es Teh Manis',
            'harga' => 13000,
            'kategori_id' => 3
        ]);
    }
}
