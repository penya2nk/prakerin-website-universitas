<?php

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

Route::get('/home', function () {
    return view('layouts.admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/beranda','BerandaController');
Route::resource('/kategori','KategoriController');
Route::resource('/programstudi','ProgramStudiController');
Route::resource('/kelembagaan','KelembagaanController');
Route::resource('/berita','BeritaController');

