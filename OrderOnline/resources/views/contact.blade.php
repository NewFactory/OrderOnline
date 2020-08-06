@extends('layouts.app')

@section('title')Contact @endsection

@section('content')
<h1>Contact</h1>

<form action="{{ route('contact-form') }}" method="post">
@csrf

  <div class="form-group">

    <label for="name">Your name</label>
    <input type="text" name="name" id="name" class="form-control">

    <label for="name">Your email</label>
    <input type="email" name="email" id="email" class="form-control">

    <label for="message">Your message</label>
    <textarea name="message" id="message"class="form-control"></textarea>

  </div>

  <button type="submit" class="btn btn-success">Submit</button>

</form>
@endsection
