@extends('layouts.default')

@section('content')
    <h1>Cidades</h1>
    <div class="container">
        <a href="{{ route('cidades.create') }}" class="btn btn-info btn-sm">Novo</a>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>UF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cidades as $cidade)
                    <tr>
                        <td>{{ $cidade->nome }}</td>
                        <td>{{ $cidade->uf }}</td>
                        <td>
                            <a href="{{ route('cidades.edit', $cidade->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $cidade->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $cidades->links() }}
    </div>
@endsection

@section('table-delete')
    "cidades"
@endsection
