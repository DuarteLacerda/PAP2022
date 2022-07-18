<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Eventos;
use App\Models\FotosEventos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos = Eventos::all(); //select * from Eventos
        return view('evento.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('evento.create');
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
        request()->validate([
            'inputNome' => 'required',
            'inputDesc' => 'required',
        ]);

        $eventos = new Eventos();
        $eventos->name = request('inputNome');
        $eventos->descricao = request('inputDesc');

        $eventos->save();

        $request->validate([
            //'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png|max:1024'
        ]);

        $fileModal = new FotosEventos();
        if ($request->hasfile('imageFile')) {

            $i = 1;
            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $eventos->name);
                $designacao = str_replace(' ', '', $designacao);
                $name = $designacao . $i . "." . $extension;
                $file->storeAs('public/images/eventos/', $name);
                $imgData[] = $name;
                $i++;
            }
        } else {
            $imgData = [];
        }
        $fileModal->designacao = json_encode($imgData);
        $fileModal->eventos_id = $eventos->id;
        $fileModal->save();
        return redirect('/evento')->with('message', 'Evento inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $eventos)
    {
        //
        $fotos_eventos = DB::table('eventos')
            ->leftJoin('fotos_eventos', 'eventos.id', '=', 'eventos_id')
            ->select('fotos_eventos.designacao')
            ->where('eventos.id', $eventos->id)
            ->get();


        return view('evento.show', compact('eventos', 'fotos_eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventos $eventos)
    {
        //
        $fotoEventos = FotosEventos::where('eventos_id', $eventos->id)->first();
        if ($fotoEventos) {
            $name = json_decode($fotoEventos->name);
        } else {
            $name = [];
        }

        return view('evento.edit', compact('eventos', 'fotoEventos', 'name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventos $eventos)
    {
        //
        request()->validate([
            'inputNome' => 'required',
            'inputDesc' => 'required',
        ]);

        $eventos->name = request('inputNome');
        $eventos->descricao = request('inputDesc');

        $eventos->save();

        $request->validate([
            //'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png|max:1024'
        ]);
        if ($request->hasfile('imageFile')) {

            $fileModal = FotosEventos::where('eventos_id', $eventos->id)->first();
            $fotosEventos = ($fileModal) ? json_decode($fileModal->name) : [];

            if ($i = count($fotosEventos) > 0) {
                $i = (int) filter_var(($fotosEventos[count($fotosEventos) - 1]), FILTER_SANITIZE_NUMBER_INT) + 1;
            }

            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $eventos->name);
                $designacao = str_replace(' ', '', $designacao);
                $name = $designacao . $i . "." . $extension;
                $file->storeAs('public/images/grutas/', $name);
                $imgData[] = $name;
                $i++;
            }
            $imgData = array_merge($fotosEventos, $imgData);
            $fileModal->name = json_encode($imgData);
            $fileModal->save();
        }

        return redirect('/evento')->with('message', 'Evento alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventos $eventos)
    {
        //
        $eventos->delete();
        return redirect('/evento')->with('message', 'Evento eliminado com sucesso!');
    }
}
