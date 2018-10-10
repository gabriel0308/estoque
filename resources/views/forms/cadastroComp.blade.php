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
                    <h4 class="header2">Cadastrar Computador</h4>
                    <div class="row">
                      <form form method="POST" action="gravarComputador" class="col s12">
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
                          <div class="input-field col s6">
                              <input id="StatusComp" type="text" name="StatusComp" required>
                              <label for="StatusComp">Status</label>
                          </div>
                          <div class="input-field col s6">
                              <input id="LacreComp" type="text" name="LacreComp">
                              <label for="LacreComp">Lacre</label>
                          </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="ObservacaoComp" name="ObservacaoComp"   class="materialize-textarea" lenght="250"></textarea>
                                <label for="ObservacaoComp">Observação</label>
                            </div>
                        </div>
                        <div class="row">
                          <div>
                            <div class="input-field col s3">
                              <select name="IdTipo" id="IdTipo">
                                  <option value="" disabled selected>Escolha o Tipo de Computador</option>
                                  @foreach ($tipos as $tipo)
                                      <option value="{{$tipo->IdTipo}}">{{$tipo->NomeTipo}}</option>                                        
                                  @endforeach
                              </select>
                              <label for="IdTipo">Tipo</label>
                            </div>
                            <div class="input-field col s1">
                                <a class="btn waves-effect waves-light pink darken-3 modal-trigger" href="#cadastrarTipo"><i class="material-icons">add</i></a>
                            </div>
                          </div>
                          <div name="DivIdFabricante" id="DivIdFabricante" hidden>
                            <div class="input-field col s3" >
                                  <select name="IdFabricante" id="IdFabricante" class="col s8">
                                  </select>
                                  <label for="IdFabricante">Fabricante</label>
                            </div>
                            <div class="input-field col s1">
                                <a class="btn waves-effect waves-light pink darken-3 modal-trigger" href="#cadastrarFabricante"><i class="material-icons">add</i></a>
                            </div>
                          </div>
                          <div name="DivIdModelo" id="DivIdModelo" hidden>
                            <div class="input-field col s3">
                                  <select name="IdModelo" id="IdModelo">
                                  </select>
                                  <label for="IdModelo">Modelo</label>
                            </div>
                            <div class="input-field col s1">
                                <a class="btn waves-effect waves-light pink darken-3 modal-trigger" href="#cadastrarModelo"><i class="material-icons">add</i></a>
                            </div>
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




                <div class="modal" id="cadastrarTipo">
                  <div class="modal-content">
                    <div class="row">
                      <form form method="POST" action="gravarTipo" class="col s12">
                        @csrf
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="NomeTipo" type="text" name="NomeTipo" required autofocus>
                            <label for="NomeTipo">Tipo</label>
                          </div>
                        </div>
                        <div class="row">
                              <div class="input-field col s12">
                              <button class="btn pink darken-4 waves-effect waves-light right" type="submit" name="action">Gravar
                                  <i class="mdi-content-send right"></i>
                              </button>
                              </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="modal" id="cadastrarFabricante">
                  <div class="modal-content">
                    <div class="row">
                        <form form method="POST" action="gravarFabricante" class="col s12">
                          @csrf
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="NomeFabricante" type="text" name="NomeFabricante" required autofocus>
                              <label for="NomeFabricante">Fabricante</label>
                            </div>
                          </div>
                          <div class="row">
                                <div class="input-field col s12">
                                <button class="btn pink darken-4 waves-effect waves-light right" type="submit" name="action">Gravar
                                    <i class="mdi-content-send right"></i>
                                </button>
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
                </div>

                <div class="modal" id="cadastrarModelo">
                  <div class="modal-content">
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
                                <select name="IdFabricante2" id="IdFabricante2">
                                    <option value="" disabled selected>Selecione o Fabricante</option>
                                    @foreach ($fabricantes2 as $fabricante)
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