@extends('layouts.main')

@section('titulo', 'cadastro de clientes')


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


        <form action="{{route('clientes.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO CLIENTE</b></h1>
                <ul>
                    <label for="">Nome do Cliente</label>
                    <li><input type="text" name="nome" id="nome"></li>
                    <label for="">Descrição do Cliente</label>
                    <li><input type="text" name="descricao" id="descricao"></li>
                    <label for="">Debito do Cliente</label>
                    <li><input type="text" name="debito" id="debito"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')