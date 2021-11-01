<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ItensEntrada</title>
</head>
<body>
    <form action="{{route('itensentradas.store')}}" method="post"> 
        @csrf
        <label for="">Pre Compra:</label>
        <input type="text" name="pre_cocompra" id="pre_cocompra">
        <label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="">IPI:</label>
        <input type="text" name="ipi" id="ipi">
        <label for="">Frete:</label>
        <input type="text" name="frete" id="frete">
        <label for="">ICMS:</label>
        <input type="text" name="icms" id="icms">
        <label for="">Entrada_id:</label>
        <input type="text" name="entrada_id" id="entrada_id">
        <label for="">Produto_id:</label>
        <input type="text" name="produto_id" id="produto_id">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>