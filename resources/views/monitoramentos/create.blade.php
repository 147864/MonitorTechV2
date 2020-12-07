@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h3>Novo Monitoramento</h3>
    {!! Form::open(['route'=>'monitoramentos.store']) !!}

    <div class="form-group">
        {!! Form::label('veiculo_id', 'Veículo:') !!}
        {!! Form::select('veiculo_id',
                        \App\Veiculos::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        null, ['class'=>'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('voltBateria', 'Bateria:') !!}
        {!! Form::number('voltBateria', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('voltAlternador', 'Alternador:') !!}
        {!! Form::number('voltAlternador', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Monitoramento', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('monitoramentos', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop