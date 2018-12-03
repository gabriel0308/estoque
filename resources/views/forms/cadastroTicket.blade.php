@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
      <!--Basic Form-->
      <div id="basic-form" class="section">
        <div class="row">
          <div class="col s12 m12 l10 offset-l1">
            <div class="card-panel">
              <h4 class="header2">Cadastrar Ticket</h4>
              <div class="row">
                <form form method="POST" action="gravarTicket" class="col s12">
                  @csrf
                  <div class="row">
                    <div class="input-field col s4">
                      <input id="NumeroTicket" type="number" name="NumeroTicket" required autofocus>
                      <label for="NumeroTicket">Numero do Ticket</label>
                    </div>
                    <div class="input-field col s4">
                      <input id="MatriculaUsuario" type="text" name="MatriculaUsuario" required>
                      <label for="MatriculaUsuario">Matricula do Usuário</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="RamalUsuario" type="text" name="RamalUsuario" required>
                        <label for="RamalUsuario">Ramal do Usuário</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="DepartamentoUsuario" type="text" name="DepartamentoUsuario" required>
                      <label for="DepartamentoUsuario">Departamento do Ticket</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="UnidadeUsuario" type="text" name="UnidadeUsuario" required>
                        <label for="UnidadeUsuario">Unidade do Ticket</label>
                      </div>
                  </div>
                  <div class="row">
                        <div class="input-field col s12">
                        <button class="btn pink darken-4 waves-effect waves-light white-text right" type="submit" name="action">Gravar
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