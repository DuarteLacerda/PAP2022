<?php

namespace App\Http\Controllers;

use App\Models\Grutas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
        $gruta = Grutas::all(); //select * from Grutas
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
        Request()->validate([
            'inputNome' => 'required',
            'inputDesc' => 'required',
            'imagem' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
        ]);

        $gruta = new Grutas();
        $gruta->name = request('inputNome');
        $gruta->desc = request('inputDesc');
        if ($request->hasFile('imagem')) {
            $file = request('imagem');
            $name = request('imagem')->getClientOriginalName();
            $gruta->img = $name;
        }
        $file->storeAs('/public/images/grutas', $name);
        $gruta->save();
        return redirect('/grutas')->with('message', 'Gruta inserida com sucesso!');
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
        return view('grutas.show', compact('grutas'));
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
        return view('grutas.edit', compact('grutas'));
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
        Request()->validate([
            'inputNome' => 'required',
            'inputDesc' => 'required',
            'imagem' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
        ]);

        $grutas->name = request('inputNome');
        $grutas->desc = request('inputDesc');
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $name = request('imagem')->getClientOriginalName();
            $grutas->img = $name;
        }

        $grutas->save();

        for ($i = 1; $i < 101; $i++) {
            $currentPhoto[] = DB::select('select img from grutas');
            if ($name = request('imagem')->getClientOriginalName() == $currentPhoto[$i]) {
                $userPhoto = public_path('/public/images/grutas/') . $currentPhoto;
                if (Storage::exists('/public/images/grutas/' . $name)) {
                    Storage::delete('/public/images/grutas/' . $name);
                }
                $file->storeAs('/public/images/grutas', $name);
            }
        }

        return redirect('/grutas')->with('message', 'Gruta alterada com sucesso!');
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
        $grutas->delete();
        return redirect('/grutas')->with('message', 'Gruta eliminada com sucesso!');
    }
}
