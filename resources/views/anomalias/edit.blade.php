@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h3>Editando Anomalia</h3>
    {!! Form::open(['route'=> ["anomalias.update", 'id'=>$anomalias->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('monitoramento_id', 'Monitoramento:') !!}
        {!! Form::select('monitoramento_id',
                        \App\Monitoramentos::orderBy('id')->pluck('id')->toArray(),
                        $anomalias->monitoramento->id, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('veiculo_id', 'Veículo:') !!}
        {!! Form::select('veiculo_id',
                        \App\Veiculos::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        $anomalias->veiculo->nome, ['class'=>'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('tipoAnomalia_id', 'Tipo de Anomalia:') !!}
        {!! Form::select('tipoAnomalia_id',
                        \App\TipoAnomalias::orderBy('laudo')->pluck('laudo', 'id')->toArray(),
                        $anomalias->tipoAnomalia->laudo, ['class'=>'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('avariAlternador', 'Avaria da Alternador:') !!}
        {!! Form::number('avariAlternador', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('avariaBateria', 'Avaria da Bateria:') !!}
        {!! Form::number('avariaBateria', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar Anomalia', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('anomalias', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop