<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de itemvenda</title>
</head>
<body>
    <form action="storeitensvendas" method="post"> 
        @csrf
        <label for="">Id venda</label>
        <input type="text" name="vendas_id" id="vendas_id">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>