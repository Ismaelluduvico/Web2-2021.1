<H1>Pagina de De entradas</H1>

@foreach ($entrada as $_entrada)
<ul>
    <li>Quantidade: {{$_entrada->quantentradas}}</li>
    
</ul>
@endforeach