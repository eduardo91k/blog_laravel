@extends('admin.template.main')

@section('title', 'Editar articulo')

@section('pre-content')
  <h2>Editar articulo: {{$article->title}}</h2>
  <br>
@endsection

@section('content')
    {!! Form::open(['route' => ['admin.articles.update', $article], 'method' => 'POST']) !!}
        {{ method_field('PUT') }}
        <div class="form-group">
          {!! Form::label('title', 'Titulo') !!}
          {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'rquired']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('category_id','Categoria') !!}
          {!! Form::select('category_id', $categories, $article->category->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('content', 'Contendio') !!}
          {!! Form::textarea('content', $article->content, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('tags', 'Tags') !!}
          {!! Form::select('tags[]', $tags, $artitags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Actualizar articulo', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection

@section('js')
    <script>
      $(".select-tag").chosen({
        max_selected_options: 5,
        disable_search: false,
        no_results_text: "No se encontraron resultados",
        placeholder_text_multiple: "Seleccione alguna opción...",
        width: "100%"
      });
    </script>
@endsection
