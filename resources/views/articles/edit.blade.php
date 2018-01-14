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
    <div class="col-md-6 col-md-offset-3" >
      <div class="panel panel-default" id='mypanel'>
        <div class="panel-heading text-center">
          <h3>Edit Article</h3>
        </div>
        <div class="panel-body text-center">
          <form class="form" action="/articles/{{$article->id}}" method="post">
            {{ method_field('PUT') }}
            {{csrf_field()}}
            <input type="hidden" name="user_id" value="{{$article->user_id }}">
            <div class="form-group">
              <input type="text" class="form-control" name="title" value="{{$article->title}}" placeholder="Article title">
              <textarea name="content" class="form-control" rows="8" class="text" cols="60"  placeholder="content">
                {{$article->content}}
              </textarea>
            </div>
            <input type="submit" class="btn btn-success pull-right" value="Update">
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
