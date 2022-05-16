<?php

namespace App\Http\Controllers;

use App\Models\Grutas;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Groups;

class GrutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('grutas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('grutas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $grutas = new Grutas();
        $grutas->name = request('inputNome');
        $grutas->desc = request('inputDesc');
        $grutas->img = request('inputIMG');

        $grutas->save();
        return redirect('/grutas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grutas  $grutas
     * @return \Illuminate\Http\Response
     */
    public function show(Grutas $grutas)
    {
        //
        return view('grutas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grutas  $grutas
     * @return \Illuminate\Http\Response
     */
    public function edit(Grutas $grutas)
    {
        //
        return view('grutas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grutas  $grutas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grutas $grutas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grutas  $grutas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grutas $grutas)
    {
        //
    }
}
