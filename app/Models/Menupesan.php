<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanan;
use App\Models\Menu;

class Menupesan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pesanan(){
        return $this->belongsTo(Pesanan::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
