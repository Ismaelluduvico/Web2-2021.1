@extends('layouts.main')

@section('titulo','pagina edição de cliente')

        <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post"> 
            @csrf
            @method('PUT')
            <h1><b>EDITAR CLIENTE</b></h1>
            <ul>
                <label for="">Nome do Cliente</label>
                <li><input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" id="nome" value="{{$cliente->nome}}">
                    @error('nome')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">Descrição do Cliente</label>
                <li><input type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" id="descricao" value="{{$cliente->descricao}}">
                    @error('descricao')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">Debito do Cliente</label>
                <li><input type="text" class="form-control @error('debito') is-invalid @enderror" name="debito" id="debito" value="{{$cliente->debito}}">
                    @error('debito')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <div id="butao"><input type="submit" value="Alterar"></div>
            </ul>
        </form>
    </div>
@endsection('conteudo')