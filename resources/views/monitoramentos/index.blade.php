@extends('layouts.default')

@section('content')
    <h1>Monitoramentos</h1>
    <div class="container">
        <a href="{{ route('monitoramentos.create') }}" class="btn btn-info btn-sm">Novo</a>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Veículo</th>
                    <th>Bateria</th>
                    <th>Alternador</th>
                    <th>Hora</th>
                    
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($monitoramentos as $monitoramento)
                    <tr>
                        <td>{{ $monitoramento->id }}</td>
                        <td>{{ $monitoramento->veiculo->nome }}</td>
                        <td>{{ $monitoramento->voltBateria }}</td>
                        <td>{{ $monitoramento->voltAlternador }}</td>
                        <td>{{ $monitoramento->dataHora }}</td>
                        <td>
                            <a href="{{ route('monitoramentos.edit', $monitoramento->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $monitoramento->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $monitoramentos->links() }}
    </div>
@endsection

@section('table-delete')
    "monitoramentos"
@endsection