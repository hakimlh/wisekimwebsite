@extends('layouts.app')

@section('MyCssStyle')
<style media="screen" type="text/css" >
  .myLi:hover{
    background-color: rgb(225,225,225);
  }
</style>
@endsection

@section('content')
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welecome Home <span class="color">Admin</span></h1>
    <p>Abdelhakim Lahlou</p>
    <div class="clearfix"></div>
    <a href="#about-section" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
</header>

<div class="row" style="margin-top:20px">
  <div class="col-md-4 col-md-offset-4">
    

  </div>
</div>
@endsection
