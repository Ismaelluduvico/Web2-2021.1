<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ItensEntrada</title>
</head>
<body>
    <form action="storeitensentradas" method="post"> 
        @csrf
        <label for="">Codigo de ItensEntrada</label>
        <input type="text" name="entrada_id" id="entrada_id">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>