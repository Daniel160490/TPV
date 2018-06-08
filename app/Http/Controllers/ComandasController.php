<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comandas;

class ComandasController extends Controller
{
    /*-------------------------------------+
    |  * Método REST para API              |
    |  * @return \Illuminate\Http\Response |
    --------------------------------------*/
    public function getComandas()
    {
        // De este modo se obtienen todos los registros de Productos.
        $comandas = Comandas::all();
        return response()->json($comandas);
    }
}
