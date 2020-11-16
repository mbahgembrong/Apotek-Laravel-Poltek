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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/contact', function () {
//     return view('contactus');
// });
// Route::get('/about', function () {
//     return view('profile.about');
// });
Route::get('/', 'ContohController@welcome');
Route::get('/contact', 'ContohController@contac');
Route::get('/about', 'ContohController@about');
// Route::get('/obat', 'ContohController@obat');
// Route::get('/vitamin', 'ContohController@vitamin');
Route::get('/obat', 'ObatController@index')->name('obat.index');
Route::get('/obat/create', 'ObatController@create')->name('obat.create');
Route::post('/obat', 'ObatController@store')->name('obat.store');
// untuk menampilkan data yang diedit
Route::get('/obat/edit/{id}', 'ObatController@edit')->name('obat.edit');
Route::post('/obat/update/{id}', 'ObatController@update')->name('obat.update');
// untuk menhapus data
Route::post('/obat/destroy/{id}', 'ObatController@destroy')->name('obat.destroy');

// Tugas -> Vitamin(prak 10)
Route::get('/vitamin', 'VitaminController@index')->name('vitamin.index');
Route::get('/vitamin/create', 'VitaminController@create')->name('vitamin.create');
Route::post('/vitamin', 'VitaminController@store')->name('vitamin.store');
// untuk menampilkan data yang diedit
Route::get('/vitamin/edit/{id}', 'VitaminController@edit')->name('vitamin.edit');
Route::post('/vitamin/update/{id}', 'VitaminController@update')->name('vitamin.update');
// untuk menhapus data
Route::post('/vitamin/destroy/{id}', 'VitaminController@destroy')->name('vitamin.destroy');

