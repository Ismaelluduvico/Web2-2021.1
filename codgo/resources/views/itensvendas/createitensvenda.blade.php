@extends('layouts.main')

@section('titulo', 'cadastro de itens vendas')


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
        <form action="{{route('itensvendas.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO ITEM VENDA</b></h1>
                <ul>
                    <label for="">Quantidade de itens</label>
                    <li><input type="text" name="quantidade_de_itens" id="quantidade_de_itens"></li>
                    <label for="">Valor</label>
                    <li><input type="text" name="valor" id="valor"></li>
                    <label for="">ID da Venda</label>
                    <li><input type="text" name="venda_id" id="venda_id"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>    
        </form>
    </div>
@endsection('conteudo')