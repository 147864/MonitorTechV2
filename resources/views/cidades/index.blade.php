@extends('layouts.default')

@section('content')
    <h1>Cidades</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'cidades']) !!}
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
        <a href="{{ route('cidades.create') }}" class="btn btn-primary btn-lg">Adicionar</a>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th width="80%">Nome</th>
                    <th width="5%">UF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cidades as $cidade)
                    <tr>
                        <td>{{ $cidade->nome }}</td>
                        <td>{{ $cidade->uf }}</td>
                        <td>
                            <a href="{{ route('cidades.edit', $cidade->id) }}"class="far fa-edit"></a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $cidade->id }})"  class="fas fa-trash-alt"></a>
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
