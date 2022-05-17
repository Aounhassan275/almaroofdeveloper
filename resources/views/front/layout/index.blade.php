<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	

	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	@yield('title')
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/assets.css')}}">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/typography.css')}}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/shortcodes/shortcodes.css')}}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.css')}}">
  @toastr_css

</head>
<body id="bg">
<div class="page-wraper">
    @php
    $information = App\Models\Information::find(1);
    @endphp
	<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav">
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex justify-content-between">
            <div class="topbar-left">
              <ul>
                <li><a href="tel:{{@$information->phone}}"><i class="fa fa-phone"></i>{{@$information->phone}}</a></li>
                <li><a href="mailto:{{@$information->email}}"><i class="fa fa-envelope-o"></i>{{@$information->email}}</a></li>
              </ul>
            </div>
            <div class="topbar-right">
              <ul>
                <li><a href="{{@$information->fb}}" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{@$information->insta}}" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                <li><a href="{{@$information->twitter}}" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{@$information->pt}}" class="btn-link"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone={{$information->phone}}" class="btn-link"><i class="fa fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
		  <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
          <div class="container clearfix">
            <!-- Header Logo ==== -->
            <div class="menu-logo">
              <a href="{{url('/')}}"><img src="{{asset('logo-2.png')}}" alt=""></a>
            </div>
					  <!-- Mobile Nav Button ==== -->
            <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
            </button>
					  <!-- Author Nav ==== -->
					  <!-- Navigation Menu ==== -->
            <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
              <div class="menu-logo">
                <a href="{{url('/')}}"><img src="{{asset('logo-2.png')}}" alt=""></a>
              </div>
              <ul class="nav navbar-nav">	
                <li class="{{Request::is('/')?'active':''}}"><a href="{{url('/')}}">Home </a>
                </li>
                <li class="add-mega-menu {{Request::is('services')?'active':''}}"><a href="{{route('service.index')}}">Services </a>
                </li>
                <li class="add-mega-menu {{Request::is('about_us') }}"><a href="{{route('about_us.index')}}">About Us </a>
                </li>
                <li class="add-mega-menu {{Request::is('contact_us') }}"><a href="{{route('contact_us.index')}}">Contact Us </a>
                </li>
                <li class="add-mega-menu {{Request::is('privacy_policy') }}"><a href="{{route('privacy_policy.index')}}">Privacy Policy </a>
                </li>
              </ul>
              <div class="nav-social-link">
                <a href="{{@$information->fb}}"><i class="fa fa-facebook"></i></a>
                <a href="{{@$information->insta}}"><i class="fa fa-instagram"></i></a>
                <a href="{{@$information->twitter}}"><i class="fa fa-twitter"></i></a>
                <a href="{{@$information->pt}}"><i class="fa fa-pinterest"></i></a>
                <a href="https://api.whatsapp.com/send?phone={{$information->phone}}"><i class="fa fa-whatsapp"></i></a>
              </div>
            </div>
					  <!-- Navigation Menu END ==== -->
          </div>
        </div>
      </div>
    </header>
    <!-- header END ==== -->
    <!-- Inner Content Box ==== -->
    <div class="page-content">
      @yield('content')
        <!-- Page Heading Box ==== -->
      
		<!-- Page Content Box END ==== -->
    </div>
    <!-- Inner Content Box END ==== -->
    <!-- Footer ==== -->
    <footer>
      <div class="footer-top">
        <div class="pt-exebar">
          <div class="container">
            <div class="d-flex align-items-stretch">
              <div class="pt-logo mr-auto">
                <a href="{{url('/')}}"><img src="{{asset('logo-2.png')}}" alt=""/></a>
              </div>
              <div class="pt-social-link">
                <ul class="list-inline m-a0">
                  <li><a href="{{$information->fb}}" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="{{$information->twitter}}" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="{{$information->pt}}" class="btn-link"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="{{$information->insta}}" class="btn-link"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://api.whatsapp.com/send?phone={{$information->phone}}" class="btn-link"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
              <div class="widget">
                <h5 class="footer-title">About Us</h5>
                <p class="text-capitalize m-b20">
                  {!! substr( $information->about, 0, 140) !!}...
                </p>
                <div class="pt-btn-join">
                  <a href="{{route('about_us.index')}}" class="btn ">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-5 col-md-7 col-sm-12">
              <div class="row">
                <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="widget footer_widget">
                    <h5 class="footer-title">Pages</h5>
                    <ul>
                      <li><a href="{{url('/')}}">Home</a></li>
                      <li><a href="{{route('about_us.index')}}">About</a></li>
                      <li><a href="{{route('contact_us.index')}}">Contact</a></li>
                      <li><a href="{{route('service.index')}}">Services</a></li>
                      <li><a href="{{route('privacy_policy.index')}}">Privacy Policy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
              <div class="widget footer_widget">
                <h5 class="footer-title">Top Services</h5>
                  <ul >
                    @foreach(App\Models\Service::orderBy('display_order')->get()->take(4) as $service)
                    <li>
                      <a href="{{route('service.show',str_replace(' ', '_',$service->title))}}" >
                        {{$service->title}}
                      </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center">All Right Reserved @ <a target="_blank" href="{{url('/')}}">almaroofdeveloperbuilders.com</a></div>
              </div>
          </div>
      </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
</div>
<!-- External JavaScripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{asset('assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{asset('assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{asset('assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{asset('assets/vendors/masonry/filter.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/contact.js')}}"></script>
{{-- <script src='{{asset('assets/vendors/switcher/switcher.js')}}'></script> --}}
<script src="{{asset('front/toastr.js')}}"></script>
    @toastr_render
    @toastr_js
</body>


</html>
