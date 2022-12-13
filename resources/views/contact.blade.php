@extends('layouts.master')
@section('page-title')
Contact 
@endsection
@section('mainContent')
<div class="contact">
<section class="main-sec">
<div class="container">
    <div class="row">
    <div class="col-12">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
        </nav>
    </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="top-head">
        <h1>Contact</h1>
        <img src="/frontend/assets/img/underline.png">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="left-content">
        @if (\Session::has('success_contact'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success_contact') }}</p>
          </div><br />
        @endif
        <form method="post" action="{{route('contact.store')}}" >
        @csrf
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label>Full Name*</label>
                <input class="form-control" name="name" required="" type="text" placeholder="Your Full Name">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label>Full Email*</label>
                <input class="form-control" type="email" name="email" required="" placeholder="Your Email Address">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label>Phone Number*</label>
                <input class="form-control" type="number" name="phone" placeholder="Your Phone number">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label>Your Subject*</label>
                <select class="form-select" required="" name="subject" aria-label="Default select example">
                    <option value="">Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>Message</label>
                <textarea class="form-control" name="description" placeholder="Your Message Here"></textarea>
            </div>
        </div>
        <div class="contact-btn">
            <a href="#"><button type="subject" class="btn btn-light">Submit</button></a>
        </div>
        </form>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="rigt-content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3623.666781996987!2d46.62785951484922!3d24.738317556234918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sexit%202%20hittin%20riyadh%20saudiarabia%20near%20Prince%20Turki%20Ibn%20Abdulaziz%20Al%20Awwal%20Rd%2C%20Riyadh%20Saudi%20Arabia!5e0!3m2!1sen!2s!4v1637083948511!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
</div>
</section>
</div>
@endsection