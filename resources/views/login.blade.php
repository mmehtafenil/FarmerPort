@extends('home')
@section('content')

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3>Admin</h3>
        <p><a href="/adminlogin" class="btn btn-primary" role="button">Login</a></p>
      </div>
      <div class="caption">
        <h3>Farmer</h3>
        <p><a href="/farmerlogin" class="btn btn-primary" role="button">Login</a></p>
      </div>
      <div class="caption">
        <h3>Buyer</h3>
        <p><a href="/buyerlogin" class="btn btn-primary" role="button">Login</a></p>
      </div>
    </div>
  </div>
</div>

@endsection