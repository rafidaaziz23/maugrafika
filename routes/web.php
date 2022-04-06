<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FaqController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriJasaController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SosmedController;

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
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);
Route::resource('kategori-jasa', KategoriJasaController::class);
Route::resource('kategori-produk', KategoriProdukController::class);
Route::resource('sosmed', SosmedController::class);
Route::resource('faq', FaqController::class);
Route::resource('about', AboutController::class);
Route::resource('sejarah', SejarahController::class);
Route::resource('carousel', CarouselController::class);

// Route::get('/user', function () {
//     return view('master.user.user');
// });

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
