@extends ('template.layout')

@section ('content')
  <div class="row">
    <h1>Sign In</h1>
  </div>
  <form method="post" action="/login">
    {{ csrf_field() }}

    <div class="row">
      <div class="eight columns">
        <label for="email">E-mail Address:</label>
        <input type="email" name="email" id="email" class="u-full-width" required>
      </div>
    </div>
    <div class="row">
      <div class="eight columns">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="u-full-width" required>
      </div>
    </div>
    <button class="button-primary" type="submit">Sign In</button>
  </form>
@endsection
