<h1>Pagina de consulta de fornecedor</h1>

@foreach ($fornecedor as $_fornecedor)
<ul>
    <li>Nome do Fornecedor: {{$_fornecedor->nomeFornecedor}}</li>
    <li>Descrição do Fornecedor: {{$_fornecedor->descricaoFornecedor}}</li>
    <li>Telefone: {{$_fornecedor->telefoneFornecedor}}</li>
</ul>
@endforeach