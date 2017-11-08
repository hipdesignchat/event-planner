<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link type="text/css" rel="stylesheet" href="/css/app.css">
  <script type="text/javascript" src="/js/app.js" async></script>
</head>
<body>
  @include ('template.nav')
  
  @if (count($errors))
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif

  @yield ('content')

  @include ('template.footer')
</body>
</html>
