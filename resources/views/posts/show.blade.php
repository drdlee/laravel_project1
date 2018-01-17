@extends('include.layout')
@section('content')
  <div class="col-sm-8 blog-main">
    <h2 class="blog-post-title">{{$post->title}}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Chris</a></p>

    <p>{{$post->body}}</p>

  </div>
@endsection
