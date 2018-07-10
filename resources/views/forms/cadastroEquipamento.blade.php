@extends('layouts.app')

@section('content')

<script src="{{ asset('js/equipamentos.js') }}" defer></script>

<!-- <div class="container">
    <div class="row">
        <div class="card">
            <div class="card-content">
                <span class="card-title">{{ __('Cadastrar Equipamento') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{'gravarAnalista'}}" class="col s12">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="SerialComp " class="">{{ __('Serial') }}</label>

                                <div class="input-field col s6">
                                    <input id="SerialComp" type="text" class="input-field" name="SerialComp" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="HostnameComp " class="">{{ __('Hostname') }}</label>

                                <div class="input-field col s6">
                                    <input id="HostnameComp" type="text" class="input-field" name="HostnameComp" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row" name="DivIdTipo" id="DivIdTipo">
                            <label for="IdTipo " class="col-sm-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <select name="IdTipo" id="IdTipo" class="input-field">
                                    <option value=""></option>
                                    @foreach ($tipos as $tipo)
                                        <option value="{{$tipo->IdTipo}}">{{$tipo->NomeTipo}}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" name="DivIdFabricante" id="DivIdFabricante" hidden>
                            <label for="IdFabricante " class="col-sm-4 col-form-label text-md-right">{{ __('Fabricante') }}</label>

                            <div class="col-md-6">
                                <select name="IdFabricante" id="IdFabricante" class="input-field">
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" name="DivIdModelo" id="DivIdModelo" hidden>
                            <label for="IdModelo " class="col-sm-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                            <div class="col-md-6">
                                <select name="IdModelo" id="IdModelo" class="input-field">
                                </select>
                            </div>
                        </div>                    

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Gravar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
                            <select name="IdTipo" id="IdTipo" class="input-field">
                            </select>
                            <label for="IdTipo">Tipo</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
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