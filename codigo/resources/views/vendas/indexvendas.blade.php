<H1>Pagina de Venda</H1>

@foreach ($vendas as $venda)
<ul>
    <li>Quantidade vendas: {{$venda->quantvendas}}</li>
    
</ul>
@endforeach