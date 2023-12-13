@extends('components.app')
@section('title', 'Home - Health360')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<div class="card text-bg-dark">
  <img src="image/back1.jpg" class="card-img" style="object-fit: cover; height: 300px;" alt="#">
  <div class="card-img-overlay mt-5 text-black">
    <h2 class="card-title">Welcome to Health360 - Your</h2>
    <h2 class="card-title">Comprehensive Health Hub</h2>
    <p class="card-text">Experience a new era of well-being, where every click brings you closer to a holistic approach to health and happiness</p>
  </div>
</div>

<div class="container">
  <div class="row align-items-center">
      <div class="col-md-4">
          <img src="image/Fitur.png" alt="logo" class="img-fluid">
      </div>
      <div class="col-12 col-md-8">
          <div style="text-align: justify;">
              <h3>About Us</h3>
              <p>At Health360, we're dedicated to making healthcare accessible and friendly. Discover a platform that bridges the gap between you and top-notch healthcare professionals.</p>
          </div>
      </div>
  </div>
</div>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 mb-3 mb-sm-0 mx-auto">
      <div class="card custom-card" style="width: 100%;">
        <img src="image/doctor.jpg" class="card-img-top" alt="#">
        <div class="card-body">
          <h5 class="card-title">Doctor Consultation</h5>
          <p class="card-text">Experience the future of healthcare with our virtual consultations. Chat with experienced doctors anytime, anywhere, ensuring personalized and confidential care</p>
          <a href="{{ route('doctor') }}" class="btn btn-primary justify-content-center" >Click Here</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-6 mb-3 mb-sm-0 mx-auto">
      <div class="card custom-card" style="width: 100%;">
        <img src="image/appointment.jpg" class="card-img-top" alt="#">
        <div class="card-body">
          <h5 class="card-title">Appointment Booking</h5>
          <p class="card-text">Prioritize your health with our hassle-free appointment booking. Choose between virtual or in-person check-ups, tailored to your schedule</p>
          <a href="{{ route('appointment') }}" class="btn btn-primary">Click Here</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container custom-container justify-content-center">

  <div class="text">
    <div style="text-align: justify">
        <h3>Contact Us, We're Here for You</h3>
        <p>Have questions or need assistance? Our support team is ready to help. Reach out to us for a seamless healthcare experience</p>
    </div>
</div>

  <form>
    <div class="row mb-3">
      <div class="col">
        <label for="contactFirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
      </div>
      <div class="col">
        <label for="contactLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
      </div>
    </div>
    <div class="mb-3">
      <label for="contactEmail" class="form-label">Email address</label>
      <input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="contactPhoneNumber" class="form-label">Phone Number</label>
      <input type="password" class="form-control" id="contactPhoneNumber">
    </div>
    <div class="mb-3">
      <label for="contactMessage" class="form-label">Message</label>
      <textarea class="form-control" id="contactMessage" rows="3"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
  
</div>



<style>
  .container{
    margin-bottom: 20px;
  }
  .custom-container{
    margin-top: 100px;
  }
  
</style>


@include('components.footer')
@endsection