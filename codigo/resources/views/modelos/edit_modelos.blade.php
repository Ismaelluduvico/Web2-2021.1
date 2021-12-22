@extends('layouts.main')

@section('titulo', 'editar modelo')

@section('conteudo')
    <h1>Editar Modelo</h1>
    <div id="adicionar">
        <ul>
            <label for="">Modelo</label>
            <li><input type="text" name="modelo" id="modelo"></li>

            <div id="butao">
                <a href="">Cancelar</a> 
                <input type="submit" value="Salvar">
            </div>
        </ul>
    </div>
@endsection('conteudo')