@extends('layouts.default')

@section('content')
    <h1>Monitoramentos</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'monitoramentos']) !!}
        <div class="sidebar-form">
            <div class="input-group" >
                <input type="text" name="desc_filtro" class="form-control" style="width: 80% !important" placeholder="Pesquisa..." >
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    {!! Form::close() !!}    
        <br>

         
    <div class="container-fluid">
        <a href="{{ route('monitoramentos.create') }}" class="btn btn-primary btn-lg">Adicionar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Veículo</th>
                    <th>Bateria</th>
                    <th>Alternador</th>
                    <th>Data - Hora</th>
                </tr>
            </thead>
            <tbody>
                @forelse($monitoramentos as $monitoramento)
                    <tr>
                        <td>{{ $monitoramento->id }}</td>
                        <td>{{ $monitoramento->veiculo->nome }}</td>
                        <td>{{ $monitoramento->voltBateria }}</td>
                        <td>{{ $monitoramento->voltAlternador }}</td>
                        <td>{{ \Carbon\Carbon::parse($monitoramento->created_at)->format('d/m/Y - H:i:s')}}</td>
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
