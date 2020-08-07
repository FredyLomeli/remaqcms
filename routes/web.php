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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth')->name('adminIndex');

Auth::routes();

Route::get('/admin/informacion', 'InformationController@index')->middleware('auth')->name('informacion');
Route::post('/admin/informacion', 'InformationController@store')->middleware('auth')->name('save.info');
Route::get('/admin/productos', 'ProductsController@index')->middleware('auth')->name('productos');
Route::get('/admin/categorias', 'CategoryController@index')->middleware('auth')->name('categorias');
Route::get('/admin/mision', 'InformationController@mision')->middleware('auth')->name('mision');
Route::get('/admin/vision', 'InformationController@vision')->middleware('auth')->name('vision');
Route::get('/admin/valores', 'InformationController@valores')->middleware('auth')->name('valores');
Route::get('/home', 'HomeController@index')->name('home');
