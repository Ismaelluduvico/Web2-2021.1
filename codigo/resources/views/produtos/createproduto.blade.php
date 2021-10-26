<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form action="storeproduto" method="post"> 
        @csrf
        <label for="">Nome do produto</label>
        <input type="text" name="nome_produto" id="nome_produto">
        <label for="">Codigo de barras do produto</label>
        <input type="text" name="codigo_produto" id="codigo_produto">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>