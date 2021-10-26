<H1>Pagina de Venda</H1>

@foreach ($produtos as $produto)
<ul>
    <li>Nome do Produto: {{$produto->nome_produto}}</li>
    <li>Nome do Produto: {{$produto->codigo_produto}}</li>
    
</ul>
@endforeach