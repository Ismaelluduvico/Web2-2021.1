@extends('layouts.main')

@section('titulo','pagina edição de fornecedores')

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
        <form action="{{route('fornecedores.update', ['id' => $fornecedor->id])}}" method="post"> 
            @csrf
            @method('PUT')
            <h1><b>EDITAR FORNECEDOR</b></h1>
            <ul>
                <label for="">Nome Fornecedor</label>
                <li><input type="text" name="nomeFornecedor" id="nomeFornecedor" value="{{$fornecedor->nomeFornecedor}}"></li>
                <label for="">Descrição Fornecedor</label>
                <li><input type="text" name="descricaoFornecedor" id="descricaoFornecedor" value="{{$fornecedor->descricaoFornecedor}}"></li>
                <label for="">Telefone Fornecedor</label>
                <li><input type="text" name="telefoneFornecedor" id="telefoneFornecedor" value="{{$fornecedor->telefoneFornecedor}}"></li>
                <div id="butao"><input type="submit" value="Alterar"></div>
            </ul>
        </form>
    </div>
@endsection('conteudo')