@extends('layouts.app')

@section('content')

<script src="{{ asset('js/tickets.js') }}" defer></script>

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
                                            <th class="center"><a class="btn-floating btn-small waves-effect waves-light pink darken-4 modal-trigger" data-id="{{$ticket->IdTicket}}" href="#selecionarComputador{{$ticket->IdTicket}}"><i class="material-icons">desktop_windows</i></a>
                                                <a class="btn-floating btn-small waves-effect waves-light pink darken-4 modal-trigger" href="#modal{{$ticket->IdTicket}}"><i class="material-icons">create</i></a>
                                                <a class="btn-floating btn-small waves-effect waves-light pink darken-4"><i class="material-icons">delete</i></a><th>
                                                
                                                
                                                    <div id="modal{{$ticket->IdTicket}}" class="modal">
                                                <form method="POST" action="atualizaTicket">
                                                @csrf
                                                    <div class="modal-content">
                                                        <h4>Editar Ticket</h4>
                                                        <div class="row">
                                                            <div class="input-field col s4">
                                                                    <input id="NumeroTicket" type="text" name="NumeroTicket" value="{{$ticket->NumeroTicket}}" required readonly>
                                                                    <label for="NumeroTicket">Numero</label>
                                                            </div>
                                                            <div class="input-field col s4">
                                                                    <input id="MatriculaUsuario" type="text" name="MatriculaUsuario" value="{{$ticket->MatriculaUsuario}}" required readonly>
                                                                    <label for="MatriculaUsuario">Matricula do Usuario</label>
                                                            </div>
                                                            <div class="input-field col s4">
                                                                    <input id="RamalUsuario" type="text" name="RamalUsuario" value="{{$ticket->RamalUsuario}}" required>
                                                                    <label for="RamalUsuario">Ramal do Usuario</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s8">
                                                                    <input id="DepartamentoUsuario" type="text" name="DepartamentoUsuario" value="{{$ticket->DepartamentoUsuario}}" required>
                                                                    <label for="DepartamentoUsuario">Departamento do Usuario</label>
                                                            </div>
                                                            <div class="input-field col s4">
                                                                    <input id="UnidadeUsuario" type="text" name="UnidadeUsuario" value="{{$ticket->UnidadeUsuario}}" required>
                                                                    <label for="UnidadeUsuario">Unidade do Usuario</label>
                                                            </div>
                                                            <input type="hidden" id="IdTicket" name="IdTicket" value="{{$ticket->IdTicket}}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                            <button class="modal-close btn pink darken-4 waves-effect waves-light right" type="submit">Enviar</button>
                                                    </div>
                                                </form>
                                                </div>

                                                <div id="selecionarComputador{{$ticket->IdTicket}}" class="modal">
                                                    <form action="vinculaComputador" name="vinculaComputador" id="vinculaComputador" method="POST">
                                                    @csrf
                                                        <div class="modal-content">
                                                            <h4>Selecionar Computador</h4>
                                                            <div class="row">
                                                                <div class="input-field col s4">
                                                                    <input class="search" id="HostnameCompAjax{{$ticket->IdTicket}}" type="text" name="HostnameCompAjax">
                                                                    <label for="HostnameCompAjax{{$ticket->IdTicket}}">Hostname do Computador</label>
                                                                </div>
                                                                <input type="hidden" id="IdTicket" name="IdTicket" value="{{$ticket->IdTicket}}">
                                                            </div>
                                                            <div class="divRadio row divRadio lista-notebook" name="divRadio" id="divRadio{{$ticket->IdTicket}}" hidden>
                                                                <p>teste</p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class=" modal-close btn pink darken-4 waves-effect waves-light right">Enviar</button>
                                                        </div>
                                                    </form>
                                                </div>
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

