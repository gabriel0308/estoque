@extends('layouts.app')

@section('content')
    
    <a href="/cadastroFabricante" class="nav-link">Cadastrar Fabricante</a>    
    <a href="/cadastroAnalista" class="nav-link">Cadastrar Analista</a>    
    <a href="/cadastroTipo" class="nav-link">Cadastrar Tipo</a>    
    <a href="/listagemAnalistas" class="nav-link">Listar Analistas</a>   
    <a href="/cadastrarModelo" class="nav-link">Cadastrar Modelo</a>   
    <a href="/cadastrarEquipamento" class="nav-link">Cadastrar Equipamento</a>


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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
