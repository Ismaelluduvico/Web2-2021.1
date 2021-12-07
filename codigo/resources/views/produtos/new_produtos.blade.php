@extends('layouts.main')

@section('titulo', 'adicionar orcamento')

@section('conteudo')
    <h1>Novo Orçamento</h1>
    <div id="adicionar">
        <ul>
            <label for="">Produto</label>
            <li><input type="text" name="produto" id="produto"></li>

            <label for="">modelo</label>
            <li><input type="text" name="modelo" id="modelo"></li>

            <label for="">linha</label>
            <li><input type="text" name="linha" id="linha"></li>

            <div id="mterial">
                <a href="">+ MATERIAL</a>
            </div>

            <div id="butao">
                <a href="">Cancelar</a> 
                <input type="submit" value="Seguir">
            </div>
        </ul>
    </div>
@endsection('conteudo')