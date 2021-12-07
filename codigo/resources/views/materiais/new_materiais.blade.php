@extends('layouts.main')

@section('titulo', 'adicionar material')

@section('conteudo')
    <h1>Novo Material</h1>
    <div id="adicionar">
        <ul>
            <label for="">Material</label>
            <li><input type="text" name="material" id="material"></li>

            <label for="">Valor</label>
            <li><input type="text" name="valor" id="valor"></li>

            <label for="">Código</label>
            <li><input type="text" name="codigo" id="codigo"></li>

            <label for="">Unidade de Medida</label>
            <li><input type="text" name="unidade_de_medida" id="unidade_de_medida"></li>

            <div id="butao">
                <a href="">Cancelar</a> 
                <input type="submit" value="Registrar">
            </div>
        </ul>
    </div>
@endsection('conteudo')