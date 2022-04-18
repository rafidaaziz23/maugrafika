<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\PortofolioController;
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
// Route untuk admin
// Route::get('/role', [RoleController::class, 'index'])->middleware('auth');
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);
Route::resource('kategori-jasa', KategoriJasaController::class);
Route::resource('kategori-produk', KategoriProdukController::class);
Route::resource('karir', KarirController::class);
Route::resource('produk', ProdukController::class);
Route::resource('jasa', JasaController::class);
Route::resource('about', AboutController::class);
Route::resource('carousel', CarouselController::class);
Route::resource('faq', FaqController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('misi', MisiController::class);
Route::resource('portofolio', PortofolioController::class);
Route::resource('sejarah', SejarahController::class);
Route::resource('sosmed', SosmedController::class);
Route::resource('visi', VisiController::class);

// route fe 
Route::resource('portal', PortalController::class);
// Route::get('home', [PortalController::class, 'home']);
Route::get('aboutus', [PortalController::class, 'aboutus']);

Route::get('/', function () {
    return view('portal.index');
});

Route::get('/contactus', function () {
    return view('portal.contactus');
});

Route::get('/portofolios', function () {
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

Route::get('/faqs',[PortalController::class, 'faq']);

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
