@extends('layouts.default')

@section('content')
    <h1>Anomalias</h1>
    <div class="container">
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Monitoramento</th>
                    <th>Tipo de Anomalia</th>
                    <th>Veiculo</th>
                    <th>Bateria</th>
                    <th>Alternador</th>
                </tr>
            </thead>
            <tbody>
                @forelse($anomalias as $anomalia)
                    <tr>
                        <td>{{ $anomalia->id }}</td>
                        <td>{{ $anomalia->monitoramento->id }}</td>
                        <td>{{ $anomalia->veiculo->nome }}</td>
                        <td>{{ $anomalia->tipoAnamolia->descricao }}</td>
                        <td>{{ $anomalia->avariaBateria }}</td>
                        <td>{{ $anomalia->avariAlternador }}</td>
                        <td>
                            <a href="{{ route('anomalias.edit', $anomalia->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $anomalia->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $anomalias->links() }}
    </div>
@endsection

@section('table-delete')
    "anomalias"
@endsection
