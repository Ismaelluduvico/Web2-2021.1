<H1>Pagina de Venda</H1>

@foreach ($vendas as $venda)
<ul>
    <li>Data da venda: {{$venda->data_venda}}</li>
    <li>valor total da venda: {{$venda->valor_total}}</li>
    
</ul>
@endforeach