@extends('layouts.app')

@section('title')Home @endsection


@section('content')
<h1>Home</h1>
@endsection

@section('aside')
  @parent
  <p>дополнительный текст, выводится только на главной странице</p>
@endsection
