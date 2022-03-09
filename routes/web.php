<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

// Route::get('/main', function () {
//     return view('layouts.main');
// });


// Route::get('/role', function () {
//     return view('role', [
//         "page" => "role"
//     ]);
// });

// Routes Roles 
Route::get('/role', [RoleController::class, 'index']);
Route::get('/role/tambah', [RoleController::class, 'create']);

Route::get('/user', function () {
    return view('user', [
        "page" => "user"
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'storeLogin'])->name('postLogin')->middleware('guest');
Route::get('/world', function() {
    return view('world');
})->middleware('auth');
