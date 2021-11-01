<h1>Essta é a Pagina de itens vendas</h1>

@foreach ($itensvendas as $itensvenda)
<ul>
    <li>Quantidade de itens: {{$itensvenda->quantidade_de_itens}}</li>
    <li>Valor da venda: {{$itensvenda->valor}}</li>
    <li>ID da venda: {{$itensvenda->venda_id}}</li>
    
</ul>
@endforeach