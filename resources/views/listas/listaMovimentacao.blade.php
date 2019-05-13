@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">{{ __('Movimentações') }}</h4>

                    <div class="card-body ">
                    
                            <table class="display" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Ticket</th>
                                        <th>Hostname</th>
                                        <th>Usuário</th>
                                        <th>Analista</th>
                                        <th>Data de movimentação</th>                                  
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($movimentacoes as $movimentacao)
                                    <tr>
                                        <th>{{$movimentacao->NumeroTicket}}</th>
                                        <th>{{$movimentacao->HostnameComp}}</th>
                                        <th>{{$movimentacao->MatriculaUsuario}}</th>
                                        <th>{{$movimentacao->NomeAnalista}}</th>
                                        <th>{{$movimentacao->DataMovimentacao}}</th>
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