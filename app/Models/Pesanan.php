<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menupesan;
use App\Models\Meja;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_pemesan', 'telp', 'tgl_reservasi', 'jml_orang', 'tgl_pesan', 'meja_id', 'status_bayar', 'Total'];

    public function meja()
    {
        return $this->belongsTo(Meja::class, 'meja_id');
    }
    public function menupesan()
    {
        return $this->hasMany(Menupesan::class);
    }
}
