@extends('layouts.app')

@section('title')Dashboard @endsection


@section('content')

<h1>Dashboard</h1>

@foreach ($data as $el)

<div class="container mt-5">
  <h3>{{ $el-> first_name_client }}, {{ $el-> last_name_client }}</h3>
  <h5>{{ $el-> email_client }}
  <h5>{{ $el-> phone_number_client }}</h5>
  <h5>{{ $el-> address_client }}</h5>
  <h5>{{ $el-> type_order }}</h5>
  <small>{{ $el-> created_at }}</small>

</div>


@endforeach
@endsection
