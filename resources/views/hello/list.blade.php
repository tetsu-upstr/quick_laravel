@extends('layouts.base')
@section('title', 'common layouts')
@section('main')

<!-- <table class="table">
  <tr>
    <th>書名</th>
    <th>価格</th>
    <th>出版社</th>
    <th>刊行日</th>
  </tr>
@foreach($records as $record)
  <tr>
    <td>{{ $record->title }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach
</table> -->

<table class="table">
  <tr>
    <th>書名</th>
    <th>価格</th>
    <th>出版社</th>
    <th>刊行日</th>
  </tr>
<!-- インデックス番号を取り出す -->
<!-- @foreach($records as $id => $record)
  <tr>
    <td>{{ $id + 1 }}</td>
    <td>{{ $record->title }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->published }}</td>
  </tr>
@endforeach -->

<!-- コレクションビューで表示した場合 -->
@each('subviews.book', $records, 'record', 'subviews.empty')
</table> 

@endsection