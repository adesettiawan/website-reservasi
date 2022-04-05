<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Menupesan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    
    public function showkategori()
    {

        return view('admin.kategori.index',[
            'datakategori' => Kategori::all()
        ]);
    }
    public function tambahkategori(Request $request)
    {

        Kategori::create($request->all());
        return redirect('/admin/datakategori');

    }
    public function editkategori(Request $request,$kategori)
    {
        Kategori::find($kategori)->update($request->all());
        return redirect('/admin/datakategori');
    }
    public function hapuskategori($idkategori)
    {
        $idmenu = Menu::where('kategori_id',$idkategori)->select('id')->get();
        foreach ($idmenu as $menu) {
            $idpemesan = Menupesan::where('menu_id',$menu->id)->select('pesanan_id')->distinct()->get();
            foreach($idpemesan as $pemesan){
                Menupesan::where('pesanan_id',$pemesan->pesanan_id)->delete();
                Pesanan::destroy($pemesan->pesanan_id);
            }
        }
        Menu::where('kategori_id',$idkategori)->delete();
        Kategori::destroy($idkategori);
        return redirect('/admin/datakategori');
    }
}
