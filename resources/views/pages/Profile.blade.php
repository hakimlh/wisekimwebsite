@extends('layouts.app')

@section('MyCssStyle')
<style media="screen" type="text/css" >
  .myLi:hover{
    background-color: rgb(225,225,225);
  }
  .img_profile{
    max-width: 150px;
    border-radius: 100%;
    box-shadow: 0 0 2px #ffe;
    border: 2px solide #fff;
  }
  #mypanel{
    color: black;
    border-radius: 40px;

  }
  #mypanelfooter{
    border-bottom-right-radius: 40px;
    border-bottom-left-radius: 40px;
  }

  .panel h2 {
    color : green;
    font-style: oblique;
  }
</style>
@endsection
@section('content')
<header class="text-center" name="home">
  <div class="intro-text">
    <div class="col-md-4 col-md-offset-4" >
      <div class="panel panel-default" id='mypanel'>
        <div class="panel-heading text-center">
          <h3>Profile</h3>
          <img  class="img_profile" src="https://www.codetic.net/demo/templates/Privado/img/avatar.png" alt="">
        </div>
        <div class="panel-body text-center">
          <h2>{{ $user->name }}</h2>
          <h3>{{ $user->username }}</h3>
          <h4>{{ $user->dob->format('Y-m-d') }} ({{ $user->dob->age }} years old)</h4>
          <h5>{{ $user->email }}</h5>
        </div>
        <div class="panel-footer text-center" id="mypanelfooter">
          <button type="button" class="bnt btn-default btn-lg " name="button">Follow</button>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- <a href="#about-section" class="btn btn-default btn-lg page-scroll">Learn More</a> -->
  </div>
</header>

@endsection
