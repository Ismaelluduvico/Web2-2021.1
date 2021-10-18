<H1>Pagina de clientes</H1>

@foreach ($clientes as $cliente)
<ul>
    <li>nome do cliente: {{$cliente->nome}}</li>
    <li>endereco do cliente: {{$cliente->endereco}}</li>
    <li>debito: {{$cliente->debito}}</li>
</ul>
@endforeach