<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KasirController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('beranda');
// });

//Route homepage
Route::get('/', [BerandaController::class, 'index']);

//Route Frontend
Route::get('/pesan', [KasirController::class, 'index'])->name('reservasi');
Route::get('/list', [KasirController::class, 'showlist']);
Route::post('/pesan/tambah_pesan', [KasirController::class, 'order']);
Route::get('/pesan/{id}', [KasirController::class, 'tambahpesan']);
Route::get('/cetak/{id}', [KasirController::class, 'cetakpesan']);

// Route::middleware('auth')
Auth::routes();


//Route Admin
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index']);


    Route::get('/datapesan', [PesananController::class, 'showpesan']);
    Route::delete('/hapus_pesan/{id}', [PesananController::class, 'hapuspesan']);
    Route::post('/edit_pembayaran/{id}', [PesananController::class, 'editpembayaran']);



    Route::get('/datameja', [MejaController::class, 'showmeja']);
    Route::post('/tambah_meja', [MejaController::class, 'tambahmeja']);
    Route::put('/edit_meja/{id}', [MejaController::class, 'editmeja']);
    Route::delete('/hapus_meja/{id}', [MejaController::class, 'hapusmeja']);


    Route::get('/datamenu', [MenuController::class, 'showmenu']);
    Route::post('/tambah_menu', [MenuController::class, 'tambahmenu']);
    Route::put('/edit_menu/{id}', [MenuController::class, 'editmenu']);
    Route::delete('/hapus_menu/{id}', [MenuController::class, 'hapusmenu']);


    Route::get('/datakategori', [KategoriController::class, 'showkategori']);
    Route::post('/tambah_kategori', [KategoriController::class, 'tambahkategori']);
    Route::put('/edit_kategori/{id}', [KategoriController::class, 'editkategori']);
    Route::delete('/hapus_kategori/{id}', [KategoriController::class, 'hapuskategori']);
});
