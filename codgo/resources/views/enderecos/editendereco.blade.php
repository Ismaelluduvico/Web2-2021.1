@extends('layouts.main')

@section('titulo','pagina edição de enderecos')

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
        <form action="{{route('clientes.update', ['id' => $endereco->id])}}" method="post"> 
            @csrf
            @method('PUT')
            <h1><b>EDITAR ENDEREÇO</b></h1>
            <ul>
                <label for="">Logradouro</label>
                <li><input type="text" name="logradouro" id="logradouro" value="{{$endereco->logradouro}}"></li>
                <label for="">Bairro</label>
                <li><input type="text" name="bairro" id="bairro" value="{{$endereco->bairro}}"></li>
                <label for="">Cidade</label>
                <li><input type="text" name="cidade" id="cidade" value="{{$endereco->cidade}}"></li>
                <label for="">UF</label>
                <li><input type="text" name="uf" id="uf" value="{{$endereco->uf}}"></li>
                <label for="">Cidade</label>
                <li><input type="text" name="cliente_id" id="cliente_id" value="{{$endereco->cliente_id}}"></li>
                <div id="butao"><input type="submit" value="Alterar"></div>
            </ul>
        </form>
    </div>
@endsection('conteudo')