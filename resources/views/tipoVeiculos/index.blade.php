@extends('layouts.default')

@section('content')
    <h1>Tipo de Veículos</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'tipoVeiculos']) !!}
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