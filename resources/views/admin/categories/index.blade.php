@extends('admin.template.main')

@section('title', 'Lista de categorias')

@section('content')
  <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Crear nueva categoria</a>
  <hr>
  <table class="table table-striped">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Accion</th>
      </thead>
      <tbody>
        @foreach($categories as $category)
          <tr>
            <td> {{ $category->id }} </td>
            <td> {{ $category->name }} </td>
            <td><a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Está seguro?')" class="btn btn-danger glyphicon glyphicon-trash"></a> </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  {{ $categories->links() }}

@endsection
