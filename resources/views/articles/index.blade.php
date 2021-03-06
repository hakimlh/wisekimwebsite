@extends('layouts.app')

@section('MyCssStyle')
<style media="screen" type="text/css" >
  .rw{
    margin-top: 20px;
    margin-right: 0px;
  }
  .form-control{
    margin: 5px;
    border-radius:
  }
  .tag{
     background-color:rgb(234,234,234);
     position: relative;
     border-radius:4px;
     padding:2px 10px 2px 10px;
     margin-right: 5px;
     color:rgb(68,68,68);
  }
  .owner{
    color:red;
    font-size: 12px;
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
            <h3>{{ $article->title}}<span class="pull-right">{{$article->created_at->diffForHumans()}}</span></h3>
          </div>
          <div class="panel-body ">
              {{ $article->ShortContent }} <a href="/articles/{{$article->id}}">Read More</a><br><br>

              @foreach ($article->tags as $tag)
                <span class="tag"> {{$tag->name}} </span>
              @endforeach
              <span class="clearfix pull-right owner">Published by : {{ $article->owner->name}}</span>
          </div>
          <div class="panel-footer clearfix" style="background-color: white;">
            <a href="/articles/{{$article->id}}/edit" class="btn-lg"> <i class="fa fa-edit pull-left"></i></a>
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
