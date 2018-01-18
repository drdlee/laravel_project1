@extends('include.layout')
@section('content')
  <div class="col-sm-8 blog-main">
    <h1>Sign In</h1>
    <form method="POST" action='/login'>
      {{ csrf_field() }}
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      @include('include.errors')
    </form>
  </div>
@endsection
