<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>Event Index</title>
</head>
<body>
  <h1>All Events</h1>
  <ul>
    @foreach ($events as $event)
    <li><a href="/event/view/{{ $event->id }}">{{ $event->title }}</a></li>
    @endforeach
  </ul>
</body>
</html>
