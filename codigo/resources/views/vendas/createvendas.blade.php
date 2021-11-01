<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
</head>
<body>
    <form action="{{route('vendas.store')}}" method="post"> 
        @csrf
        <label for="">Data da venda:</label>
        <input type="text" name="data_venda" id="data_venda">
        <label for="">Valor total da venda:</label>
        <input type="text" name="valor_total" id="valor_total">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>