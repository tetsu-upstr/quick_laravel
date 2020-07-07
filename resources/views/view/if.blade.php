<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

@if($random < 50)
<p>{{ $random }} is less than 50</p>
@elseif($random < 70)
<p>{{ $random }} is more than 50 and less than 70</p>
@else
<p>{{ $random }} is more than 70</p>
@endif

</body>
</html>