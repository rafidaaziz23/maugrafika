<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriJasaController;
use App\Http\Controllers\KategoriProdukController;

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


// Routes Roles 
// Route::get('/role', [RoleController::class, 'index'])->middleware('auth');
Route::resource('role', RoleController::class)->middleware('auth');
Route::resource('user', UserController::class);
Route::resource('kategori-jasa', KategoriJasaController::class);
Route::resource('kategori-produk', KategoriProdukController::class);
Route::resource('karir', KarirController::class);



Route::get('/aboutus', function () {
    return view('portal.aboutus');
});

Route::get('/contactus', function () {
    return view('portal.contactus');
});

Route::get('/portofolio', function () {
    return view('portal.portofolio');
});

Route::get('/detailporto', function () {
    return view('portal.detailporto');
});

Route::get('/detailservice', function () {
    return view('portal.detailservice');
});

Route::get('/detailstore', function () {
    return view('portal.detailstore');
});

Route::get('/faq', function () {
    return view('portal.faq');
});

Route::get('/storeproduk', function () {
    return view('portal.produkstore');
});

Route::get('/login', [LoginController::class, 'view'])->name('login');

Route::post('/login/auth', [LoginController::class, 'storeLogin'])->name('postLogin')->middleware('guest');


// 
// *
// *
// *
// Route For Portal

Route::get('/home', function () {
    return view('portal.home.home');
});
