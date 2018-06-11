<?php



App::setLocale('es');
use App\Models\Producto;
Auth::routes();

Route::get('/', function () {
    return view('AdminTheme.master');
});


//Route::get('/','HomeController@index');

Route::get('/calendario', function () {
    return view('AdminTheme.calendario');
});

Route::get('/creditos', function () {
    return view('AdminTheme.creditos');
});

Route::get('/perfil', function () {
    return view('AdminTheme.perfil');
});

Route::get('/registro', function () {
    return view('AdminTheme.auth.register');
});

ROUTE::get('/tpv', function (){
    $productos = Producto::all();
    return view('layouts.tpv')->with(compact('productos'));
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'namespace' => 'Admin'], function(){
    CRUD::resource('usuario', 'UsuarioCrudController');
    CRUD::resource('producto', 'ProductoCrudController');
    CRUD::resource('evento', 'EventoCrudController');
    CRUD::resource('comanda', 'ComandaCrudController');
});

