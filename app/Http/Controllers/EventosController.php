<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eventos;

class EventosController extends Controller
{
    /*-------------------------------------+
    |  * Método REST para API              |
    |  * @return \Illuminate\Http\Response |
    --------------------------------------*/
    public function getEventos()
    {
        // De este modo se obtienen todos los registros de Productos.
        $eventos = Eventos::all();
        return response()->json($eventos);
    }
}
