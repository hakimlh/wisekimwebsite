@extends('layouts.app')

@section('content')
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welecome Home <span class="color">Admin</span></h1>
    <p>Abdelhakim Lahlou</p>
    <div class="clearfix"></div>
    <a href="#about-section" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
</header>

<div class="row" style="margin-top:20px">
  <div class="col-md-6 col-md-offset-3">
    <span style="margin-top:20px">Total Users :  {{ $users->total()}}</span>

    <ul class="list-group">
      @foreach ($users as $user)
      <li class="list-group-item" style="margin-top:20px">
        <span> {{$user->name}}</span>
        <span class="pull-right clearfix">Joined ({{ $user->created_at->diffForHumans()}}) <button class="btn btn-xs btn-primary" name="button">Follow</button> </span>

      </li>
      @endforeach
      {{ $users->links() }}
    </ul>
  </div>
</div>
@endsection
