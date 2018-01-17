@extends('include.layout')
@section('content')
  <form class="" action="/login" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" placeholder="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="password" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @include('include.errors')
  </form>
@endsection
