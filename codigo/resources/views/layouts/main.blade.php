<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/css_telas_create.css');}}">
    <link rel="stylesheet" href="{{ URL::asset('css/css_list.css');}}">
    <title>@yield('titulo')</title>
</head>
<body>
    <div id="conteiner">
        <header class="header">
            <div id="logo"><a href="/"><strong>ESQUADRITEC</strong></a></div>
                <nav class="nav">   
                    <ul class="menu">
                        <li><a href=""><b>Cliente</b></a></li>
                        <li><a href=""><b>Funcionário</b></a></li>
                        <li><a href=""><b>Linha</b></a></li>
                        <li><a href=""><b>Material</b></a></li>
                        <li><a href=""><b>Modelo</b></a></li>
                        <li><a href=""><b>Orçamento</b></a></li>
                    </ul>
                </nav>
            <div
             id="logo"><a href=""><strong><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg></strong></a></div>
        </header>
        <div id="conteudo">
            @yield('conteudo')
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>