@extends('components.app')
@section('title', 'Appointment Booking - Health360')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<div class="container-fluid doctor-container mt-6">
    <div class="row align-items-center">
        
        <div class="col-md-6">
            <img src="image/doctor.jpg" alt="logo" class="img-fluid">
        </div>

        <div class="col-md-6">
            <div style="text-align:end;">
                <h5 class="">Appointment Booking</h5>
                <h2>Schedule Your Next Check-Up: Seamless </h2>
                <h2>Appointment Booking at Your Fingertips</h2>
                <p>Because your time is precious. Streamline your healthcare journey with our easy and efficient appointment booking system.</p>
            </div>
        </div>

    </div>
</div>


<style>
    .doctor-container{
        background-color: #51CCC1;
    }

</style>

@include('components.footer')
@endsection