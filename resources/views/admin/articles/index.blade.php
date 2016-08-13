@extends('admin.template.main')

@section('title', 'Indice de Articulos')

@section('content')
  <a href="{{ route('admin.articles.create') }}" class="btn btn-success">Publicar nuevo articulo</a>
  <!--BUSCADOR DE ARTICULOS-->
  {!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
      {!! Form::text('title', null, ['class' => 'form-control ', 'placeholder' => 'Buscar...', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </span>
    </div>

  {!! Form::close() !!}
  <!--FIN BUSCADOR DE ARTICULOS-->
  <hr>
  <table class="table table-striped">
    <thead>
      <th>Id</th>
      <th>Titulo</th>
      <th>Categoria</th>
      <th>User</th>
      <th>Tags</th>
      <th>Acción</th>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr>
          <td> {{ $article->id }} </td>
          <td> {{ $article->title }} </td>
          <td> {{ $article->category->name }} </td>
          <td> {{ $article->user->name }} </td>
          <td></td>
          <td>
            <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
            <a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Está seguro?')" class="btn btn-danger glyphicon glyphicon-trash"></a> </td>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
    {{ $articles->links() }}
  </div>
@endsection
