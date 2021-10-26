<h1>Pagina de consulta de clientes</h1>

@foreach ($clientes as $cliente)
<ul>
    <li>nome do cliente: {{$cliente->nome}}</li>
    <li>descricao do cliente: {{$cliente->descricao}}</li>
    <li>debito: {{$cliente->debito}}</li>
</ul>
@endforeach