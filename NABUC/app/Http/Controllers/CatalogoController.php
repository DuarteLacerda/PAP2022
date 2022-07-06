<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grutas;

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
        return view('catalogo', compact('grutas'));
    }
}
