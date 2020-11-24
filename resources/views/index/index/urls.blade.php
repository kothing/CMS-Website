@extends('index.common.top')
@section('title', "更多$nav_name->name")
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title"> {{ $nav_name->name }}</h3>
            <div class="card-options">
                <a href="{{ url('/') }}" class="btn btn-primary btn-sm">回首页</a>
            </div>
        </div>
        <div class="card-body">
            @foreach($navigations as $navigation)
                <a target="_blank" href="{{ $navigation->url }}" class="btn btn-secondary">{{ $navigation->title }}</a>
            @endforeach
        </div>
        </div>
    </div>
  </div>
@endsection
      
