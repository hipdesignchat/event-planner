@extends('template.layout')

@section('content')
<h1>Register</h1>
<form method="POST" action="/register">
  {{ csrf_field() }}
  <div class="row">
    <div class="columns">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
  </div>
  
  <div class="row">
    <div class="columns">
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
    </div>
  </div>

  <div class="row">
    <div class="columns">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
  </div>

  <div class="row">
    <div class="columns">
      <label for="password_confirmation">Password:</label>
      <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>
  </div>

  <div class="row">
    <div class="columns">
      <button type="submit">
        Register User
      </button>
    </div>
  </div>
</form>
@endsection
