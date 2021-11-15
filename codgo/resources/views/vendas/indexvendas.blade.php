@extends('layouts.main')

@section('titulo','pagina prinscipal de clientes')

@section('conteudo')
    <div id="ezibi">
        <h1><b>Todos os clientes</b></h1>
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <div id="cabeca">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data da Venda</th>
                    <th scope="col">Valor Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendas as $venda)
                <tr>
                    <td>{{$venda->id}}</td>
                    <td>{{$venda->data_venda}}</td>
                    <td>{{$venda->valor_total}}</td>      
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('conteudo')