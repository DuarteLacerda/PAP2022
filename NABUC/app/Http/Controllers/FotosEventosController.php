<?php

namespace App\Http\Controllers;

use App\Models\FotosEventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotosEventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FotosEventos  $fotosEventos
     * @return \Illuminate\Http\Response
     */
    public function show(FotosEventos $fotosEventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FotosEventos  $fotosEventos
     * @return \Illuminate\Http\Response
     */
    public function edit(FotosEventos $fotosEventos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FotosEventos  $fotosEventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FotosEventos $fotosEventos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FotosEventos  $fotosEventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(FotosEventos $fotosEventos, $name)
    {
        //
        $existe = false;
        //
        Storage::delete('public/images/eventos' . $name);
        $fotos = json_decode($fotosEventos->name);

        foreach ($fotos as $key => $value) {
            if (strcmp($value, $name) == 0) {
                array_splice($fotos, $key, 1);
                $fotosEventos->name = json_encode($fotos);
                $existe = true;
                break;
            }
        }

        if (!$existe) {
            $fotosEventos->name = [];
            $fotosEventos->name = json_encode($fotosEventos);
        }
        $fotosEventos->save();
    }
}
