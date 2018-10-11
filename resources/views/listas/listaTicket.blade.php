@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">{{ __('Computadores') }}</h4>

                    <div class="card-body ">

                            <div class="input-field col s4 right">
                                <label for="search">Pesquisar</label>
                                <input type="text" name="search" id="search">
                            </div>

                            <table class="table highlight">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Hostname</th>
                                        <th>Serial</th>
                                        <th>Modelo</th>
                                        <th>Status</th>
                                        <th>Lacre</th>
                                        <th>Data de cadastro</th>
                                        <th>Analista que Cadastrou</th>
                                        <th>Observação</th>                                   
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($computadores as $computador)
                                    <tr>
                                        <th>{{$computador->NomeTipo}}</th>
                                        <th>{{$computador->HostnameComp}}</th>
                                        <th>{{$computador->SerialComp}}</th>
                                        <th>{{$computador->NomeModelo}}</th>
                                        <th>{{$computador->StatusComp}}</th>
                                        <th>{{$computador->LacreComp}}</th>
                                        <th>{{$computador->DataCadastroComp}}</th>
                                        <th>{{$computador->NomeAnalista}}</th>
                                        <th>{{$computador->ObservacaoComp}}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$computadores->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

