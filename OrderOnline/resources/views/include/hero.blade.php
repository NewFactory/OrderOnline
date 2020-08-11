@section('hero')
<div class="form-group">
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-9">
          <form action="{{ route('order-data') }}" method="get">
              @csrf
                <input type="text" name="order" id="order" placeholder="Yor order" class="form-control form-control-lg">
        </div>
        <div class="col-3">
          <button type="submit" class="btn btn-primary btn-lg btn-block" href="{{ route('order-data') }}">Find</button>
        </div>
          </form>
      </div>
    </div>
  <div class="container mt-5">
    <h1>Hi, how are you?</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
