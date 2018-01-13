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
</style>
@endsection
@section('content')
<div class="row" style="margin-top:20px">
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-head text-center">
          <h3>Profile</h3>
          <img  class="img_profile" src="https://www.codetic.net/demo/templates/Privado/img/avatar.png" alt="">
        </div>
        <div class="panel-body text-center">
          <h1>{{ $user->name }}</h1>
          <h3>{{ $user->username }}</h3>
          <h4>{{ $user->dob }}</h4>
          <h5>{{ $user->email }}</h5>
        </div>
        <div class="panel-footer text-center">
          <button type="button" class="bnt btn-default" name="button">Follow</button>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
