@extends('layouts.default')

@section('content')
    <h1>Veículos</h1>
    <div class="container">
        <a href="{{ route('veiculos.create') }}" class="btn btn-info btn-sm">Novo</a>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Tipo do Veículo</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->nome }}</td>
                        <td>{{ $veiculo->marca }}</td>
                        <td>{{ $veiculo->id }}</td>
                        <td>{{ $veiculo->modelo }}</td>
                        <td>{{ $veiculo->ano }}</td>
                        <td>{{ $veiculo->cor }}</td>
                        <td>
                            <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $veiculo->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $veiculos->links() }}
    </div>
@endsection

@section('table-delete')
    "veiculos"
@endsection