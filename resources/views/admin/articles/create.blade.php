@extends('admin.template.main')

@section('title', 'Crear articulo')

@section('content')
    {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
          {!! Form::label('title', 'Titulo') !!}
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'rquired']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('category_id','Categoria') !!}
          {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('content', 'Contendio') !!}
          {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('tags', 'Tags') !!}
          {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple', 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('image', 'Imagen') !!}
          {!! Form::file('image') !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Agregar articulo', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
