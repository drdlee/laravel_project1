@extends('include.layout')

@section('content')
  <h1>Registration</h1>
  <form action="/register" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" placeholder="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" placeholder="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="password" required>
    </div>
    <div class="form-group">
      <label for="password_confirmation">Password Confirmation</label>
      <input type="password" name="password_confirmation" class="form-control" placeholder="re-type password" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @include('include.errors')
  </form>
@endsection
