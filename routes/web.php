<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KucingController;
use App\Http\Controllers\AdopsiController;
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

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

// Route::get('/artikel', function () {
//     return view('/admin/artikel');
// });

Route::get('/konsultasi', function () {
    return view('/admin/konsultasi');
});

Route::get('/penitipan', function () {
    return view('/admin/penitipan');
});

Route::get('/adopsi', function () {
    return view('/admin/adopsi');
});

// Route::get('/post', function () {
//     return view('/admin/post');
// });
Auth::routes();

Route::resource('/post', 'PostController');
Route::resource('/kategori', 'KategoriController');
Route::resource('/kucing', 'KucingController');
Route::resource('/adopsi', 'AdopsiController');

// Route::get('/', 'ArtikelController@index');
// Route::get('/{slug}', 'ArtikelController@artikel');
// Route::get('/artikel-kategori/{slug}', 'ArtikelController@kategori');

Route::get('/', [ArtikelController::class, 'index']);
Route::get('/{slug}', [ArtikelController::class, 'artikel']);
Route::get('/artikel-kategori/{slug}', [ArtikelController::class, 'kategori']);