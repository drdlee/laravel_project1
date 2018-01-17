@extends('include.layout')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="/posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" placeholder="Body"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      @include('include.errors')

    </form>
@endsection
