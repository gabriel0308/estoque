@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
      <!--Basic Form-->
      <div id="basic-form" class="section">
        <div class="row">
          <div class="col s12 m12 l8 offset-l2">
            <div class="card-panel">
              <h4 class="header2">Cadastrar Modelo</h4>
              <div class="row">
                <form form method="POST" action="gravarModelo" class="col s12">
                  @csrf
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="NomeModelo" type="text" name="NomeModelo" required autofocus>
                      <label for="NomeModelo">Modelo</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <select name="IdTipo" id="IdTipo">
                          <option value="" disabled selected>Selecione o Tipo</option>
                          @foreach ($tipos as $tipo)
                              <option value="{{$tipo->IdTipo}}">{{$tipo->NomeTipo}}</option>                                        
                          @endforeach
                      </select>
                      <label for="IdTipo">Tipo</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="IdFabricante" id="IdFabricante">
                            <option value="" disabled selected>Selecione o Fabricante</option>
                            @foreach ($fabricantes as $fabricante)
                                <option value="{{$fabricante->IdFabricante}}">{{$fabricante->NomeFabricante}}</option>                                        
                            @endforeach
                        </select>
                        <label for="IdFabricante">Tipo</label>
                    </div>
                  </div>
                      <div class="input-field col s12">
                        <button class="btn pink darken-4 waves-effect waves-light right" type="submit" name="action">Gravar
                          <i class="mdi-content-send right"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
@endsection
