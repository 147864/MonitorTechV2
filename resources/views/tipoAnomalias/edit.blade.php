@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h3>Editando Tipo de Anomalia</h3>
    {!! Form::open(['route'=>'tipoanomalias.store']) !!}

    <div class="form-group">
        {!! Form::label('laudo', 'Laudo:') !!}
        {!! Form::text('laudo', $tipoanomalias->laudo, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('solucao', 'Possivel Solução:') !!}
        {!! Form::text('solucao', $tipoanomalias->solucao, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Tipo de Anomalia', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('tipoAnomalias', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop