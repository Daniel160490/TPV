<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{

    /*-------------------------------------+
    |  * Método REST para API              |
    |  * @return \Illuminate\Http\Response |
    --------------------------------------*/
    public function getProductos()
    {
        // De este modo se obtienen todos los registros de Productos.
        $productos = Productos::all();
        return response()->json($productos);
    }
}
