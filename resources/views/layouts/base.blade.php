<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

  <img src="http://wings.msn.to/image/wings.jpg" alt="logo">
  <hr>
  @section('main')
  <p>Default content</p>
  @show
  <hr>

</body>
</html>