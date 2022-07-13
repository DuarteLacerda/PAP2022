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
        /* $fotos = Foto::all();
        if ($fotos) {
            $name = json_decode($fotos->name);
        } else {
            $name = [];
        } */
        

        return view('catalogo', compact('grutas'));
    }
}
