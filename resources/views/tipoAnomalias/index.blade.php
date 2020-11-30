@extends('layouts.default')

@section('content')
    <h1>Tipos de Anomalias</h1>
    <div class="container">
        <a href="{{ route('tipoanomalias.create') }}" class="btn btn-info btn-sm">Novo</a>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Laudo</th>
                    <th>Solucao</th>                    
                    <th>Ações</th>  
                </tr>
            </thead>
            <tbody>
                @forelse($tipoanomalias as $tipoanomalia)
                    <tr>
                        <td>{{ $tipoanomalia->id }}</td>
                        <td>{{ $tipoanomalia->laudo }}</td>
                        <td>{{ $tipoanomalia->solucao }}</td>
                        <td>
                            <a href="{{ route('tipoanomalias.edit', $tipoanomalia->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $tipoanomalia->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $tipoanomalias->links() }}
    </div>
@endsection

@section('table-delete')
    "tipoanomalias"
@endsection
