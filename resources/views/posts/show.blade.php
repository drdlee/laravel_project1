@extends('include.layout')
@section('content')
    <h2 class="blog-post-title">{{$post->title}}</h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">Chris</a></p>

    <p>{{$post->body}}</p>
    <hr>
    <div class="comments">
      <ul class="list-group">
        @foreach($post->comments as $comment)
          <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }}:</strong>
            {{ $comment->body }}
          </li>
        @endforeach
      </ul>
    </div>

    <hr>

        <form action="/posts/{{$post->id}}/comments" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <textarea class="form-control" name="body" placeholder="your comment here" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
          </div>
          @include('include.errors')
        </form>

@endsection
