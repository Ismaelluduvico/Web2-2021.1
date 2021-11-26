@extends('layouts.main')

@section('titulo', 'cadastro de vendas')


@section('conteudo')
    <div id="create">
        <form action="{{route('vendas.store')}}" method="post"> 
            @csrf
                <h1><b>NOVA VENDA</b></h1>
                <ul>
                    <label for="">Data da venda:</label>
                    <li><input type="text" class="form-control @error('data_venda') is-invalid @enderror" name="data_venda" id="data_venda">
                        @error('data_venda')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Valor total da venda:</label>
                    <li><input type="text" class="form-control @error('valor_total') is-invalid @enderror" name="valor_total" id="valor_total">
                        @error('valor_total')
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