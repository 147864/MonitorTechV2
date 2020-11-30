@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    
    <h3>Novo Cliente</h3>
    {!! Form::open(['route'=> ["clientes.update", 'id'=>$clientes->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $clientes->nome, ['class' => 'form-control', 'required']) !!}
        
    </div>

    <div class="form-group">
        {!! Form::label('cpf', 'CPF:') !!}
        {!! Form::text('cpf', $clientes->cpf, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('rg', 'RG:') !!}
        {!! Form::text('rg', $clientes->rg, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cidade_id', 'Cidade:') !!}
        {!! Form::select('cidade_id',
                        \App\Cidades::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        $clientes->cidades_id, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('endereco', 'Endereço:') !!}
        {!! Form::text('endereco', $clientes->endereco, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', $clientes->bairro, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cep', 'CEP:') !!}
        {!! Form::text('cep', $clientes->cep, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', $clientes->telefone, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::text('email', $clientes->email, ['class' => 'form-control', 'required']) !!}
    </div>
    

    <div class="form-group">
        {!! Form::submit('Editar Cliente', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('clientes', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop
