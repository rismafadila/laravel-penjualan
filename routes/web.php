<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'oclo','middleware' => ['auth']], function () {
    Route::get('/', function(){
        return view('layouts.admin');
    });
    Route::resource('barang', BarangController::class);
    Route::resource('suplier', SuplierController::class);
    Route::resource('transaksi', TransaksiController::class);
});

Route::get('/kategori', function () {
    return view('frontend.index');
});
