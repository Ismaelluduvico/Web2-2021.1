<H1>Pagina de fornecedores</H1>

@foreach ($fornecedor as $_fornecedor)
<ul>
    <li>Nome do Fornecedor: {{$_fornecedor->nomeFornecedor}}</li>
    <li>Endereco do Fornecedor: {{$_fornecedor->enderecoFornecedor}}</li>
    <li>Telefone: {{$_fornecedor->telefoneFornecedor}}</li>
</ul>
@endforeach