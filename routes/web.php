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
Route::get('/obat', 'ObatController@index');
Route::get('/vitamin', 'ContohController@vitamin');
Route::get('/obat/create', 'ObatController@create')->name('obat.create');
Route::post('/obat', 'ObatController@store')->name('obat.store');
// untuk menampilkan data yang diedit
Route::get('/obat/edit/{id}', 'ObatController@edit')->name('obat.edit');
