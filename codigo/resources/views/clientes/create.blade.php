@extends('layouts.main')

@section('titulo', 'cadastro de clientes')


@section('conteudo')
    <div id="create">

        <form action="{{route('clientes.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO CLIENTE</b></h1>
                <ul>
                    <label for="">Nome do Cliente</label>
                    <li><input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome">
                        @error('nome')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Descrição do Cliente</label>
                    <li><input type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" id="descricao">
                        @error('descricao')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Debito do Cliente</label>
                    <li><input type="text" class="form-control @error('debito') is-invalid @enderror" name="debito" id="debito">
                    @error('debito')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')