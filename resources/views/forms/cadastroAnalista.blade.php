@extends('layouts.app')

@section('content')

<div class="container">
        <div class="section">
          <!--Basic Form-->
          <div id="basic-form" class="section">
            <div class="row">
              <div class="col s12 m12 l8 offset-l2">
                <div class="card-panel">
                  <h4 class="header2">Cadastrar Analista</h4>
                  <div class="row">
                    <form form method="POST" action="gravarAnalista" class="col s12">
                      @csrf
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="MatriculaAnalista" type="text" name="MatriculaAnalista" required autofocus>
                          <label for="MatriculaAnalista">Matricula</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="NomeAnalista" type="text" name="NomeAnalista" required>
                            <label for="NomeAnalista">Nome</label>
                        </div>
                      </div>
                      <div class="row">
                            <div class="input-field col s6">
                              <input id="SenhaAnalista" type="password" name="SenhaAnalista" required>
                              <label for="SenhaAnalista">Senha</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="confirmar" type="password" name="confirmar" required>
                                <label for="confirmar">Confirmar Senha</label>
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
            </div>
        </div>
        </div>
    </div>


@endsection