<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Menupesan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function showmenu()
    {
        return view('admin.menu.index', [
            'datakategori' => Kategori::all(),
            'datamenu' => Menu::with('kategori')->latest()->get()
        ]);
    }

    public function tambahmenu(Request $request)
    {
        DB::beginTransaction();
        try {
            $validatemenu = $request->validate([
                'foto' => 'image|file',
                'nama_menu' => 'required',
                'kategori_id' => 'required',
                'harga' => 'required'
            ]);
            if ($request->file('foto')) {
                $validatemenu['foto'] = $request->file('foto')->store('foto_menu', ['disk' => 'public']);
            } else {
                $validatemenu['foto'] = "foto_menu/defaultfoto.png";
            }
            $kat = Kategori::find($request->kategori_id);
            $jml = $kat->jumlah + 1;
            $kat->update(['jumlah' => $jml]);
            Menu::create($validatemenu);

            DB::commit();
            return redirect('/admin/datamenu')->with('success', 'Tambah Menu Berhasil!!..');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/admin/datamenu')->with('error', 'Tambah Menu Berhasil!!..');
        }
        // dd($request);
        // $request->file('foto')->store('foto_menu', ['disk' => 'public']);
    }
    public function editmenu(Request $request, $menu)
    {
        $dtold = Menu::find($menu);
        DB::beginTransaction();
        try {
            $validatemenu = $request->validate([
                'foto' => 'image|file|max:3072',
                'nama_menu' => 'required',
                'kategori_id' => 'required',
                'harga' => 'required'
            ]);
            if ($request->file('foto')) {
                if ($dtold->foto != "foto_menu/defaultfoto.png") {
                    Storage::delete($dtold->foto);
                }
                $validatemenu['foto'] = $request->file('foto')->store('foto_menu', ['disk' => 'public']);
            } else if ($dtold->foto == "foto_menu/defaultfoto.png") {
                $validatemenu['foto'] = "foto_menu/defaultfoto.png";
            }
            if ($dtold->kategori_id != $request->kategori_id) {
                $kat = Kategori::find($request->kategori_id);
                $katOld = Kategori::find($dtold->kategori_id);
                $jmlOld = $katOld->jumlah - 1;
                $jml = $kat->jumlah + 1;
                $kat->update(['jumlah' => $jml]);
                $katOld->update(['jumlah' => $jmlOld]);
            }
            Menu::find($menu)->update($validatemenu);

            DB::commit();
            return redirect('/admin/datamenu')->with('success', 'Edit Menu Berhasil!!..');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/admin/datamenu')->with('error', `Edit Menu Gagal`);
        }
    }

    public function hapusmenu($id)
    {

        $idpemesan = Menupesan::where('menu_id', $id)->select('pesanan_id')->distinct()->get();
        foreach ($idpemesan as $pemesan) {
            Menupesan::where('pesanan_id', $pemesan->pesanan_id)->delete();
            Pesanan::destroy($pemesan->pesanan_id);
        }
        $datamenu = Menu::find($id);
        if ($datamenu->foto != "foto_menu/defaultfoto.png") {
            Storage::delete($datamenu->foto);
        }
        $kat = Kategori::find($datamenu->kategori_id);
        $jml = $kat->jumlah - 1;
        $kat->update(['jumlah' => $jml]);
        Menu::destroy($id);

        return redirect('/admin/datamenu');
    }
}
