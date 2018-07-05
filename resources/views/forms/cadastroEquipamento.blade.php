@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Equipamento') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{'gravarAnalista'}}">
                        @csrf

                        <div class="form-group row">
                            <label for="SerialComp " class="col-sm-4 col-form-label text-md-right">{{ __('Serial') }}</label>

                            <div class="col-md-6">
                                <input id="SerialComp" type="text" class="form-control" name="SerialComp" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="HostnameComp " class="col-sm-4 col-form-label text-md-right">{{ __('Hostname') }}</label>

                            <div class="col-md-6">
                                <input id="HostnameComp" type="text" class="form-control" name="HostnameComp" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row" name="DivIdTipo">
                            <label for="IdTipo " class="col-sm-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <select name="IdTipo" id="IdTipo" class="form-control">
                                    @foreach ($tipos as $tipo)
                                        <option value="{{$tipo->IdTipo}}">{{$tipo->NomeTipo}}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <script type="text/javascript">
                            console.log(1);

                            $(document).ready(function() {
                                console.log(2);
                          
                                $('select[name="IdTipo"]').on('change', function() {

                                    console.log(3);

                                    var idTipo = $(this).val();
                                    if(idTipo) {

                                        $.ajax({
                                            url:'cadastrarEquipamento/ajax/fabricante/'+idTipo,
                                            type:"get",
                                            dataType:"json",
                                            success:function(data) {
                                                console.log(data);

                                                var sel = $(<"select id=\"IdFabricante\" name=\"IdFabricante\" />");
                                                sel.insertAfter("DivIdTipo");
                                                $.each(data, function(fabrica, value) {

                                                    console.log(value.IdFabricante);
                                                    console.log(value.NomeFabricante);

                                                    //$('select[name="IdFabricante"]').append('<option value="'+ value.IdFabricante + '">' + value.NomeFabricante + '</option>');
                                                    sel.append($("<option>").attr('value',value.IdFabricante).text(value.NomeFabricante));
                                                });

                                            }
                                        });

                                    }else{
                                        $('select[name="IdFabricante"]').empty();
                                    }

                                });

                            });
                        </script>

                        {{-- <div class="form-group row">
                            <label for="IdFabricante " class="col-sm-4 col-form-label text-md-right">{{ __('Fabricante') }}</label>

                            <div class="col-md-6">
                                <select name="IdFabricante" id="IdFabricante" class="form-control">
                                    @foreach ($fabricantes as $fabricante)
                                        <option value="{{$fabricante->IdFabricante}}">{{$fabricante->NomeFabricante}}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="IdModelo " class="col-sm-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                            <div class="col-md-6">
                                <select name="IdModelo" id="IdModelo" class="form-control">
                                    @foreach ($modelos as $modelo)
                                        <option value="{{$modelo->IdModelo}}">{{$modelo->NomeModelo}}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Gravar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection