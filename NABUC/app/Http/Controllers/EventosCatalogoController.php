<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotosEventos;
use App\Models\Eventos;
use Illuminate\Support\Facades\DB;

class EventosCatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable 
     */
    public function index()
    {
        $eventos = DB::table('eventos')
            ->leftJoin('fotos_eventos', 'eventos.id', '=', 'eventos_id')
            ->select('eventos.*', 'fotos_eventos.designacao as fotodes')
            ->get();

        return view('eventosCatalogo', compact('eventos'));
    }
}
