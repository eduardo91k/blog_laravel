@extends('front.template.main')

@section('title', 'index')

@section('content')
  <h3 class="title-front left">Ultimas publicaciones</h3>
  <div class="row">
    <div class="col-md-8 pull-right">
      <div class="row">
        @foreach($articles as $article)
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <a href="#" class="thumbnail">
                  @foreach($article->images as $image)
                    <img class="img-responsive img-article" src=" {{ asset('images/articles/' . $image->name) }} "/>
                  @endforeach
                </a>
                <h3 class="text-center"> {{ $article->title }}</h3>
                <hr>
                <i class="fa fa-folder-open-o"></i> <a href="#"> {{ $article->category->name }} </a>
                <div class="pull-right">
                  <i class="fa fa-folder-open-o"></i> {{ $article->created_at }}
                </div>
              </div>
            </div>
          </div>

        @endforeach
      </div>
    </div>
      <div class="col-md-4 pull-left">
        <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h3 class="text-center">Busca articulos</h3>
                  <br>
                  {!! Form::open(['route' => 'front.index', 'method' => 'GET']) !!}
                  <div class="input-group">
                    {!! Form::text('name', null, ['class' => 'form-control ', 'placeholder' => 'Buscar...', 'aria-describedby' => 'search']) !!}
                    <span class="input-group-addon" id="search">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </span>
                  </div>
                  <br>
                  <div class="form-group">
                    {!! Form::label('category_id','Categoria') !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
                  </div>
                  <br>
                  <div class="form-group">
                    {!! Form::label('tags', 'Tags') !!}
                    {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
                  </div>
                  <div class="form-group">
                    <a href="#" class="btn btn-primary text-center">BUSCAR</a>
                  </div>
              {!! Form::close() !!}

                  <hr>
                </div>
              </div>
            </div>
        </div>
      </div>
    <div class="text-center">
      {!! $articles->render() !!}
    </div>
  </div>

@endsection
