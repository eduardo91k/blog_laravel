@extends('front.template.main')

@section('title', 'index')

@section('content')
  <h3 class="title-front left">Ultimas publicaciones</h3>
  <div class="row">
    <div class="col-md-8">
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
                  <i class="fa fa-folder-open-o"></i> hace 1 min
                </div>
              </div>
            </div>
          </div>

        @endforeach
      </div>
      <div class="text-center">
        {!! $articles->render() !!}
      </div>
    </div>
  </div>
@endsection
