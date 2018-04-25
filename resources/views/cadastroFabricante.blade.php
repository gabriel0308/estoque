@extends('layouts.app')

@section('content')

    <form action="gravarFabricante" method="post">
        <div class="form-group">
            <label for="fabricante">Fabricante:</label>
            <input type="text" name="fabricante" id="fabricante">
        </div>
        <button type="submit" class="btn btn-default">Adicionar</button>
    </form>

@endsection