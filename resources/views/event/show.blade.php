@extends ('template/two-columns')
@section ('hero_background')
{{ $event->colour }}
@endsection
@section ('hero_content')
  <h1>{{ $event->title }}</h1>
  <p>{{ $event->event_begin->format('F j Y\, g:i A') }}–{{ $event->event_end->format('F j Y\, g:i A') }}</p>
@endsection
@section ('column_one')
{!!html_entity_decode($event->description)!!}
@endsection
@section ('column_two')
<div class="register_interest">
  <h1>Register your interest</h1>
</div>
<div class="location">
  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAvBA4fOryvPSVytsHSlJZ45yh5y3j2xOs&q=<?= urlencode($event->location) ?>" frameborder="0"></iframe>
</div>
@endsection
