<?php

namespace App\Http\Controllers\DAO;

use App\Models\Computador;
use App\Models\Modelo;
use App\Models\Tipo;
use App\Models\Fabricante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComputadorController extends Controller
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
     * @param  \App\Models\Computador  $computador
     * @return \Illuminate\Http\Response
     */
    public function show(Computador $computador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Computador  $computador
     * @return \Illuminate\Http\Response
     */
    public function edit(Computador $computador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Computador  $computador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computador $computador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Computador  $computador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computador $computador)
    {
        //
    }

    public function cadastrarEquipamento(){
        $modelos = Modelo::join('Fabricante', 'Fabricante.IdFabricante', '=', 'Modelo.IdFabricante')
                            ->join('Tipo', 'Tipo.IdTipo', '=', 'Modelo.IdTipo')
                            ->get();

        // $fabricantes = Fabricante::orderBy('NomeFabricante', 'asc')
        //                     ->get();

        $fabricantes =  Modelo::join('Fabricante', 'Fabricante.IdFabricante', '=', 'Modelo.IdFabricante')
                                ->select('Fabricante.IdFabricante', 'Fabricante.NomeFabricante')
                                ->where('Modelo.IdTipo', '=', 2)
                                ->distinct('Fabricante.IdFabricante')
                                ->orderBy('Fabricante.NomeFabricante', 'asc')
                                ->get();

        $tipos = Tipo::orderBy('NomeTipo', 'asc')
                            ->get();

        return view('forms\cadastroEquipamento', compact('modelos', 'tipos', 'fabricantes'));
    }

    public function listarFabricanteAjax($idTipo)
    {
        $fabricantes =  Modelo::join('Fabricante', 'Fabricante.IdFabricante', '=', 'Modelo.IdFabricante')
                                ->select('Fabricante.IdFabricante', 'Fabricante.NomeFabricante')
                                ->where('Modelo.IdTipo', '=', $idTipo)
                                ->distinct('Fabricante.IdFabricante')
                                ->orderBy('Fabricante.NomeFabricante', 'asc')
                                ->get();
        return json_encode($fabricantes);

    }
    
    public function listarModeloAjax($idFabricante, $idTipo)
    {
        $modelos = Modelo::where("IdFabricante", $idFabricante)
                            ->where("IdTipo", $idTipo)
                            ->get();
        return json_encode($modelos);
    }

}
