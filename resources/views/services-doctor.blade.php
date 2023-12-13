@extends('components.app')
@section('title', 'Doctor Consultation - Health360')
@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<div class="container-fluid doctor-container mt-6">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div style="text-align:end;">
                <h5 class="">Doctor Consultation</h5>
                <h2>Find the Perfect Doctor for You:</h2>
                <h2>Care Tailored to Your Needs</h2>
                <p>Experience healthcare that revolves around you. Connect with our team of doctors, each committed to understanding and addressing your individual needs.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="image/doctor.jpg" alt="logo" class="img-fluid">
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