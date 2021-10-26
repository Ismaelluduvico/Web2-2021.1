<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
</head>
<body>
    <form action="storefornecedor" method="post"> 
        @csrf
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nomeFornecedor" id="nomeFornecedor">
        <label for="">Descrição Fornecedor</label>
        <input type="text" name="descricaoFornecedor" id="descricaoFornecedor">
        <label for="">Telefone Fornecedor</label>
        <input type="text" name="telefoneFornecedor" id="telefoneFornecedor">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>