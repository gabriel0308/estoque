@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Modelo') }}</div>

                <div class="card-body">
                <form method="POST" action="gravarModelo">
                        @csrf

                        <div class="form-group row">
                            <label for="NomeModelo" class="col-sm-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                            <div class="col-md-6">
                                <input id="NomeModelo" type="text" class="form-control" name="NomeModelo" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="IdTipo" class="col-sm-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <select name="IdTipo" id="IdTipo" class="form-control">
                                    @foreach ($tipos as $tipo)
                                        <option value="{{$tipo->Idtipo}}">{{$tipo->NomeTipo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="IdFabricante" class="col-sm-4 col-form-label text-md-right">{{ __('Fabricante') }}</label>

                            <div class="col-md-6">
                                <select name="IdFabricante" id="IdFabricante" class="form-control">
                                    @foreach ($fabricantes as $fabricante)
                                        <option value="{{$fabricante->IdFabricante}}">{{$fabricante->NomeFabricante}}</option>
                                    @endforeach
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
</div>
@endsection
