<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <form action="store" method="post"> 
        @csrf
        <label for="">Nome Clientes</label>
        <input type="text" name="nome" id="nome">
        <label for="">Endereço Clientes</label>
        <input type="text" name="endereco" id="endereco">
        <label for="">Debito Clientes</label>
        <input type="text" name="debito" id="debito">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>