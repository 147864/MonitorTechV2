@extends('layouts.default')

@section('content')
    <h1>Tipos de Anomalias</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'tipoanomalias']) !!}
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
                    <th>Laudo</th>
                    <th>Solucao</th>                    
                </tr>
            </thead>
            <tbody>
                @forelse($tipoanomalias as $tipoanomalia)
                    <tr>
                        <td>{{ $tipoanomalia->id }}</td>
                        <td>{{ $tipoanomalia->laudo }}</td>
                        <td>{{ $tipoanomalia->solucao }}</td>
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
    "tipoAnomalias"
@endsection
