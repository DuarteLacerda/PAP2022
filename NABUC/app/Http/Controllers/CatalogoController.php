<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Gruta;

class CatalogoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $grutas = Gruta::all();
        /* $fotos = Foto::all();
        if ($fotos) {
            $name = json_decode($fotos->name);
        } else {
            $name = [];
        } */
        return view('catalogo', compact('grutas'));
    }
}
