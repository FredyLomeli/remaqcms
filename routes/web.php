<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MeterController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(HomeController::class) //
    ->group(function(){
        //pagina de inicio
        Route::get('/', 'index')->name('index');
        // Pagina que muestra todos los productos
        Route::get('/articulos', 'products_all')->name('show_all.products');
        // Verifica que tipo de productos mostrara
        Route::post('/products', 'products_route')->name('products_route');
        // Muesta los articulos por filtro de nombre
        Route::get('/articulos/{busqueda}', 'products')->name('show.products');

        Route::get('/admin', 'index_admin')->name('adminIndex')->middleware('auth');
        Route::post('/admin', 'index_admin_conteo')->name('adminIndexConteo')->middleware('auth');

        //Controller de inicio
        Route::get('/home', 'index')->name('home');
        //Envio de correos
        Route::post('/contactMail', 'contacMail')->name('contact.mail');
    });

Route::controller(ProductsController::class) //
    ->group(function(){
        // Muestra el detalle de un producto
        Route::get('/articulo/{products}', 'show')->name('show.product');
        // Muesta el listado de productos por categoria
        Route::get('/categoria/{category}/articulos', 'products_category')->name('show.products_by_category');
        // Listado de Productos
        Route::get('/admin/productos', 'index')->middleware('auth')->name('productos');
        Route::get('/admin/productos/nuevo', 'create')->middleware('auth')->name('products.create');
        Route::post('/admin/productos/store', 'store')->middleware('auth')->name('products.store');
        Route::get('/admin/productos/editar/{products}', 'edit')->middleware('auth')->name('products.edit');
        Route::put('/admin/productos/update/{products}', 'update')->middleware('auth')->name('products.update');
        Route::delete('/admin/productos/delete/{products}', 'destroy')->middleware('auth')->name('products.delete');
    });

Route::controller(CategoryController::class) //
    ->group(function(){
        // Muesta el listado General de categorias
        Route::get('/categorias', 'show_all')->name('show_categorys');
        // Listado de Categoria
        Route::get('/admin/categoria', 'index')->middleware('auth')->name('category');
        Route::get('/admin/categoria/nuevo', 'create')->middleware('auth')->name('category.create');
        Route::post('/admin/categoria/store', 'store')->middleware('auth')->name('category.store');
        Route::get('/admin/categoria/editar/{category}', 'edit')->middleware('auth')->name('category.edit');
        Route::put('/admin/categoria/update/{category}', 'update')->middleware('auth')->name('category.update');
        Route::delete('/admin/categoria/delete/{category}', 'destroy')->middleware('auth')->name('category.delete');
    });

Route::get('/registrar', function () {
    return view('admin.register');
})->middleware('auth')->name('registrar');

Auth::routes();

Route::controller(InformationController::class) //
    ->group(function(){
        // Vista y edicion de informacion General
        Route::get('/admin/informacion', 'index')->middleware('auth')->name('informacion');
        Route::post('/admin/informacion', 'store')->middleware('auth')->name('save.info');
    });

Route::controller(CarouselController::class) //
    ->group(function(){
        // Listado de Carrusel
        Route::get('/admin/carrusel', 'index')->middleware('auth')->name('carrusel');
        Route::get('/admin/carrusel/nuevo', 'create')->middleware('auth')->name('carrusel.create');
        Route::post('/admin/carrusel/store', 'store')->middleware('auth')->name('carrusel.store');
        Route::get('/admin/carrusel/editar/{carousel}', 'edit')->middleware('auth')->name('carrusel.edit');
        Route::put('/admin/carrusel/update/{carousel}', 'update')->middleware('auth')->name('carrusel.update');
        Route::delete('/admin/carrusel/delete/{carousel}', 'destroy')->middleware('auth')->name('carrusel.delete');
    });

Route::controller(InformationController::class) //
    ->group(function(){
        // Edicion de mision vision y valores
        Route::get('/admin/informacion/{branding}', 'branding')->middleware('auth')->name('branding');
        Route::post('/admin/informacion/{branding}', 'storeBranding')->middleware('auth')->name('save.branding');
    });

// Por defecto
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
