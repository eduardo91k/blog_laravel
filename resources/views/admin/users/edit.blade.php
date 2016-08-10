@extends('admin.template.main')

@section('title', 'editar usuario')

@section('pre-content')
  <h2>Editar usuario: {{$user->name}}</h2>
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

  {!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'POST']) !!}

    {{ method_field('PUT') }}
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Correo Electronico') !!}
      {!! Form::email('email', $user->email , ['class' => 'form-control', 'placeholder' => 'correo@example.com', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('types', 'Tipo') !!}
      {!! Form::select('types', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->types, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! form::close() !!}
@endsection
