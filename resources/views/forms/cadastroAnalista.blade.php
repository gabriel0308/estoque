@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Analista') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{'gravarAnalista'}}">
                        @csrf

                        <div class="form-group row">
                            <label for="MatriculaAnalista " class="col-sm-4 col-form-label text-md-right">{{ __('Matricula') }}</label>

                            <div class="col-md-6">
                                <input id="MatriculaAnalista" type="text" class="form-control" name="MatriculaAnalista" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NomeAnalista " class="col-sm-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="NomeAnalista" type="text" class="form-control" name="NomeAnalista" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SenhaAnalista " class="col-sm-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="SenhaAnalista" type="password" class="form-control" name="SenhaAnalista" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirmar " class="col-sm-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="confirmar" type="password" class="form-control" name="confirmar" required autofocus>
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
</div> --}}

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