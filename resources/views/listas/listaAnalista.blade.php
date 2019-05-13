@extends('layouts.app')

@section('content')

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="card-panel">
                    <h4 class="header2">{{ __('Analistas') }}</h4>

                    <div class="card-body">

                            <table class="display" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Matricula</th>   
                                        <th>Acesso</th> 
                                        <th></th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($analistas as $analista)
                                    <tr>
                                        <th>{{$analista->NomeAnalista}}</th>
                                        <th>{{$analista->MatriculaAnalista}}</th>
                                        <th>{{$analista->guard}}</th>
                                        <th>    
                                            <a class="btn-floating btn-small waves-effect waves-light pink darken-4 modal-trigger" href="#modal{{$analista->IdAnalista}}"><i class="material-icons">create</i></a>
                                            <a class="btn-floating btn-small waves-effect waves-light pink darken-4"><i class="material-icons">delete</i></a>
                                        </th>
                                    </tr>
                                    <div id="modal{{$analista->IdAnalista}}" class="modal">
                                        <form method="POST" action="atualizaAnalista">
                                        @csrf
                                        <div class="modal-content">
                                                <h4>Editar Ticket</h4>
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                            <input id="Nome" type="text" name="NomeAnalista" value="{{$analista->NomeAnalista}}" required readonly>
                                                            <label for="NumeroTicket">Nome</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                            <input id="Nome" type="text" name="MatriculaAnalista" value="{{$analista->MatriculaAnalista}}" required readonly>
                                                            <label for="NumeroTicket">Matricula</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                            <input id="Nome" type="password" name="SenhaAnalista" required>
                                                            <label for="SenhaAnalista">Senha</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                            <input id="Nome" type="password" name="ConfirmarSenha" required>
                                                            <label for="ConfirmarSenha">Confirmar Senha</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    @if($analista->guard === 'Admin')
                                                        <div class="input-field col s6">
                                                            <label>
                                                                <input type="checkbox" name="guard" checked><span>Admin</span>
                                                            </label>
                                                        </div>
                                                    @else
                                                        <div class="input-field col s6">
                                                            <label>
                                                                <input type="checkbox" name="guard"><span>Admin</span>
                                                            </label>
                                                        </div>
                                                    @endif
                                                    <input type="hidden" id="IdAnalista" name="IdAnalista" value="{{$analista->IdAnalista}}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                    <button class="modal-close btn pink darken-4 waves-effect waves-light right" type="submit">Enviar</button>
                                            </div>
                                        </form>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="section">  
                                    <br><a class="btn pink darken-4 waves-effect waves-light right modal-trigger" href="#modalCadastroAnalista">Novo</a><br>

                                    <div id="modalCadastroAnalista" class="modal">
                                        <div class="modal-content">
                                            <form form method="POST" action="gravarAnalista" class="col s12">
                                                @csrf
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <input id="MatriculaAnalista" type="text" name="MatriculaAnalista" required autofocus>
                                                        <label for="MatriculaAnalista">Matricula</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input id="NomeAnalista" type="text" name="NomeAnalista" required>
                                                        <label for="NomeAnalista">Nome</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <input id="SenhaAnalista" type="password" name="SenhaAnalista" required>
                                                        <label for="SenhaAnalista">Senha</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input id="confirmar" type="password" name="confirmar" required>
                                                        <label for="confirmar">Confirmar Senha</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div name="input-field col s4">
                                                        <label>
                                                            <input type="checkbox" name="guard"><span>Admin</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="modal-close btn pink darken-4 waves-effect waves-light right" type="submit" name="action">Gravar
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>           
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>


@endsection