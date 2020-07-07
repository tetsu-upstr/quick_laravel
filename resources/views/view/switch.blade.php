<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

@switch($random)
  @case(5)
    <p>big lucky day</p>
    @break
  @case(4)
    <p>small lucky day</p>
    @break
  @case(3)
    <p>normal day</p>
    @break
  @case(2)
    <p>Be quiet at home</p>
    @break
  @default
  <p>umm...</p>
@endswitch

</body>
</html>