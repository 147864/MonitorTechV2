@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <h3>Editando Veículo</h3>
    {!! Form::open(['route'=> ["veiculos.update", 'id' => $veiculos->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('cliente_id', 'Cliente:') !!}
        {!! Form::select('cliente_id',
                        \App\Clientes::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        $veiculos->cliente->nome, ['class'=>'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $veiculos->nome, ['class' => 'form-control', 'required']) !!}
        
    </div>

    <div class="form-group">
        {!! Form::label('marca', 'Marca:') !!}
        {!! Form::text('marca', $veiculos->marca, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tipo_id', 'Tipo Veículo:') !!}
        {!! Form::select('tipo_id',
                        \App\TipoVeiculos::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        $veiculos->tipo_id, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('modelo', 'Modelo:') !!}
        {!! Form::text('modelo', $veiculos->modelo, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('ano', 'Ano:') !!}
        {!! Form::text('ano', $veiculos->ano, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('cor', 'Cor:') !!}
        {!! Form::text('cor', $veiculos->cor, ['class' => 'form-control', 'required']) !!}
    </div>  

    <div class="form-group">
        {!! Form::submit('Editar Veículo', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('veiculos', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop