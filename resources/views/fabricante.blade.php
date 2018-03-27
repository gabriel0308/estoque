@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Fabricante') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{'AdicionaFabricante'}}">
                        @csrf

                        <div class="form-group row">
                            <label for="fabricante" class="col-sm-4 col-form-label text-md-right">{{ __('Fabricante') }}</label>

                            <div class="col-md-6">
                                <input id="fabricante" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="fabricante" value="{{ old('email') }}" required autofocus>
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
