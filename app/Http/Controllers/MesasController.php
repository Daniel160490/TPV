<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;

class MesasController extends Controller
{
    /*-------------------------------------+
    |  * Método REST para API              |
    |  * @return \Illuminate\Http\Response |
    --------------------------------------*/
    public function getMesas()
    {
        // De este modo se obtienen todos los registros de Productos.
        $mesas = Mesas::all();
        return response()->json($mesas);
    }
}
