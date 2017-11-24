@extends ('template.layout')
@section ('content')
  <div class="row">
    <h1>Hello, {{$user->name}}</h1>
    <p>You can do the following actions</p>
    <ul>
      <li><a href="/event/new">Create an event</a></li>
      <li><a href="/logout">Logout</a></li>
    </ul>
  </div>
@endsection
