@extends('layouts.app')

@section('MyCssStyle')
<style media="screen" type="text/css" >
  .rw{
    margin-top: 20px;
    margin-right: 0px;
  }
  .form-control{
    margin: 5px;
  }
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
    @forelse($articles as $article)
      <div class="col-md-6 col-md-offset-3" >
        <div class="panel panel-default" id='mypanel'>
          <div class="panel-heading text-center">
            <h3>{{ $article->title}} <span class="pull-right">{{$article->created_at->diffForHumans()}}</span></h3>
          </div>
          <div class="panel-body ">
              {{ $article->content }}
          </div>
          <div class="panel-footer clearfix" style="background-color: white;">
            <i class="fa fa-heart  pull-right"></i>
          </div>
        </div>
      </div>
    @empty
      <h3>No Article Found</h3>
    @endforelse
  </div>
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      {{ $articles->links() }}
    </div>
  </div>



@endsection
