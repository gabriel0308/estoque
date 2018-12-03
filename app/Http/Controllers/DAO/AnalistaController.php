<?php

namespace App\Http\Controllers\DAO;

use App\Models\Analistum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnalistaController extends Controller
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
        if($request->SenhaAnalista == $request->confirmar){
        $analista = new Analistum;
        $analista->MatriculaAnalista = $request->MatriculaAnalista;
        $analista->NomeAnalista = $request->NomeAnalista;
        $analista->SenhaAnalista = sha1($request->SenhaAnalista);
        $analista->save();
        return redirect()->back();
        }
        else{
            return redirect()->back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analistum  $analistum
     * @return \Illuminate\Http\Response
     */
    public function show(Analistum $analistum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analistum  $analistum
     * @return \Illuminate\Http\Response
     */
    public function edit(Analistum $analistum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analistum  $analistum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analistum $analistum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analistum  $analistum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analistum $analistum)
    {
        //
    }

    public function search($matricula, $password)
    {
        $analista = analistum::where('MatriculaAnalista', 'like', $matricula)
                        ->where('SenhaAnalista', 'like', sha1($password))
                        ->first();
        return $analista; 
    }

    public function listagemAnalistas(){
        $analistas = analistum::orderBy('NomeAnalista', 'asc')
                                ->get();
        return view('listas/listaAnalista', compact('analistas'));
    }

}
