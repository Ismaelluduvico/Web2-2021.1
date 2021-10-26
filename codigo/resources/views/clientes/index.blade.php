<H1>Pagina de clientes</H1>

@foreach ($clientes as $cliente)
<ul>
    <li>nome do cliente: {{$cliente->nome}}</li>
    <li>descricao do cliente: {{$cliente->descricao}}</li>
    <li>debito: {{$cliente->debito}}</li>
    <li><a href="edit/{{$cliente->id}}">editar cliente</a></li>

    <form action="../clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar">
    </form>

    
</ul>
@endforeach