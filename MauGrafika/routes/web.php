<?php

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

Route::get('/', function () {
    return view('index',[
        "title" => "Home"
    ]);
});

Route::get('/aboutus', function () {
    return view('aboutus' , [
        "title" => "About Us"
    ]);
});

Route::get('/portofolio', function () {
    return view('portofolio' , [
        "title" => "Portofolio"
    ]);
});

Route::get('/detailporto', function () {
    return view('detailporto' , [
        "title" => "Portofolio"
    ]);
});

Route::get('/contactus', function () {
    return view('contactus' , [
        "title" => "Contact Us"
    ]);
});