@extends('layouts.main')

@section('titulo', 'cadastro de produtos')


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
        <form action="{{route('produtos.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO PRODUTO</b></h1>
                <ul>
                    <label for="">Nome do produto</label>
                    <li><input type="text" name="nome_produto" id="nome_produto"></li>
                    <label for="">Quantidade:</label>
                    <li><input type="text" name="quantidade" id="quantidade"></li>
                    <label for="">Data de vencimento:</label>
                    <li><input type="text" name="data_venciemtno" id="data_venciemtno"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')