@extends('layouts.main')

@section('titulo', 'adicionar cliente')

@section('conteudo')
    <h1>Novo Cliente</h1>
    <div id="adicionar">
        <ul>
            <label for="">Nome</label>
            <li><input type="text" name="nome" id="nome"></li>

            <label for="">CPF</label>
            <li><input type="text" name="cpf" id="cpf"></li>

            <label for="">CNPJ</label>
            <li><input type="text" name="cnpj" id="cnpj"></li>

            <label for="">E-mail</label>
            <li><input type="text" name="e-mail" id="e-mail"></li>

            <label for="">Telefone</label>
            <li><input type="text" name="telefone" id="telefone"></li>
            <h2>Endereço</h2>
        <label for="">Cidade</label>
            <li><input type="text" name="cidade" id="cidade"></li>

            <label for="">Bairro</label>
            <li><input type="text" name="bairro" id="bairro"></li>

            <label for="">Rua</label>
            <li><input type="text" name="rua" id="rua"></li>

            <label for="">Número</label>
            <li><input type="text" name="e-mail" id="e-mail"></li>

            <label for="">Observação</label>
            <li><input type="text" name="observacao" id="observacao"></li>
            <div id="butao">
                <a href="">Cancelar</a> 
                <input type="submit" value="Registrar">
            </div>
        </ul>
    </div>
@endsection('conteudo')