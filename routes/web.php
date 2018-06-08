<?php


use App\Models\Mesa;
use App\Models\Producto;
use App\Models\Categorias;

App::setLocale('es');

Route::get('/', function () {
    return view('main');
});

Route::get('/mesas', function (){
    $mesas = Mesa::all();
    return view('layouts.mesas')->with(compact('mesas'));
});


ROUTE::get('/mesas/tpv', function (){

    //Variables que va a recibir la vista
    $mesas = Mesa::all();
    $productos = Producto::all();
    $categorias = Categorias::all();

    return view('layouts.tpv')->with(compact('mesas','productos', 'categorias'));
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'namespace' => 'Admin'], function(){
    CRUD::resource('usuario', 'UsuarioCrudController');
    CRUD::resource('producto', 'ProductoCrudController');
    CRUD::resource('evento', 'EventoCrudController');
    CRUD::resource('comanda', 'ComandaCrudController');
    CRUD::resource('mesas', 'MesasCrudController');
});

function productos($idProductos) {
    $sql = "select * from productos where idProducto = $idProductos";
    $producto = DB::connection('mysql2')->select($sql);
    //dd($producto[0]->Nombre);
    return $producto[0];
}


