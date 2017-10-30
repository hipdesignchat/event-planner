<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
</head>
<body>
  @include ('template.header')
  
  @if (count($errors))
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif

  @yield ('content')

  @include ('template.footer')
</body>
</html>
