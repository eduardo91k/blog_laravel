@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
  <a href="{{ route('admin.users.create') }}" class="btn btn-success">Registrar nuevo usuario</a>
  <hr>
  <table class="table table-striped">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>E-mail</th>
        <th>Tipo</th>
        <th>Accion</th>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td> {{ $user->id }} </td>
            <td> {{ $user->name }} </td>
            <td> {{ $user->email }} </td>
            <td>
              @if($user->types == "admin")
                <span class="label label-success">{{ $user->types }}</span>
              @else
                <span class="label label-primary">{{ $user->types }}</span>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
              <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Está seguro?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  <div class="text-center">
    {{ $users->links() }}
  </div>
@endsection
