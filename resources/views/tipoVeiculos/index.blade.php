@extends('layouts.default')

@section('content')
    <h1>Tipo de Veículos</h1>
    <div class="container">
        <a href="{{ route('tipoVeiculos.create') }}" class="btn btn-info btn-sm">Novo</a>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Bateria</th>
                    <th>Alternador</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tipoVeiculos as $tipoVeiculo)
                    <tr>
                        <td>{{ $tipoVeiculo->nome }}</td>
                        <td>{{ $tipoVeiculo->bateria }}</td>
                        <td>{{ $tipoVeiculo->alternador }}</td>
                        <td>
                            <a href="{{ route('tipoVeiculos.edit', $tipoVeiculo->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $tipoVeiculo->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $tipoVeiculos->links() }}
    </div>
@endsection

@section('table-delete')
    "tipoVeiculos"
@endsection