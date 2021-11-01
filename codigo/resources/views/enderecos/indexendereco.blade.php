<H1>Pagina de Endereços</H1>

@foreach ($enderecos as $endereco)
<ul>
    <li>Logradouro: {{$endereco->logradouro}}</li>
    <li>Bairro: {{$endereco->bairro}}</li>
    <li>Cidade: {{$endereco->cidade}}</li>
    <li>UF: {{$endereco->uf}}</li>
    <li>Cliente_id: {{$endereco->cliente_id}}</li>
    <li><a href="{{route('enderecos.edit', ['id' => $endereco->id])}}">editar cliente</a></li>

    <form action="{{route('enderecos.delete', ['id' => $endereco->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar">
    </form>
</ul>
@endforeach