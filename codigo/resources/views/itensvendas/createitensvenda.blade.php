<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de itemvenda</title>
</head>
<body>
    <form action="{{route('itensvendas.store')}}" method="post"> 
        @csrf
        <label for="">Quantidade de itens</label>
        <input type="text" name="quantidade_de_itens" id="quantidade_de_itens">
        <label for="">Valor</label>
        <input type="text" name="valor" id="valor">
        <label for="">ID da Venda</label>
        <input type="text" name="venda_id" id="venda_id">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>