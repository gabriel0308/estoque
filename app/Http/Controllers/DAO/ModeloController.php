<?php

namespace App\Http\Controllers\DAO;

use App\Models\Modelo;
use App\Models\Tipo;
use App\Models\Fabricante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function cadastrarModelo() 
    {
        $tipos = Tipo::orderBy('NomeTipo','asc')
                    ->get();
        $fabricantes = Fabricante::orderBy('NomeFabricante', 'asc')
                        ->get();
        return view('forms\cadastroModelo', compact('tipos'), compact('fabricantes'));
    }

     public function index()
    {
        //

        return view('modelo');
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
        $modelo = new Modelo;
        $modelo->NomeModelo = $request->NomeModelo;
        $tipo = Tipo::find($request->IdTipo);
        $fabricante = Fabricante::find($request->IdFabricante);
        $modelo->tipo()->associate($tipo);
        $modelo->fabricante()->associate($fabricante);
        $modelo->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $modelo)
    {
        //
    }
}
