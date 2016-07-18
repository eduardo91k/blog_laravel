@extends('admin.template.main')

@section('title')
  {{$article_prueba->title}}
@endsection

@section('content')
  <h1>Esto es test.index view -> TestController </h1>

  <br>
  <h2>Título: {{ $article_prueba->title }} </h2>
  <hr>
  Contenido: {{ $article_prueba->content }}
  <hr>
  Username: {{ $article_prueba->user->name }}
  <hr>
  Categoria:   {{ $article_prueba->category->name}}
  <hr>
  Tags:
  @foreach ($article_prueba->tags as $tag)
    {{ $tag->name}}
  @endforeach
  <hr>
  <a href="" class="btn btn-success"> ijolaperra </a>
@endsection
