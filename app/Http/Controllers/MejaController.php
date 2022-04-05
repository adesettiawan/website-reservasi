<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use JavaScript;

class MejaController extends Controller
{
    public function showmeja()
    {
        return view('admin.meja.index',[
            'datameja' => Meja::all()
        ]);
    }
    public function tambahmeja(Request $request)
    {
        $request->validate([
            'no_meja' => 'required',
            'status' => 'required'
        ]);
        Meja::create($request->all());
    }
    public function editmeja(Request $request,$id){
        $request->validate([
            'no_meja' => 'required',
            'status' => 'required'
        ]);
        Meja::find($id)->update($request->all());
    }
    public function hapusmeja($id){
        $idpemesan = Pesanan::where('meja_id',$id)->delete();
        Meja::destroy($id);
    }

}
