@extends('layouts.main')

@section('titulo', 'editar orcamento')

@section('conteudo')
    <h1>Editar Orçamento</h1>
    <div id="adicionar">
        <ul>
            <label for="">Cliente</label>
            <li><input type="text" name="cliente" id="cliente"></li>

            <label for="">Obiservações</label>
            <li><input type="text" name="observacoes" id="observacoes"></li>

            <div id="butao">
                <a href="">Cancelar</a> 
                <input type="submit" value="Seguir">
            </div>
        </ul>
    </div>
@endsection('conteudo')