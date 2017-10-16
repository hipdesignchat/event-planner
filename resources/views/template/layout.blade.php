<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
