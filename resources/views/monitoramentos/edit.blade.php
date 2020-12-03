@extends('adminlte::page')

@section('content')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h3>Alterar Monitoramento</h3>
    {!! Form::open(['route'=> ["monitoramentos.update", 'id' => $monitoramentos->id], 'method' => 'put']) !!}

    <div class="form-group">
        {!! Form::label('veiculo_id', 'Veículo:') !!}
        {!! Form::select('veiculo_id',
                        \App\Veiculos::orderBy('nome')->pluck('nome', 'id')->toArray(),
                        $monitoramentos->veiculo_id, ['class'=>'form-control', 'required']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('voltBateria', 'Bateria:') !!}
        {!! Form::number('voltBateria', $monitoramentos->voltBateria, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('voltAlternador', 'Alternador:') !!}
        {!! Form::number('voltAlternador', $monitoramentos->voltAlternador, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Alterar Monitoramento', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}
    <@php echo link_to('monitoramentos', $title='Voltar' , $attributes=[], $secure=null); @endphp @stop