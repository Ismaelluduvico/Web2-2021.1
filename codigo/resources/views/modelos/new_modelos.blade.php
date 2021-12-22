@extends('layouts.main')

@section('titulo', 'adicionar modelo')

@section('conteudo')
    <h1>Novo Modelo</h1>
    <div id="adicionar">
        <ul>
            <label for="">Modelo</label>
            <li><input type="text" name="modelo" id="modelo"></li>

            <div id="butao">
                <a href="">Cancelar</a> 
                <input type="submit" value="Registrar">
            </div>
        </ul>
    </div>
@endsection('conteudo')