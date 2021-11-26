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
                <li><input type="text" class="form-control @error('nomeFornecedor') is-invalid @enderror"  name="nomeFornecedor" id="nomeFornecedor" value="{{$fornecedor->nomeFornecedor}}">
                    @error('nomeFornecedor')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">Descrição Fornecedor</label>
                <li><input type="text" class="form-control @error('descricaoFornecedor') is-invalid @enderror" name="descricaoFornecedor" id="descricaoFornecedor" value="{{$fornecedor->descricaoFornecedor}}">
                    @error('descricaoFornecedor')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </li>
                <label for="">Telefone Fornecedor</label>
                <li><input type="text" class="form-control @error('telefoneFornecedor') is-invalid @enderror" name="telefoneFornecedor" id="telefoneFornecedor" value="{{$fornecedor->telefoneFornecedor}}">
                    @error('telefoneFornecedor')
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