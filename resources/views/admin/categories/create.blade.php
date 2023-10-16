@extends('adminlte::page')

@section('title', 'CodersFree')

@section('content_header')
    <h1>Crear nueva Categoria</h1>
@stop

@section('content')
    {{-- ESTO VA CON LARAVEL COLLECTIVE 6.... OJITO --}}
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la categoria']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el slug de la categoria']) !!}
            </div>

            {!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
