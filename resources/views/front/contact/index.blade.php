@extends('front.layout.index')
@section('title')
<title>CONTACT US | AL MAROOF DEVELOPER BUILDERS</title>

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<!-- DESCRIPTION -->

@endsection
@section('content')
@php
$information = App\Models\Information::find(1);
@endphp
<div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner2.jpg')}});">
    <div class="container">
      <div class="page-banner-entry">
        <h1 class="text-white">Contact Us</h1>
      </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Contact Us </li>
        </ul>
    </div>
</div>
<!-- Page Heading Box END ==== -->
<!-- inner page banner -->
<div class="page-banner contact-page section-sp2">
  <div class="container">
      <div class="row">
<div class="col-lg-5 col-md-5 m-b30">
  <div class="bg-primary text-white contact-info-bx">
    <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
    <div class="widget widget_getintuch">	
      <ul>
        <li><i class="ti-location-pin"></i>{{$information->address}}</li>
        <li><i class="ti-mobile"></i><a href="tel:{{$information->phone}}" style="color:white;"> {{$information->phone}}</a></li>
        <li><i class="ti-email"></i><a href="mailto:{{$information->email}}" style="color:white;"> {{$information->email}}</a></li>
      </ul>
    </div>
    <h5 class="m-t0 m-b20">Follow Us</h5>
    <ul class="list-inline contact-social-bx">
      <li><a href="{{$information->facebook}}" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
      <li><a href="{{$information->twitter}}" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
      <li><a href="{{$information->insta}}" class="btn outline radius-xl"><i class="fa fa-instagram"></i></a></li>
      <li><a href="{{$information->pt}}" class="btn outline radius-xl"><i class="fa fa-pinterest"></i></a></li>
      <li><a href="https://api.whatsapp.com/send?phone={{$information->phone}}" class="btn outline radius-xl"><i class="fa fa-whatsapp"></i></a></li>
    </ul>
  </div>
</div>
<div class="col-lg-7 col-md-7">
  <form class="contact-bx dzForm" action="{{route('admin.message.store')}}"  method="post">
    @csrf    
    <div class="ajax-message"></div>
    <div class="heading-bx left">
      <h2 class="title-head">Get In <span>Touch</span></h2>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
    </div>
    <div class="row placeani">
      <div class="col-lg-6">
        <div class="form-group">
          <div class="input-group">
            <label>Your Name</label>
            <input name="name" type="text" required class="form-control valid-character">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <div class="input-group"> 
            <label>Your Email Address</label>
            <input name="email" type="email" class="form-control" required >
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="form-group">
          <div class="input-group">
            <label>Subject</label>
            <input name="subject" type="text" required class="form-control">
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="form-group">
          <div class="input-group">
            <label>Type Message</label>
            <textarea name="message" rows="4" class="form-control" required ></textarea>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>
      </div>
    </div>
  </form>
</div>
</div>
  </div>
</div>
<!-- inner page banner END -->
@endsection