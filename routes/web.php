<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('Web/index');
});


//################### ADMIN ######################//

Route::get('/admin/index', function () {
    return view('Admin/informacion/index');
})->name('indexAdmin'); 

//Productos-------------------------------------------------------------------------------------------------//
Route::get('/admin/productos/index', 'ProductoController@index')->name('productos.index');

Route::get('/admin/productos/create', 'ProductoController@create')->name('productos.create');

Route::post('/admin/productos/index', 'ProductoController@store')->name('productos.store');

Route::get('/admin/productos/edit/{producto}', 'ProductoController@edit')->name('productos.edit');

Route::get('/admin/productos/show/{producto}', 'ProductoController@show')->name('productos.show');

Route::put('/admin/productos/update/{producto}', 'ProductoController@update')->name('productos.update');

Route::delete('/admin/productos/destroy/{producto}', 'ProductoController@destroy')->name('productos.destroy');

//Categorias-----------------------------------------------------------------------------------------------//
Route::get('/admin/categorias/index', 'CategoriaController@index')->name('categorias.index');

Route::get('/admin/categorias/create', 'CategoriaController@create')->name('categorias.create');

Route::post('/admin/categorias/index', 'CategoriaController@store')->name('categorias.store');

Route::get('/admin/categorias/edit/{categoria}', 'CategoriaController@edit')->name('categorias.edit');

Route::put('/admin/categorias/update/{categoria}', 'CategoriaController@update')->name('categorias.update');

Route::delete('/admin/categorias/destroy/{categoria}', 'CategoriaController@destroy')->name('categorias.destroy');

//Subcategorias--------------------------------------------------------------------------------------------//
Route::get('/admin/subcategorias/index', 'SubcategoriaController@index')->name('subcategorias.index');

Route::get('/admin/subcategorias/create', 'SubcategoriaController@create')->name('subcategorias.create');

Route::post('/admin/subcategorias/index', 'SubcategoriaController@store')->name('subcategorias.store');

Route::get('/admin/subcategorias/edit/{subcategoria}', 'SubcategoriaController@edit')->name('subcategorias.edit');

Route::put('/admin/subcategorias/update/{subcategoria}', 'SubcategoriaController@update')->name('subcategorias.update');

Route::delete('/admin/subcategorias/destroy/{subcategoria}', 'SubcategoriaController@destroy')->name('subcategorias.destroy');

//Consumoproducto------------------------------------------------------------------------------------------//

Route::get('/admin/consumoproductos/index', 'ConsumoproductoController@index')->name('consumoproducto.index');

//Cliente--------------------------------------------------------------------------------------------------//

Route::get('/admin/clientes/index', 'UserController@index')->name('cliente');


//################### WEB ########################//

Route::get('/index', function () {
    return view('Web/index');
})->name('index');

Route::get('/blog', function () {
    return view('Web/blog');
})->name('blog');

Route::get('/contact', function () {
    return view('Web/contact');
})->name('contact');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



Route::get('/prueba' , 'CategoriaController@getMenu');