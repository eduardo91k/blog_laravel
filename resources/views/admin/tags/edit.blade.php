@extends('admin.template.main')

@section('title', 'editar tags')

@section('pre-content')
  <h2>Editar tag: {{$tag->name}}</h2>
  <br>
@endsection

@section('content')

  {!! Form::open(['route' => ['admin.tags.update', $tag], 'method' => 'POST']) !!}

    {{ method_field('PUT') }}
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $tag->name, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! form::close() !!}
@endsection
