@extends('layouts.app')
@section('content')

<div class="row">
  <div class="portfolio-items">

    <div class="col-sm-6 col-md-3 col-lg-3 {{ $mypro->type}}">
      <div class="portfolio-item">
        <div class="hover-bg"> <a href="{{$mypro->img_url}}" rel="prettyPhoto">
          <div class="hover-text">
            <h4>{{ $mypro->name}}</h4>
            <small>{{ $mypro->type}}</small>
            <div class="clearfix"></div>
          </div>

        </div>
      </div>
    </div>

  </div>
    </div>





@endsection
