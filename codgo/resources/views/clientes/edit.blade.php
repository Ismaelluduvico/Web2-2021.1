@extends('layouts.main')

@section('titulo','pagina edição de cliente')

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
        <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post"> 
            @csrf
            @method('PUT')
            <h1><b>EDITAR CLIENTE</b></h1>
            <ul>
                <label for="">Nome do Cliente</label>
                <li><input type="text" name="nome" id="nome" value="{{$cliente->nome}}"></li>
                <label for="">Descrição do Cliente</label>
                <li><input type="text" name="descricao" id="descricao" value="{{$cliente->descricao}}"></li>
                <label for="">Debito do Cliente</label>
                <li><input type="text" name="debito" id="debito" value="{{$cliente->debito}}"></li>
                <div id="butao"><input type="submit" value="Alterar"></div>
            </ul>
        </form>
    </div>
@endsection('conteudo')