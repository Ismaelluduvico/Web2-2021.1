<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fornecedor</title>
</head>
<body>
    <form action="../updatefornecedor/{{$fornecedor->id}}" method="post"> 
        @csrf
        @method('PUT')
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nomeFornecedor" id="nomeFornecedor" value="{{$fornecedor->nomeFornecedor}}">
        <label for="">Descrição Fornecedor</label>
        <input type="text" name="descricaoFornecedor" id="descricaoFornecedor" value="{{$fornecedor->descricaoFornecedor}}">
        <label for="">Telefone Fornecedor</label>
        <input type="text" name="telefoneFornecedor" id="telefoneFornecedor" value="{{$fornecedor->telefoneFornecedor}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>