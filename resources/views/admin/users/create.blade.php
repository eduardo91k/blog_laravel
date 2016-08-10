@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('pre-content')
  <h2>Crear usuario</h2>
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
      {!! Form::label('types', 'Tipo') !!}
      {!! Form::select('types', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! form::close() !!}
@endsection
