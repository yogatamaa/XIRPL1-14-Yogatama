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
    return ('Halaman home');
});

Route::get('/about', function () {
    return ('Halaman About');
});

Route::get('/gallery', function () {
    return ('Halaman Gallery');
});

Route::get('/', function () {
    return view ('Home');
});

Route::get('/about', function () {
    return  view ('About', [
        "nama" => "Fadhil Fauzi Yogatama",
        "email" => "yogatama105@gmail.com",
        "gambar" => "olo.jpg"
    ]);
});

Route::get('/gallery', function () {
    return  view ('Gallery');
});

