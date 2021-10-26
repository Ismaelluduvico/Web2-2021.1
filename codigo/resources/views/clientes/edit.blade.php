<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edição de clientes</title>
</head>
<body>
    <form action="../update/{{$cliente->id}}" method="post"> 
        @csrf
        @method('PUT')
        <label for="">Nome Clientes</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        <label for="">Endereço Clientes</label>
        <input type="text" name="descricao" id="descricao" value="{{$cliente->descricao}}">
        <label for="">Debito Clientes</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
        <input type="submit" value="Alterar">
    </form>
</body>
</html>