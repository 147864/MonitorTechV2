@extends('layouts.default')

@section('content')
    <h1>Clientes</h1>

    {!! Form::open(['name'=>'form_name', 'route'=>'clientes']) !!}
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
        <a href="{{ route('clientes.create') }}" class="btn btn-info btn-sm">Novo</a>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Cidade</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->rg }}</td>
                        <td>{{ $cliente->cidade->nome }}</td>
                        <td>{{ $cliente->cep }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->bairro }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->email }}</td>                        
                        <td>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn-sm btn-warning btn-sm">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $cliente->id }})" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Nenhum registro encontrado para listar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $clientes->links() }}
    </div>
@endsection

@section('table-delete')
    "clientes"
@endsection
