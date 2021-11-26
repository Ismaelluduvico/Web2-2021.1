<h1>Pagina de consulta de Enderecos</h1>

@foreach ($enderecos as $endereco)
<ul>
    <li>Logradouro: {{$endereco->logradouro}}</li>
    <li>Bairro: {{$endereco->bairro}}</li>
    <li>Cidade: {{$endereco->cidade}}</li>
    <li>UF: {{$endereco->uf}}</li>
    <li>Cliente_id: {{$endereco->cliente_id}}</li>
</ul>
@endforeach