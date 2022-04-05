<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Kategori;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Menupesan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use JavaScript;
use Mockery\Undefined;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan.index', [
            'dtmeja' => Meja::where('status', '=', 'Tersedia')->get(),
            'dtmenu' => Menu::all(),
            'dtkat' => Kategori::all()
        ]);
    }
    public function showlist()
    {
        return view('pelanggan.listpesanan');
    }

    public function order(Request $request)
    {
        try {
            Pesanan::create([
                'id' => $request->id,
                'nama_pemesan' => $request->nama_cos,
                'telp' => $request->telp_cos,
                'tgl_reservasi' => $request->tgl_reservasi,
                'jml_orang' => $request->jml_orang,
                'tgl_pesan' => $request->tgl_pesan,
                'status_bayar' => $request->status_bayar,
                'meja_id' => $request->no_meja,
                'Total' => $request->total,
            ]);

            Meja::find($request->no_meja)->update(['status' => 'Tidak Tersedia']);
            foreach ($request->pesanan as $order) {
                if ($order != null) {
                    Menupesan::create([
                        'pesanan_id' => $request->id,
                        'menu_id' => $order['id'],
                        'qty' => $order['qty']
                    ]);
                }
            }

            // return redirect('/cetak');
            //code...
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function cetakpesan($id)
    {
        return view('pelanggan.cetakpesanan', [
            'dtpemesan' => Pesanan::find($id)
        ]);

        // dd(Pesanan::find($id));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesananRequest  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
