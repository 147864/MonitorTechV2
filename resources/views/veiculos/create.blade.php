@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <h3>Novo Veículo</h3>
    {!! Form::open(['route'=>'veiculos.store']) !!}

    <div class="form-group">
        {!! Form::label('cliente_id', 'Cliente:') !!}
        {!! Form::select('cliente_id',
                        \App\Clientes::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('marca', 'Marca:') !!}
        {!! Form::text('marca', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tipo_id', 'Tipo Veículo:') !!}
        {!! Form::select('tipo_id',
                        \App\TipoVeiculos::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('modelo', 'Modelo:') !!}
        {!! Form::text('modelo', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ano', 'Ano:') !!}
        {!! Form::text('ano', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cor', 'Cor:') !!}
        {!! Form::text('cor', null, ['class' => 'form-control', 'required']) !!}
    </div>  

    <div class="form-group">
        {!! Form::submit('Criar Veículo', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('veiculos', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop
