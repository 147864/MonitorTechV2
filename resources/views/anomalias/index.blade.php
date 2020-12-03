@extends('layouts.default')

@section('content')
    <h1>Anomalias</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'anomalias']) !!}
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


    <div class="container">
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Identificador</th>
                    <th>Monitoramento</th>
                    <th>Veiculo</th>
                    <th>Tipo de Anomalia</th>
                    <th>Avaria de Alternador</th>
                    <th>Avaria de Bateria</th>
                </tr>
            </thead>
            <tbody>
                @forelse($anomalias as $anomalia)
                    <tr>
                        <td>{{ $anomalia->id }}</td>
                        <td>{{ $anomalia->monitoramento->id }}</td>
                        <td>{{ $anomalia->veiculo->nome }}</td>
                        <td>{{ $anomalia->id }}</td>
                        <td>{{ $anomalia->avariaBateria }}</td>
                        <td>{{ $anomalia->avariAlternador }}</td>
                        <td>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Nenhum registro encontrado para listar</td>
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
