@extends('layouts.base')

@section('title', 'common layouts')

@section('main')

  @component('components.alert', ['type' => 'success'])
    @slot('alert_title')
      はじめてのコンポーネント
    @endslot

    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できる
  @endcomponent
  {{ $msg }}
  
@endsection
