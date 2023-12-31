@extends('components.layout')
@section('title', 'Register - Health360')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="container d-lg-block p-3 my-auto align-bottom">
  <div class="row justify-content-center " >    
      <div class="col-lg-5 p-5" style="background-color:#9DFFE8">
          <span class="fs-4 fw-bold">Create an account</span>
          <div class="row my-2">
              <div class="col-lg-6">
                  <label for="InitialName" class="form-label fw-bold">First Name</label>
                  <input type="iniName" class="form-control" id="InitialName" aria-describedby="nameHelp" placeholder="Enter Your First Name">
              </div>
              <div class="col-lg-6">
                  <label for="EndName" class="form-label fw-bold">Last Name</label>
                  <input type="finalName" class="form-control" id="EndName" aria-describedby="name2Help" placeholder="Enter Your Last Name">
              </div>
          </div>
          <div class="mb-lg-3">
              <label for="phoneNumber" class="form-label fw-bold">Phone Number</label>
              <input type="phone" class="form-control" id="phoneNumber" aria-describedby="phoneHelp" placeholder="+62xx">
              <div id="phoneHelp" class="form-text">Please enter a valid phone number!</div>
          </div>
          <div class="mb-lg-3">
              <label for="emailAddress" class="form-label fw-bold">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="name@gmail.com">
          </div>
          <div class="mb-lg-3">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control" id="password" placeholder="*********">
              <div id="phoneHelp" class="form-text">Password must be at least 8 characters long</div>
          </div>
          <div class="mb-lg-3 mb-3">
              <label for="confirmPassword" class="form-label fw-bold">Confirm Password</label>
              <input type="confirmPassword" class="form-control" id="confirmPassword" placeholder="*********">
              <div id="phoneHelp" class="form-text">Please re-enter your password to confirm.</div>
          </div>
          <a href="{{ url('/') }} "type="button" class="d-flex btn btn-primary justify-content-center mb-5">Register</a>
          <span class="d-lg-flex mt-2">Already have an account?  <a href="{{ url('/login') }}" class="d-lg-flex link-dark text-uppercase px-1">Sign In</a></span>
      </div>
      <div class=" col-lg-4 p-5 text-center align-middle bg-white">
        <a href=""><img src={{ asset('/image/Fitur.png') }} width="250" alt="..."></a>
        <span class="d-lg-flex justify-content-center fs-3 my-auto mt-3">Where Care Meets Convenience</span>
    </div>
      
  </div>    
</div> 

@endsection