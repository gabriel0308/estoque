@extends('layouts.app')

@section('content')
<div class="container">
    <div id="basic-form" class="section">
        <div class="row">  
            <div class="col s12 m12 l6 offset-l3">   
                <div class="card-panel">
                    <h4 class="header2">Login</h4>
                        <div class="row">
                    
                            <form class="col s12" method="POST" action="{{'ValidaLogin'}}">
                                @csrf

                                    @if (session('loginErrors'))
                                        <div class="card-pannel red darken-1">
                                            <strong>{{ session('loginErrors') }}</strong>
                                        </div>
                                    @endif

                                <div class="row">
                                    <div class="input-field col s12">                                    
                                        <input id="MatriculaAnalista" type="text" name="MatriculaAnalista" value="{{ old('email') }}" required>
                                        <label for="MatriculaAnalista ">{{ __('Matricula') }}</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <button type="submit" class="btn pink darken-2 waves-effect waves-light right">
                                            {{ __('Entrar') }}
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
@endsection
