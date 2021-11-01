<H1>Pagina de De entradas</H1>

@foreach ($entrada as $_entrada)
<ul>
    <li>Valor Total da nota: {{$_entrada->valor_total_da_nota}}</li>
    <li>Data da entrada: {{$_entrada->data_entrada}}</li>
    
</ul>
@endforeach