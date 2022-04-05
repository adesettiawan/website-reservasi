<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        return view('admin.index',[
            'data_pesan' => Pesanan::all()->count(),
            'data_meja' => Meja::all()->count(),
            'data_menu' => Menu::all()->count(),
            'data_kategori'=>Kategori::all()->count()
        ]);
    }

    


    

    


}
