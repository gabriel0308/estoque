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
                                        <th>Hostname</th>
                                        <th>Serial</th>
                                        <th>Modelo</th>
                                        <th>Analista que Cadastrou</th>
                                        <th>Status</th>
                                        <th>Observação</th>
                                        <th>Lacre</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($computadores as $computador)
                                    <tr>
                                        <th>{{$computador->HostnameComp}}</th>
                                        <th>{{$computador->SerialComp}}</th>
                                        <th>{{$computador->IdModelo}}</th>
                                        <th>{{$computador->IdAnalista}}</th>
                                        <th>{{$computador->StatusComp}}</th>
                                        <th>{{$computador->ObservacaoComp}}</th>
                                        <th>{{$computador->LacreComp}}</th>
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