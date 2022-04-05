<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
class Kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function menu(){
        return $this->hasMany(Menu::class);
    }
}
