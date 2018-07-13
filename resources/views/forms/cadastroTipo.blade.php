@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
      <!--Basic Form-->
      <div id="basic-form" class="section">
        <div class="row">
          <div class="col s12 m12 l4 offset-l4">
            <div class="card-panel">
              <h4 class="header2">Cadastrar Tipo</h4>
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
        </div>
    </div>
    </div>
</div>
@endsection