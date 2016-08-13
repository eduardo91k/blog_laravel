@extends('admin.template.main')

@section('title', 'imagenes')

@section('pre-content')
  <h2>imagenes</h2>
  <br>
@endsection

@section('content')
  <div class="row">
    @foreach($images as $image)
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="/images/articles/{{ $image->name }}" class="img-responsive" />
          </div>
          <div class="panel-footer"> {{ $image->article->title }} </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
