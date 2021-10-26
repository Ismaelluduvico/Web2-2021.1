<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
</head>
<body>
    <form action="storevendas" method="post"> 
        @csrf
        <label for="">Quantidade vendida</label>
        <input type="text" name="quantvendas" id="quantvendas">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>