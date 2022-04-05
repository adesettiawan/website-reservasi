<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'dtmenu' => Menu::all(),
        ]);
    }
}
