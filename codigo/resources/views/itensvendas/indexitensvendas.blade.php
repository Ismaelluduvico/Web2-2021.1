<h1>Essta é a Pagina de itens vendas</h1>

@foreach ($itensvendas as $itensvenda)
<ul>
    <li>Id Venda: {{$itensvenda->vendas_id}}</li>
    
</ul>
@endforeach