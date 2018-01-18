@extends('include.layout')
@section('content')
  <div class="col-sm-8 blog-main">
    <form class="" action="/register" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
      @include('include.errors')
    </form>
  </div>
@endsection
