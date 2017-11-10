@extends ('template/layout')
@section ('content')
  <h1>{{ $title }}</h1>
  @if (!empty($results))
    <ul>
      @foreach ($results as $event)
        <li><a href="/event/view/{{$event->id}}">{{$event->title}}</a></li>
      @endforeach
    </ul>
  @else
  <p>We couldn’t find any results.</p>
  @endif
@endsection
