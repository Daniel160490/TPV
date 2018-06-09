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

App::setLocale('es');


Route::get('/', function () {
    return view('main');
});

ROUTE::get('/tpv', function (){
    return view('layouts.tpv');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'namespace' => 'Admin'], function(){
    CRUD::resource('usuario', 'UsuarioCrudController');
    CRUD::resource('producto', 'ProductoCrudController');
    CRUD::resource('evento', 'EventoCrudController');
    CRUD::resource('comanda', 'ComandaCrudController');
});


//MAPEO DE API
Route::get('api/v1/productos', 'ProductosController@getProductos');
Route::get('api/v1/comandas', 'ComandasController@getComandas');
Route::get('api/v1/eventos', 'EventosController@getEventos');