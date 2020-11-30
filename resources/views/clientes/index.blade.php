@extends('layouts.default')

@section('content')
    <h1>Clientes</h1>
    <div class="container">
        <a href="{{ route('clientes.create') }}" class="btn btn-info btn-sm">Novo</a>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Cidade</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->rg }}</td>
                        <td>{{ $cliente->cidade->nome }}</td>
                        <td>{{ $cliente->cep }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->bairro }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->email }}</td>                        
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $cliente->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $clientes->links() }}
    </div>
@endsection

@section('table-delete')
    "clientes"
@endsection
