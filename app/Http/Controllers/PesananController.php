<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function showpesan()
    {
        return view('admin.pesanan.index', [
            'dtpesan' => Pesanan::with('meja', 'menupesan')->latest()->get(),
        ]);
    }

    public function editpembayaran(Request $request, $id)
    {
        // $request->validate([
        //     'status_bayar' => 'required'
        // ]);
        // Pesanan::find($id)->update($request->all());

        Pesanan::find($id)->update(['status_bayar' => 2]);
    }

    public function hapuspesan($id)
    {
        Pesanan::destroy($id);
        return redirect('/admin/datapesan');
    }
}
