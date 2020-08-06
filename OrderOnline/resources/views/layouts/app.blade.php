<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OrderOnline - @yield ('title')</title>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
        @include('include.header')
      </div>
  </div>

  @if (Request::is('/'))
    @include('include.hero')
  @endif

<div class="container mt-5">
  <div class="row">
    <div class="col-8">
        @include('include.messages')
        @yield('content')
    </div>
    <div class="col-4">
      @include('include.aside')
    </div>
  </div>
</div>

  @include('include.footer')
</body>
</html>
