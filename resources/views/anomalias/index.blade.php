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

    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="10%">Monitoramento</th>
                    <th>Veiculo</th>
                    <th width="2px">Bateria</th>
                    <th width="2px">Alternador</th>
                    <th width="30%">Laudo</th>
                    <th width="30%">Possivel Solução</th>

                </tr>
            </thead>
            <tbody>
                @forelse($anomalias as $anomalia)
                    <tr>
                        <td>{{ $anomalia->monitoramento->id }}</td>
                        <td>{{ $anomalia->veiculo->nome }}</td>
                        @if ($anomalia->avariaBateria == 0)
                            <td><span class='badge badge-success'>{{ 'OK' }} </span></td>
                        @else
                            <td><span class='badge badge-danger'>{{ $anomalia->avariaBateria . ' v' }}</span></td>
                        @endif
                        @if ($anomalia->avariAlternador == 0)
                        <td><span class='badge badge-success'>{{ 'OK' }} </span></td>
                    @else
                        <td><span class='badge badge-danger'>{{ $anomalia->avariAlternador . ' v' }}</span></td>
                    @endif
                        <td>{{ $anomalia->tipoanomalia->laudo }}</td>
                        <td>{{ $anomalia->tipoAnomalia->solucao }}</td>
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
