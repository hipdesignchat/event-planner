@extends ('template/layout')
@section ('content')
  <h1>{{ $event->title }}</h1>
  <h2>{{ $event->event_begin->diffForHumans() }}</h2>
@endsection
