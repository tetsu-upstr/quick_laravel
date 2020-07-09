@extends('layouts.base')

@section('title', 'common layouts')

@section('main')
  @parent
  <p>{{ $msg }}</p>
@endsection