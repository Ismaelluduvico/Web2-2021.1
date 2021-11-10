@extends('layouts.main')

@section('titulo', 'adicionar nova entrada')


@section('conteudo')
    <div id="create">
        <form action="{{route('entradas.store')}}" method="post"> 
            @csrf
                <h1><b>NOVA ENTRADA</b></h1>
                <ul>
                    <label for="">Valor total da nota:</label>
                    <li><input type="text" name="valor_total_da_nota" id="valor_total_da_nota"></li>
                    <label for="">Data da entrada:</label>
                    <li><input type="text" name="data_entrada" id="data_entrada"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')