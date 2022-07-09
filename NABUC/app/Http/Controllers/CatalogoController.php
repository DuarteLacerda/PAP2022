<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use App\Models\Grutas;
use FFI;

class CatalogoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $grutas = Grutas::all();
        $fotos = Foto::all();
        return view('catalogo', compact('grutas', 'fotos'));
    }
}
