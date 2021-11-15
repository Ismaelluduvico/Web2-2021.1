@extends('layouts.main')

@section('titulo','pagina prinscipal de itens entrada')

@section('conteudo')
    <div id="ezibi">
        <h1><b>Itens Entrada</b></h1>
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <div id="cabeca">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">pré compra</th>
                    <th scope="col">quantidade</th>
                    <th scope="col">ipi</th>
                    <th scope="col">Frete</th>
                    <th scope="col">ICMS</th>
                    <th scope="col">Entrada ID</th>
                    <th scope="col">Produto ID</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itensentradas as $itensentrada)
                <tr>
                    <td>{{$itensentrada->id}}</td>
                    <td>{{$itensentrada->pre_cocompra}}</td>
                    <td>{{$itensentrada->quantidade}}</td>
                    <td>{{$itensentrada->ipi}}</td>
                    <td>{{$itensentrada->frete}}</td>
                    <td>{{$itensentrada->icms}}</td>
                    <td>{{$itensentrada->entrada_id}}</td>
                    <td>{{$itensentrada->produto_id}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('conteudo')