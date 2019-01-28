<?php

namespace App\Http\Controllers\DAO;

use App\Models\Computador;
use App\Models\Modelo;
use App\Models\Tipo;
use App\Models\Fabricante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        $computador = new Computador;
        $modelo = Modelo::find($request->IdModelo);
        $computador->SerialComp = $request->SerialComp;
        $computador->HostnameComp = $request->HostnameComp;
        $computador->StatusComp = $request->StatusComp;
        $computador->ObservacaoComp = $request->ObservacaoComp;
        $computador->LacreComp = $request->LacreComp;
        $computador->modelo()->associate($modelo);
        $computador->analistum()->associate(Auth::user());
        $computador->save();
        return redirect()->back();

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

    public function cadastrarComp(){

        $tipos = Tipo::orderBy('NomeTipo', 'asc')
                            ->get();
        $fabricantes2 = Fabricante::orderBy('NomeFabricante', 'asc')
        ->get();

        return view('forms/cadastroComp', compact('tipos', 'fabricantes2'));
    }

    public function listarFabricanteAjax($idTipo)
    {
        $fabricantes =  Modelo::join('fabricante', 'fabricante.IdFabricante', '=', 'modelo.IdFabricante')
                                ->select('fabricante.IdFabricante', 'fabricante.NomeFabricante')
                                ->where('modelo.IdTipo', '=', $idTipo)
                                ->distinct('fabricante.IdFabricante')
                                ->orderBy('fabricante.NomeFabricante', 'asc')
                                ->get();
        return json_encode($fabricantes);

    }
    
    public function listarModeloAjax($idTipo, $idFabricante)
    {
        $modelos = Modelo::where("IdFabricante", $idFabricante)
                            ->select('modelo.IdModelo','modelo.NomeModelo')
                            ->where("IdTipo", $idTipo)
                            ->get();
        return json_encode($modelos);
    }

    public function listagemComputadores() 
    {
        $computadores = Computador::orderBy('computador.HostnameComp', 'asc')
                        ->join('analista', 'analista.IdAnalista', '=', 'computador.IdAnalista')
                        ->join('modelo', 'modelo.IdModelo', '=', 'computador.IdModelo')
                        ->join('tipo', 'tipo.IdTipo', '=', 'modelo.IdTipo')
                        ->join('fabricante', 'fabricante.IdFabricante', '=', 'modelo.IdFabricante')
                        ->select('tipo.NomeTipo', 'computador.HostnameComp', 'computador.SerialComp', 'modelo.NomeModelo', 'computador.StatusComp', 'computador.ObservacaoComp', 'computador.LacreComp', 'computador.DataCadastroComp', 'analista.NomeAnalista')
                        ->paginate(15);
        return view('listas/listaComputador', compact('computadores'));
    }

    public function searchAjax($search)
    {
        $computadores = Computador::where('computador.HostnameComp', 'like', '%'.$search.'%')
                        ->orWhere('computador.SerialComp', 'like', '%'.$search.'%')
                        ->orderBy('computador.HostnameComp', 'asc')
                        ->take(12)
                        ->get();
        return json_encode($computadores);
    }

}
