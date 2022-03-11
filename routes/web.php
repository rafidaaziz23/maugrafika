<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Models\Role;
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
// Route::get('/role', [RoleController::class, 'index'])->middleware('auth');
Route::resource('role', RoleController::class)->middleware('auth');
// Route::get('/role/tambah', [RoleController::class, 'create']);
// Route::post('/role', [RoleController::class, 'store'])->name('postRole');
// Route::post('/role/store', [RoleController::class, 'store']);
// Route::get('/role/{{$role}}/edit', function (Role $role) {
//     return view('master.role/update');
// });
// Route::resource('/')

Route::get('/master', function () {
    return view('master');
});

Route::get('/user', function () {
    return view('master.user.user', [
        "page" => "user"
    ]);
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

Route::get('/coba', function () {
    return view('coba');
});
