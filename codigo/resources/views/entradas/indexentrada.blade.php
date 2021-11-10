@extends('layouts.main')

@section('titulo','todas as entradas')

@section('conteudo')
    <div id="ezibi">
        <h1><b>Todos as entradas</b></h1>
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <div id="cabeca">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Valor total da nota</th>
                    <th scope="col">Data da entrada</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entrada as $_entrada)
                <tr>
                    <td>{{$_entrada->valor_total_da_nota}}</td>
                    <td>{{$_entrada->data_entrada}}</td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('conteudo')