@extends ('template/layout')
@section ('content')
  <form method="PUT" action="/event/{{$event->id}}">
    {{ csrf_field() }}
    <p>
      <label for="title">Title</label><input type="text" name="title" id="title" value="{{$event->title}}">
    </p>
    <p>
      <label for="description">Description</label>
      <textarea name="description" id="description" cols="30" rows="10">{{$event->description}}</textarea>
    </p>
    <p>
      <label for="colour">Event Colour</label>
      <input type="color" id="colour" name="colour" placeholder="e.g. #fff or orange" value="{{$event->colour}}">
    </p>
    <p>
      <label for="location">Location</label><input type="text" name="location" id="location" value="{{$event->location}}">
    </p>
    <p>
      <label for="status_id">Status ID</label><input type="number" name="status_id" id="status_id" value="{{$event->status_id}}">
    </p>
    <p>
      <label for="category_id">Category ID</label><input type="number" name="category_id" id="category_id" value="{{$event->category_id}}">
    </p>
    <p>
      <label for="event_begin">Event Start</label><input class="flatpickr" type="datetime-local" name="event_begin" id="event_begin" value="{{$event->event_begin}}">
    </p>
    <p>
      <label for="event_end">Event End</label><input class="flatpickr" type="datetime-local" name="event_end" id="event_end" value="{{$event->event_end}}">
    </p>
    <p>
      <button type="submit">Update</button>
    </p>
  </form>
@endsection
