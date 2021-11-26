@extends('layouts.main')

@section('titulo', 'cadastro de itens entrada')


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
        <form action="{{route('itensentradas.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO ITEM ENTRADA</b></h1>
                <ul>
                    <label for="">Pre Compra:</label>
                    <li><input type="text" class="form-control @error('pre_cocompra') is-invalid @enderror" name="pre_cocompra" id="pre_cocompra">
                        @error('pre_cocompra')
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
                    <label for="">IPI:</label>
                    <li><input type="text" name="ipi" id="ipi"></li>
                    <label for="">Frete:</label>
                    <li><input type="text" class="form-control @error('frete') is-invalid @enderror" name="frete" id="frete">
                        @error('frete')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">ICMS:</label>
                    <li><input type="text" name="icms" id="icms"></li>
                    <label for="">Entrada_id:</label>
                    <li><input type="text" name="entrada_id" id="entrada_id"></li>
                    <label for="">Produto_id:</label>
                    <li><input type="text" name="produto_id" id="produto_id"></li>
                    <div id="butao"><input type="submit" value="Cadastrar"></div>
                </ul>
        </form>
    </div>
@endsection('conteudo')