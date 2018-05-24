@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    hello {{ auth::user()->NomeAnalista}} <br><br>

                    You are logged in!

                    <br>
                    <a href="/cadastroFabricante">Cadastrar Fabricante</a>
                    <br>
                    <a href="/cadastroAnalista">Cadastrar Analista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
