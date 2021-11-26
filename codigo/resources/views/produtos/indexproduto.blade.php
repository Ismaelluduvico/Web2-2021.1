@extends('layouts.main')

@section('titulo','pagina prinscipal de produtos')

@section('conteudo')
    <div id="ezibi">
        <h1><b>Todos os Produtos</b></h1>
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <div id="cabeca">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data de vencimento</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome_produto}}</td>
                    <td>{{$produto->quantidade}}</td>
                    <td>{{$produto->data_venciemtno}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('conteudo')