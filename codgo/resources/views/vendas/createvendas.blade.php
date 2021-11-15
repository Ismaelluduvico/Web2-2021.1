@extends('layouts.main')

@section('titulo', 'cadastro de vendas')


@section('conteudo')
    <div id="create">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('vendas.store')}}" method="post"> 
            @csrf
                <h1><b>NOVA VENDA</b></h1>
                <ul>
                    <label for="">Data da venda:</label>
                    <li><input type="text" name="data_venda" id="data_venda"></li>
                    <label for="">Valor total da venda:</label>
                    <li><input type="text" name="valor_total" id="valor_total"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')