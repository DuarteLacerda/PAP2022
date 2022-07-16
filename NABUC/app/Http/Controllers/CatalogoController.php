<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Gruta;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $grutas = DB::table('grutas')
            ->leftJoin('fotos', 'grutas.id', '=', 'gruta_id')
            ->select('grutas.*', 'fotos.name as fotodes')
            ->get();

        return view('catalogo', compact('grutas'));
    }
}
