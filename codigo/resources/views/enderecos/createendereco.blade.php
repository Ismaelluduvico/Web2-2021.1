@extends('layouts.main')

@section('titulo', 'cadastro de enderecos')


@section('conteudo')
    <div id="create">
        <form action="{{route('enderecos.store')}}" method="post"> 
            @csrf
                <h1><b>NOVO ENDEREÇO</b></h1>
                <ul>
                    <label for="">Logradouro</label>
                    <li><input type="text" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro" id="logradouro">
                        @error('logradouro')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Bairro</label>
                    <li><input type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" id="bairro">
                        @error('bairro')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Cidade</label>
                    <li><input type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" id="cidade">
                        @error('cidade')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">UF</label>
                    <li><input type="text" class="form-control @error('uf') is-invalid @enderror" name="uf" id="uf">
                
                        @error('uf')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </li>
                    <label for="">Cliente_id</label>
                    <li><input type="text" class="form-control @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id">
                        @error('cliente_id')
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