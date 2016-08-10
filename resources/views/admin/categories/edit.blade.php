@extends('admin.template.main')

@section('title', 'editar categoria')

@section('pre-content')
  <h2>Editar categoria: {{$category->name}}</h2>
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

  {!! Form::open(['route' => ['admin.categories.update', $category], 'method' => 'POST']) !!}

    {{ method_field('PUT') }}
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! form::close() !!}
@endsection
