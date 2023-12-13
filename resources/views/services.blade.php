@extends('components.app')
@section('title', 'Services - Health360')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<div class="bg-info-subtle bg-opacity: .5">
  <div class="bg-info-subtle bg-opacity: .5">
    <p class="card-title text-end fw-bold fs-3">Doctor Consultation</p>
    <p class="card-title text-end fw-bold text-break fs-2">Find the Perfect Doctor for You: </p>
    <h2 class="card-title text-end fw-bold mb-5">Expert Care Tailored to Your Needs</h2>
    <p class="card-text text-end fs-5">Experience a new era of well-being, where every click brings you closer to a holistic approach to health and happiness</p>
    <img src="/image/doctor.jpg" alt="doctor's image" class="card-img float-end">
  </div>
</div>

<div class="container">
  <div class="row wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">
    <div class="d-none d-md-block col-md-4" style="margin: auto;">
        <img src="image/Fitur.png" alt="logo">
    </div>

    <div class="services fs-1 fw-medium">
        <span>Services</span>
        <div class="fs-6 fw-normal">Home/Services</div>
    </div>

    <div class="container text-center">
    <p class="midtext text-center fs-6 fw-normal">Only Top Quality Services</p>
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3">Pelanggan itu sangat penting, Maka dari itu pelayanan kami didasarkan pada standar profesionalisme yang baik. Kami memahami bahwa setiap pasien memiliki kebutuhan dan perasaan yang unik, maka dari itu empati adalah inti dari setiap pelayanan kami</div>
    </div>
    <div class="col-6">
      <div class="p-3">Integritas adalah landasan dari setiap keputusan tindakan kami. Kami berkomitmen untuk bertindak dengan jujur dan etis dalam semua situasi</div>
    </div>
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





@extends('components.app')
@section('title', 'Services - Health360')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>




@include('components.footer')
>Click Here</a>
      </div>
    </div>
  </div>
</div>





@endsection