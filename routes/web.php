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



// Route::get('/album', 'AlbumController@index');
       


Auth::routes([
    'register' => false,
    'reset' => false, 
]);
  
Route::get('/', 'GuesController@index');
Route::get('/detail-album/{title}', 'GuesController@galerifoto')->name('galeri.foto');

// 

Route::get('/like-foto/{id}', 'GuesController@likefoto')->name('like.foto');








Route::get('/home', 'HomeController@index')->name('home');
Route::get('/album', 'AlbumController@index');
Route::get('/album/create', 'AlbumController@create')->name('album.create');
Route::post('/album', 'AlbumController@store')->name('album.store');
Route::get('/album/edit/{id}', 'AlbumController@edit')->name('album.edit');
Route::post('/album/update/{id}', 'AlbumController@update')->name('album.update');
Route::post('/album/delete/{id}', 'AlbumController@destroy')->name('album.destroy');

Route::get('/galeri', 'GaleriVontroller@index');
Route::get('/galeri/create', 'GaleriVontroller@create')->name('galeri.create');
Route::post('/galeri', 'GaleriVontroller@store')->name('galeri.store');
Route::get('/galeri/edit/{id}', 'GaleriVontroller@edit')->name('galeri.edit');
Route::post('/galeri/update/{id}', 'GaleriVontroller@update')->name('galeri.update');
Route::post('/galeri/delete/{id}', 'GaleriVontroller@destroy')->name('galeri.destroy');

Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user', 'UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::post('/user/delete/{id}', 'UserController@destroy')->name('user.destroy');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
