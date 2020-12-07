@extends('adminlte::page')

@section('content')
    <h3>Editando Tipo de Veículo: {{ $tipoVeiculos->nome }}</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=> ["tipoVeiculos.update", 'id' => $tipoVeiculos->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $tipoVeiculos->nome, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('bateria', 'Voltagem Bateria:') !!}
        {!! Form::text('bateria', $tipoVeiculos->bateria, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('alternador', 'Voltagem Alternador:') !!}
        {!! Form::text('alternador', $tipoVeiculos->alternador, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Tipo Veículo', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('tipoVeiculos', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop
