@extends('components.app')
@section('title', 'Services - Health360')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>


<div class="container">
  
    <div class="services fs-1 fw-medium">
        <span>Services</span>
        <div class="fs-6 fw-normal">Home/Services</div>
    </div>

    <div class="container text-center">
    <p class="midtext text-center fs-6 fw-normal">Only Top Quality Services</p>
    </div>
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3">Customers are very important, therefore our service is based on good standards of professionalism. We understand that each patient has unique needs and feelings, therefore empathy is at the core of each of our services</div>
    </div>
    <div class="col-6">
      <div class="p-3">Integrity is the foundation of every decision we take. We are committed to acting honestly and ethically in all situations</div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6 col-md-6 mb-5 mb-sm-0 mx-auto">
      <div class="card custom-card" style="width: 50%;">
        <img src="image/doctor.jpg" class="card-img-top" alt="#">
        <div class="card-body">
          <h5 class="card-title">Doctor Consultation</h5>
          <p class="card-text">Experience the future of healthcare with our virtual consultations. Chat with experienced doctors anytime, anywhere, ensuring personalized and confidential care</p>
          <a href="{{ route('doctor') }}" class="btn btn-primary justify-content-center" >Click Here</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-6 mb-3 mb-sm-0 mx-auto">
      <div class="card custom-card" style="width: 50%;">
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


@include('components.footer')
@endsection