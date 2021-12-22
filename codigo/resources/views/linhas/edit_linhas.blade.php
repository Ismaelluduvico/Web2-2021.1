@extends('layouts.main')

@section('titulo', 'editar linha')

@section('conteudo')
    <h1>Editar Linha</h1>
    <div id="adicionar">
        <ul>
            <label for="">Linha</label>
            <li><input type="text" name="linha" id="linha"></li>

            <label for="">Codígo</label>
            <li><input type="text" name="codigo" id="codigo"></li>

            <div id="butao">
                <a href="">Cancelar</a> 
                <input type="submit" value="Registrar">
            </div>
        </ul>
    </div>
@endsection('conteudo')