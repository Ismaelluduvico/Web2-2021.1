@extends('layouts.main')

@section('titulo','pagina prinscipal de item venda')

@section('conteudo')
    <div id="ezibi">
        <h1><b>Todos os itens entrada</b></h1>
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <div id="cabeca">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Quantidade de Itens</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Venda ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itensvendas as $itensvenda)
                <tr>
                    <td>{{$itensvenda->id}}</td>
                    <td>{{$itensvenda->quantidade_de_itens}}</td>
                    <td>{{$itensvenda->valor}}</td>
                    <td>{{$itensvenda->venda_id}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('conteudo')