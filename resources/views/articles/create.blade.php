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
    <div class="col-md-4 col-md-offset-4" >
      <div class="panel panel-default" id='mypanel'>
        <div class="panel-heading text-center">
          <h3>Create Article</h3>
        </div>
        <div class="panel-body text-center">
          <form class="form" action="/articles" method="post">
            {{csrf_field()}}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Article title">
              <textarea name="content" class="form-control" rows="4" class="text" cols="40" placeholder="content">
              </textarea>
            </div>
            <input type="submit" class="btn btn-success" value="Create">
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
