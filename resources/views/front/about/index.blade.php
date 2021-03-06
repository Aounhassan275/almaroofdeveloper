@extends('front.layout.index')
@section('title')
<title>ABOUT US | AL MAROOF DEVELOPER BUILDERS</title>

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<!-- DESCRIPTION -->
<meta name="description" content="EduChamp : Education HTML Template" />

<!-- OG -->
<meta property="og:title" content="EduChamp : Education HTML Template" />
<meta property="og:description" content="EduChamp : Education HTML Template" />
<meta property="og:image" content="" />
@endsection
@section('content')
@php
$information = App\Models\Information::find(1);
@endphp
<div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner2.jpg')}});">
    <div class="container">
      <div class="page-banner-entry">
        <h1 class="text-white">About Us</h1>
      </div>
    </div>
</div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>About Us </li>
            </ul>
        </div>
    </div>
    <!-- Page Heading Box END ==== -->
    <!-- Page Content Box ==== -->
<div class="content-block">
  <div class="section-area section-sp2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 heading-bx left">
          <h2 class="title-head text-uppercase">About <span>Us</span></h2>
              {!! $information->about !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection