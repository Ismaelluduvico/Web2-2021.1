@extends('layouts.main')

@section('titulo', 'cadastro de fornecedores')


@section('conteudo')
    <div id="create">
        <form action="{{route('fornecedores.create')}}" method="post"> 
            @csrf
                <h1><b>NOVO FORNECEDOR</b></h1>
                <ul>
                    <label for="">Nome Fornecedor</label>
                    <li><input type="text" name="nomeFornecedor" id="nomeFornecedor"></li>
                    <label for="">Descrição Fornecedor</label>
                    <li><input type="text" name="descricaoFornecedor" id="descricaoFornecedor"></li>
                    <label for="">Telefone Fornecedor</label>
                    <li><input type="text" name="telefoneFornecedor" id="telefoneFornecedor"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')