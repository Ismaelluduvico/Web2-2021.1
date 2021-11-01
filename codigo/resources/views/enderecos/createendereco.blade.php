<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Endereços</title>
</head>
<body>
    <form action="{{route('enderecos.store')}}" method="post"> 
        @csrf
        <label for="">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro">
        <label for="">Bairro</label>
        <input type="text" name="bairro" id="bairro">
        <label for="">Cidade</label>
        <input type="text" name="cidade" id="cidade">
        <label for="">UF</label>
        <input type="text" name="uf" id="uf">
        <label for="">Cliente_id</label>
        <input type="text" name="cliente_id" id="cliente_id">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>