@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Analista') }}</div>

                <div class="card-body">
                    <form action="gravarFabricante" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="NomeFabricante">Fabricante:</label>
                            <input type="text" name="NomeFabricante" id="NomeFabricante">
                        </div>
                        <button type="submit" class="btn btn-default">Adicionar</button>
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
              <div class="col s12 m12 l4 offset-l4">
                <div class="card-panel">
                  <h4 class="header2">Cadastrar Fabricante</h4>
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
            </div>
        </div>
        </div>
    </div>

@endsection