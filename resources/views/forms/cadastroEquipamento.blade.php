@extends('layouts.app')

@section('content')

<script src="{{ asset('js/equipamentos.js') }}" defer></script>

<div class="container">
          <div class="section">
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <h4 class="header2">Cadastrar Equipamento</h4>
                    <div class="row">
                      <form form method="POST" action="{{'gravarAnalista'}}" class="col s12">
                        @csrf
                        <div class="row">
                          <div class="input-field col s6">
                            <input id="SerialComp" type="text" name="SerialComp" required autofocus>
                            <label for="SerialComp">Serial</label>
                          </div>
                          <div class="input-field col s6">
                            <input id="HostnameComp" type="text" name="HostnameComp" required>
                            <label for="HostanameComp">Hostname</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s4">
                            <select name="IdTipo" id="IdTipo">
                                <option value="" disabled selected>Choose your option</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{$tipo->IdTipo}}">{{$tipo->NomeTipo}}</option>                                        
                                @endforeach
                            </select>
                            <label for="IdTipo">Tipo</label>
                          </div>
                          <div class="input-field col s4" name="DivIdFabricante" id="DivIdFabricante" hidden>
                                <select name="IdFabricante" id="IdFabricante">
                                </select>
                                <label for="IdFabricante">Fabricante</label>
                          </div>
                          <div class="input-field col s4" name="DivIdModelo" id="DivIdModelo" hidden>
                                <select name="IdModelo" id="IdModelo">
                                </select>
                                <label for="IdModelo">Modelo</label>
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