@extends('layouts.main')

@section('titulo', 'cadastro de enderecos')


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
        <form action="{{route('enderecos.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO CLIENTE</b></h1>
                <ul>
                    <label for="">Logradouro</label>
                    <li><input type="text" name="logradouro" id="logradouro"></li>
                    <label for="">Bairro</label>
                    <li><input type="text" name="bairro" id="bairro"></li>
                    <label for="">Cidade</label>
                    <li><input type="text" name="cidade" id="cidade"></li>
                    <label for="">UF</label>
                    <li><input type="text" name="uf" id="uf"></li>
                    <label for="">Cliente_id</label>
                    <li><input type="text" name="cliente_id" id="cliente_id"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')