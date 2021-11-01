<H1>Pagina de fornecedores</H1>

@foreach ($fornecedor as $_fornecedor)
<ul>
    <li>Nome do Fornecedor: {{$_fornecedor->nomeFornecedor}}</li>
    <li>Descrição do Fornecedor: {{$_fornecedor->descricaoFornecedor}}</li>
    <li>Telefone: {{$_fornecedor->telefoneFornecedor}}</li>
    <li><a href="{{route('fornecedores.edit', ['id' => $_fornecedor->id])}}">editar fornecedo</a></li>

    <form action="{{route('clientes.delete', ['id' => $_fornecedor->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Deletar">
    </form>
</ul>
@endforeach