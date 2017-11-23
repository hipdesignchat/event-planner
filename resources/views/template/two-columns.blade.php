<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title }} :: Event Planner</title>
  <link type="text/css" rel="stylesheet" href="/css/app.css">
  <script type="text/javascript" src="/js/app.js" async></script>
</head>
<body>
  @include ('template.nav')
  <main class="container">
    @if (count($errors))
      @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    @endif
    <section style="background: @yield ('hero_background')">
      @yield ('hero_content')
    </section>
    <div class="row">
      <div class="eight columns">
        @yield ('column_one')
      </div>
      <div class="four columns">
        @yield ('column_two')
      </div>
    </div>
  </main>
@include ('template.footer')
</body>
</html>
