@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">{{ __('Tickets') }}</h4>

                    <div class="card-body ">

                            <div class="input-field col s4 right">
                                <label for="search">Pesquisar</label>
                                <input type="text" name="search" id="search">
                            </div>

                            <table class="table highlight">
                                <thead>
                                    <tr>
                                        <th class="center">Numero</th>
                                        <th class="center">Matricula do Usuário</th>
                                        <th class="center">Ramal do Usuário</th>
                                        <th class="center">Departamento do Usuário</th>
                                        <th class="center">Unidade do Usuário</th>
                                        <th class="center"></th>                           
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <th class="center">{{$ticket->NumeroTicket}}</th>
                                            <th class="center">{{$ticket->MatriculaUsuario}}</th>
                                            <th class="center">{{$ticket->RamalUsuario}}</th>
                                            <th class="center">{{$ticket->DepartamentoUsuario}}</th>
                                            <th class="center">{{$ticket->UnidadeUsuario}}</th>
                                            <th class="center"><a class="btn-floating btn-small waves-effect waves-light pink darken-4"><i class="material-icons">desktop_windows</i></a>
                                                <a class="btn-floating btn-small waves-effect waves-light pink darken-4" href="editarTicket/{{$ticket->IdTicket}}" id="edit"><i class="material-icons">create</i></a>
                                                <a class="btn-floating btn-small waves-effect waves-light pink darken-4"><i class="material-icons">delete</i></a><th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$tickets->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection

