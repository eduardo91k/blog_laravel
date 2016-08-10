@extends('admin.template.main')

@section('title', 'agregar Tag')

@section('pre-content')
  <h2>Crear Tag</h2>
  <br>
@endsection

@section('content')
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  {!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
  <div class="form-group">
    {!! Form::label('name', 'Nombre')!!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre de la caga de tag', 'required']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
  </div>
  {!! form::close() !!}
@endsection
