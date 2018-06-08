@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Analistas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{'gravarAnalista'}}">
                        @csrf

                        <table class="table table-striped">
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


@endsection