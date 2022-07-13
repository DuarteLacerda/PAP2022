<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Gruta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class GrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gruta = Gruta::all(); //select * from Grutas
        return view('grutas.index', compact('gruta'));
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
        request()->validate([
            'inputNome' => 'required',
            'inputDesc' => 'required',
        ]);

        $gruta = new Gruta();
        $gruta->name = request('inputNome');
        $gruta->desc = request('inputDesc');

        $gruta->save();

        $request->validate([
            //'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png|max:1024'
        ]);

        $fileModal = new Foto();
        if ($request->hasfile('imageFile')) {

            $i = 1;
            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $gruta->name);
                $designacao = str_replace(' ', '', $designacao);
                $name = $designacao . $i . "." . $extension;
                $file->storeAs('public/images/grutas/', $name);
                $imgData[] = $name;
                $i++;
            }
        } else {
            $imgData = [];
        }
        $fileModal->name = json_encode($imgData);
        $fileModal->gruta_id = $gruta->id;
        $fileModal->save();
        return redirect('/grutas')->with('message', 'Gruta inserida com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gruta  $gruta
     * @return \Illuminate\Http\Response
     */
    public function show(Gruta $gruta)
    {
        //
        $foto = Foto::where('gruta_id', $gruta->id)->first();
        return view('grutas.show', compact('gruta', 'foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gruta  $gruta
     * @return \Illuminate\Http\Response
     */
    public function edit(Gruta $gruta)
    {
        //
        $foto = Foto::where('gruta_id', $gruta->id)->first();
        if ($foto) {
            $name = json_decode($foto->name);
        } else {
            $name = [];
        }

        return view('grutas.edit', compact('gruta', 'foto', 'name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gruta  $gruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gruta $gruta)
    {
        //
        request()->validate([
            'inputNome' => 'required',
            'inputDesc' => 'required',
        ]);

        $gruta->name = request('inputNome');
        $gruta->desc = request('inputDesc');

        $gruta->save();

        $request->validate([
            //'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png|max:1024'
        ]);
        if ($request->hasfile('imageFile')) {

            $fileModal = Foto::where('gruta_id', $gruta->id)->first();
            $fotos = ($fileModal) ? json_decode($fileModal->name) : [];

            if ($i = count($fotos) > 0) {
                $i = (int) filter_var(($fotos[count($fotos) - 1]), FILTER_SANITIZE_NUMBER_INT) + 1;
            }

            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                $designacao = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $gruta->name);
                $designacao = str_replace(' ', '', $designacao);
                $name = $designacao . $i . "." . $extension;
                $file->storeAs('public/images/grutas/', $name);
                $imgData[] = $name;
                $i++;
            }
            $imgData = array_merge($fotos, $imgData);
            $fileModal->name = json_encode($imgData);
            $fileModal->save();
        }

        return redirect('/grutas')->with('message', 'Gruta alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gruta  $gruta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gruta $gruta)
    {
        //
        $gruta->delete();
        return redirect('/grutas')->with('message', 'Gruta eliminada com sucesso!');
    }
}
