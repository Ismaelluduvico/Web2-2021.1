<H1>Pagina de Venda</H1>

@foreach ($produtos as $produto)
<ul>
    <li>Nome do Produto: {{$produto->nome_produto}}</li>
    <li>Quantidade: {{$produto->quantidade}}</li>
    <li>Data de vencimento: {{$produto->data_venciemtno}}</li>
    
</ul>
@endforeach