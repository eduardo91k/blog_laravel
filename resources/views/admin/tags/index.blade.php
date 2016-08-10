@extends('admin.template.main')

@section('title', 'Indice de tags')

@section('content')
    <a href=" {{ route('admin.tags.create') }} " class="btn btn-primary">crear nuevo Tag </a>
    <!--BUSCADOR DE TAGS-->
    {!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
      <div class="input-group">
        {!! Form::text('name', null, ['class' => 'form-control ', 'placeholder' => 'Buscar...', 'aria-describedby' => 'search']) !!}
        <span class="input-group-addon" id="search">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </span>
      </div>

    {!! Form::close() !!}
    <!--FIN BUSCADOR DE TAGS-->
    <hr>

    <table class="table table-striped">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Accion</th>
      </thead>
      <tbody>
        @foreach($tags as $tag)
          <tr>
            <td> {{ $tag->id }} </td>
            <td> {{ $tag->name }} </td>
            <td>
              <a href=" {{ route('admin.tags.edit', $tag->id) }} " class="btn btn-warning glyphicon glyphicon-pencil"></a>
              <a href=" {{ route('admin.tags.destroy', $tag->id) }} " onclick="return confirm('¿Está seguro?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      {{ $tags->links() }}
    </div>
@endsection
