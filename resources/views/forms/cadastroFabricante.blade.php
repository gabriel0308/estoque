@extends('layouts.app')

@section('content')
<div class="container">
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
</div>

@endsection