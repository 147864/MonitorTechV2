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
    {!! Form::open(['route'=>'clientes.store']) !!}

    <div class="form-group cpf-mask">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
        
    </div>

    <div class="form-group ">
        {!! Form::label('cpf', 'CPF:') !!}
        {!! Form::text('cpf', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('rg', 'RG:') !!}
        {!! Form::text('rg', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cidade_id', 'Cidade:') !!}
        {!! Form::select('cidade_id',
                        \App\Cidades::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('endereco', 'Endereço:') !!}
        {!! Form::text('endereco', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cep', 'CEP:') !!}
        {!! Form::text('cep', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
    </div>
    

    <div class="form-group">
        {!! Form::submit('Criar Cliente', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('clientes', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop
