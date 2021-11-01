<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de entradas</title>
</head>
<body>
    <form action="{{route('entradas.store')}}" method="post"> 
        @csrf
        <label for="">Valor total da nota:</label>
        <input type="text" name="valor_total_da_nota" id="valor_total_da_nota">
        <label for="">Data da entrada:</label>
        <input type="text" name="data_entrada" id="data_entrada">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>