<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<table class="table">
<tr>
  <th>value</th>
  <th>index</th>
  <th>iteration</th>
  <th>count</th>
  <th>first</th>
  <th>last</th>
  <th>even</th>
  <th>odd</th>
  <th>depth</th>
</tr>
@foreach($weeks as $week)
<tr>
  <td>{{ $week }}</td>
  <td>{{ $loop->index }}</td>
  <td>{{ $loop->iteration }}</td>
  <td>{{ $loop->count }}</td>
  <td>{{ $loop->first }}</td>
  <td>{{ $loop->last }}</td>
  <td>{{ $loop->even }}</td>
  <td>{{ $loop->odd }}</td>
  <td>{{ $loop->depth }}</td>
</tr>
@endforeach
</table>

</body>
</html>