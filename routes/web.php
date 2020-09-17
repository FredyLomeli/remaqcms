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
//pagina de inicio
Route::get('/', 'HomeController@index')->name('index');
// Pagina que muestra todos los productos
Route::get('/articulos', 'HomeController@products_all')->name('show_all.products');
// Verifica que tipo de productos mostrara
Route::post('/products', 'HomeController@products_route')->name('products_route');
// Muesta los articulos por filtro de nombre
Route::get('/articulos/{busqueda}', 'HomeController@products')->name('show.products');
// Muestra el detalle de un producto
Route::get('/articulo/{products}', 'ProductsController@show')->name('show.product');
// Muesta el listado de productos por categoria
Route::get('/categoria/{category}/articulos', 'ProductsController@products_category')->name('show.products_by_category');
// Muesta el listado General de categorias
Route::get('/categorias', 'CategoryController@show_all')->name('show_categorys');

Route::get('/admin', 'HomeController@index_admin')->middleware('auth')->name('adminIndex');

Route::post('/admin', 'HomeController@index_admin_conteo')->middleware('auth')->name('adminIndexConteo');

Route::get('/registrar', function () {
    return view('admin.register');
})->middleware('auth')->name('registrar');

Auth::routes();

// Vista y edicion de informacion General
Route::get('/admin/informacion', 'InformationController@index')->middleware('auth')->name('informacion');
Route::post('/admin/informacion', 'InformationController@store')->middleware('auth')->name('save.info');
// Listado de Carrusel
Route::get('/admin/carrusel', 'CarouselController@index')->middleware('auth')->name('carrusel');
Route::get('/admin/carrusel/nuevo', 'CarouselController@create')->middleware('auth')->name('carrusel.create');
Route::post('/admin/carrusel/store', 'CarouselController@store')->middleware('auth')->name('carrusel.store');
Route::get('/admin/carrusel/editar/{carousel}', 'CarouselController@edit')->middleware('auth')->name('carrusel.edit');
Route::put('/admin/carrusel/update/{carousel}', 'CarouselController@update')->middleware('auth')->name('carrusel.update');
Route::delete('/admin/carrusel/delete/{carousel}', 'CarouselController@destroy')->middleware('auth')->name('carrusel.delete');
// Listado de Categoria
Route::get('/admin/categoria', 'CategoryController@index')->middleware('auth')->name('category');
Route::get('/admin/categoria/nuevo', 'CategoryController@create')->middleware('auth')->name('category.create');
Route::post('/admin/categoria/store', 'CategoryController@store')->middleware('auth')->name('category.store');
Route::get('/admin/categoria/editar/{category}', 'CategoryController@edit')->middleware('auth')->name('category.edit');
Route::put('/admin/categoria/update/{category}', 'CategoryController@update')->middleware('auth')->name('category.update');
Route::delete('/admin/categoria/delete/{category}', 'CategoryController@destroy')->middleware('auth')->name('category.delete');
// Listado de Productos
Route::get('/admin/productos', 'ProductsController@index')->middleware('auth')->name('productos');
Route::get('/admin/productos/nuevo', 'ProductsController@create')->middleware('auth')->name('products.create');
Route::post('/admin/productos/store', 'ProductsController@store')->middleware('auth')->name('products.store');
Route::get('/admin/productos/editar/{products}', 'ProductsController@edit')->middleware('auth')->name('products.edit');
Route::put('/admin/productos/update/{products}', 'ProductsController@update')->middleware('auth')->name('products.update');
Route::delete('/admin/productos/delete/{products}', 'ProductsController@destroy')->middleware('auth')->name('products.delete');
// Edicion de mision vision y valores
Route::get('/admin/informacion/{branding}', 'InformationController@branding')->middleware('auth')->name('branding');
Route::post('/admin/informacion/{branding}', 'InformationController@storeBranding')->middleware('auth')->name('save.branding');

//Controller de inicio
Route::get('/home', 'HomeController@index')->name('home');
//Envio de correos
Route::post('/contactMail', 'HomeController@contacMail')->name('contact.mail');
