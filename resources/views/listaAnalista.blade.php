@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="card-panel">
                    <h4 class="header2">{{ __('Analistas') }}</h4>

                    <div class="card-body">

                            <table class="table highlight">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Matricula</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($analistas as $analista)
                                    <tr>
                                        <th>{{$analista->NomeAnalista}}</th>
                                        <th>{{$analista->MatriculaAnalista}}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>


@endsection