<H1>Pagina de ItensEntrada</H1>

@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Codigo de ItensEntrada: {{$itensentrada->entrada_id}}</li>
    
</ul>
@endforeach