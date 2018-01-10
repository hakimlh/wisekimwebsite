@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADD Product</div>
                      @foreach($product as $mypro)
                      <h2>{{ $mypro->name}}</h2>
                      <h2>{{ $mypro->type}} </h2>
                      <h2>{{ $mypro->img_url}} </h2>
                      @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
