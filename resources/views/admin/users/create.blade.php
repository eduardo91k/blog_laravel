@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('pre-content')
  <h2>Crear usuario</h2>
  <br>
@endsection

@section('content')
  {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Correo Electronico') !!}
      {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'correo@example.com', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Contraseña') !!}
      {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su Contraseña', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('type', 'Tipo') !!}
      {!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! form::close() !!}
@endsection
