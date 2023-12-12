@extends('components.app')
@section('title', 'Home - Health360')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<div class="card text-bg-dark">
  <img src="image/back1.jpg" class="card-img" style="object-fit: cover" alt="#">
  <div class="card-img-overlay mt-5 text-black">
    <h2 class="card-title">Welcome to Health360 - Your</h2>
    <h2 class="card-title">Comprehensive Health Hub</h2>
    <p class="card-text">Experience a new era of well-being, where every click brings you closer to a holistic approach to health and happiness</p>
  </div>
</div>

<div class="container">
  <div class="row wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">
    <div class="d-none d-md-block col-md-4" style="margin: auto;">
        <img src="image/Fitur.png" alt="logo">
    </div>
    <div class="col-12 col-md-8">
      <div style="text-align: justify">
        <h3> About US </h3>
        <p> At Health360, we're dedicated to making healthcare accessible and friendly. Discover a platform that bridges the gap between you and top-notch healthcare professionals
     </div>
    </div>
</div> 




<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card" style="width: 18rem;">
      <img src="image/doctor.jpg" class="card-img-top" alt="#">
      <div class="card-body">
        <h5 class="card-title">Doctor Consultation</h5>
        <p class="card-text">Experience the future of healthcare with our virtual consultations. Chat with experienced doctors anytime, anywhere, ensuring personalized and confidential care</p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card" style="width: 18rem;">
      <img src="image/appointment.jpg" class="card-img-top" alt="#">
      <div class="card-body">
        <h5 class="card-title">Appointment Booking</h5>
        <p class="card-text">Prioritize your health with our hassle-free appointment booking. Choose between virtual or in-person check-ups, tailored to your schedule</p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
</div>





@endsection