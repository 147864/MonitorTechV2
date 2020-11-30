@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h3>Novo Tipo de Anomalia</h3>
    {!! Form::open(['route'=>'tipoanomalias.store']) !!}

    <div class="form-group">
        {!! Form::label('laudo', 'Laudo:') !!}
        {!! Form::text('laudo', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('solucao', 'Possivel Solução:') !!}
        {!! Form::text('solucao', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Tipo de Anomalia', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('tipoanomalias', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop