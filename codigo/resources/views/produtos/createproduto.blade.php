@extends('layouts.main')

@section('titulo', 'cadastro de produtos')


@section('conteudo')
    <div id="create">
        <form action="{{route('produtos.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO PRODUTO</b></h1>
                <ul>
                    <label for="">Nome do produto</label>
                    <li><input type="text" class="form-control @error('nome_produto') is-invalid @enderror" name="nome_produto" id="nome_produto">
                        @error('nome_produto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Quantidade:</label>
                    <li><input type="text" class="form-control @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade">
                        @error('quantidade')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Data de vencimento:</label>
                    <li><input type="text" class="form-control @error('data_venciemtno') is-invalid @enderror" name="data_venciemtno" id="data_venciemtno">
                        @error('data_venciemtno')
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