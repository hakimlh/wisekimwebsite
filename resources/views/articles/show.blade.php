@extends('layouts.app')

@section('MyCssStyle')
<style media="screen" type="text/css" >

</style>
@endsection
@section('content')
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welecome Home <span class="color">Admin</span></h1>
    <div class="clearfix"></div>
    <a href="#about-section" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
</header>
  <div class="container">
      <div class="col-md-6 col-md-offset-3" >
        <div class="panel panel-default" id='mypanel'>
          <div class="panel-heading text-center">
            <h3>{{ $article->title}} <span class="pull-right">{{$article->created_at->diffForHumans()}}</span></h3>
          </div>
          <div class="panel-body ">
              {{ $article->content }}
          </div>
          <div class="panel-footer clearfix" style="background-color: white;">
            <a href="/articles/{{$article->id}}/edit"> <i class="fa fa-edit pull-left"></i></a>
            @if ($article->user_id == Auth::id())
            <form class="pull-left" action="/articles/{{ $article->id }}" method="post">
              {{ method_field('DELETE') }}
              {{csrf_field()}}
              <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-xs">
            </form>
            @endif


            <i class="fa fa-heart  pull-right"></i>
          </div>
        </div>
      </div>
  </div>
@endsection
