@extends('layouts.main')

@section('titulo', 'cadastro de fornecedores')


@section('conteudo')
    <div id="create">
        <form action="{{route('fornecedores.create')}}" method="post"> 
            @csrf
                <h1><b>NOVO FORNECEDOR</b></h1>
                <ul>
                    <label for="">Nome Fornecedor</label>
                    <li><input type="text" class="form-control @error('nomeFornecedor') is-invalid @enderror" name="nomeFornecedor" id="nomeFornecedor">
                        @error('nomeFornecedor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Descrição Fornecedor</label>
                    <li><input type="text" class="form-control @error('descricaoFornecedor') is-invalid @enderror" name="descricaoFornecedor" id="descricaoFornecedor">
                        @error('descricaoFornecedor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Telefone Fornecedor</label>
                    <li><input type="text" class="form-control @error('telefoneFornecedor') is-invalid @enderror" name="telefoneFornecedor" id="telefoneFornecedor">
                        @error('telefoneFornecedor')
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