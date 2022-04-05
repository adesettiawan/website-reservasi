<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menupesan;
use App\Models\Kategori;
class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['foto','nama_menu','harga','kategori_id'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id');
    }
    public function menupesan()
    {
        return $this->hasMany(Menupesan::class);
    }
}
