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
                <li><input type="text" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro" id="logradouro" value="{{$endereco->logradouro}}">
                    @error('logradouro')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">Bairro</label>
                <li><input type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" id="bairro" value="{{$endereco->bairro}}">
                    @error('bairro')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">Cidade</label>
                <li><input type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" id="cidade" value="{{$endereco->cidade}}">
                    @error('cidade')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">UF</label>
                <li><input type="text" class="form-control @error('uf') is-invalid @enderror" name="uf" id="uf" value="{{$endereco->uf}}">
                    @error('uf')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">Cidade</label>
                <li><input type="text" class="form-control @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id" value="{{$endereco->cliente_id}}">
                    @error('cliente_id')
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