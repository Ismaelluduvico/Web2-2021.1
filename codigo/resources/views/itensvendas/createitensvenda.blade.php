@extends('layouts.main')

@section('titulo', 'cadastro de itens vendas')


@section('conteudo')
    <div id="create">
       
        <form action="{{route('itensvendas.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO ITEM VENDA</b></h1>
                <ul>
                    <label for="">Quantidade de itens</label>
                    <li><input type="text" class="form-control @error('quantidade_de_itens') is-invalid @enderror" name="quantidade_de_itens" id="quantidade_de_itens">
                        @error('quantidade_de_itens')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Valor</label>
                    <li><input type="text" class="form-control @error('valor') is-invalid @enderror" name="valor" id="valor">
                        @error('valor')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">ID da Venda</label>
                    <li><input type="text" class="form-control @error('venda_id') is-invalid @enderror" name="venda_id" id="venda_id">
                        @error('venda_id')
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