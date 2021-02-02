@extends('home')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailContact" placeholder="Enter Email ID">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                    <label class="radio-inline">
                    <input type="radio" name="role" value='farmer'>Farmer
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="role" value='buyer'>Buyer
                    </label>
                    <h5></h5>
                <button type="submit" class="btn btn-primary" style="align-items:center">Register</button>
              </form>
        </div>
    </div>
</div>

@endsection