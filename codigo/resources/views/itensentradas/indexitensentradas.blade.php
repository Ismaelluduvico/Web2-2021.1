<H1>Pagina de ItensEntrada</H1>

@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Pre Compra:: {{$itensentrada->pre_cocompra}}</li>
    <li>Quantidade: {{$itensentrada->quantidade}}</li>
    <li>IPI: {{$itensentrada->ipi}}</li>
    <li>Frete: {{$itensentrada->frete}}</li>
    <li>ICMS: {{$itensentrada->icms}}</li>
    <li>Entrada_id: {{$itensentrada->entrada_id}}</li>
    <li>Produto_id: {{$itensentrada->produto_id}}</li>
    
</ul>
@endforeach