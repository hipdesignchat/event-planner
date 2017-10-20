@extends ('template/layout')
@section ('content')
  <h1>All Events</h1>
  <ul>
    @foreach ($events as $event)
    <li><a href="/event/view/{{ $event->id }}">{{ $event->title }}</a></li>
    @endforeach
  </ul>
@endsection
