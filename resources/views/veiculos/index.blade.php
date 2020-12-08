@extends('layouts.default')

@section('content')
    <h1>Veículos</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'veiculos']) !!}
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
        <a href="{{ route('veiculos.create') }}" class="btn btn-primary btn-lg">Adicionar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Tipo do Veículo</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->cliente->nome }}</td>
                        <td>{{ $veiculo->nome }}</td>
                        <td>{{ $veiculo->marca }}</td>
                        <td>{{ $veiculo->tipoveiculo->nome }}</td>
                        <td>{{ $veiculo->modelo }}</td>
                        <td>{{ $veiculo->ano }}</td>
                        <td>{{ $veiculo->cor }}</td>
                        <td>
                            <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="far fa-edit"></a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $veiculo->id }})" class="fas fa-trash-alt"></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $veiculos->links() }}
    </div>
@endsection

@section('table-delete')
    "veiculos"
@endsection