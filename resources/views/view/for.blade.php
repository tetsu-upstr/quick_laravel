<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

@for($i = 1; $i <= 6; $i++)
  <h{{ $i }}>number {{ $i }}</h{{ $i }}>
@endfor

</body>
</html>