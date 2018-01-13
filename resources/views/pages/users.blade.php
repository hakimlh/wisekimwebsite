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
    <!-- <p>Your age is @age([1992,12,26]) years old</p> -->
    <span style="margin-top:20px">Total Users :  {{ $users->total()}}</span>

    <ul class="list-group">
      @forelse($users as $user)
        <li class="list-group-item myLi" style="margin-top:20px">
          <span> {{$user->name}}</span>
          <span class="pull-right clearfix">Joined ({{ $user->created_at->diffForHumans()}})
            <button class="btn btn-xs btn-primary" name="button">Follow</button>
          </span>
        </li>
      @empty
        <p>No users found</p>
      @endforelse
    </ul>
     {{ $users->links() }}
  </div>
</div>
@endsection
