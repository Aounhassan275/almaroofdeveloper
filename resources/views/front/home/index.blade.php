<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="AL MAROOF DEVELOPER BUILDERS : Home" />
	
	<!-- OG -->
	<meta property="og:title" content="AL MAROOF DEVELOPER BUILDERS : Home" />
	<meta property="og:description" content="AL MAROOF DEVELOPER BUILDERS : Home" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>HOME | AL MAROOF DEVELOPER BUILDERS </title>
	
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
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/revolution/css/navigation.css')}}">
	<!-- REVOLUTION SLIDER END -->	
</head>
<body >
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">
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
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="{{url('/')}}"><img src="{{asset('logo-1.png')}}" alt=""></a>
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
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				<div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
					<ul>	<!-- SLIDE  -->
						@foreach(App\Models\Slider::orderBy('display_order')->get()->all() as $key => $slider)
						<li data-index="rs-100" 
							data-transition="parallaxvertical" 
							data-slotamount="default" 
							data-hideafterloop="0" 
							data-hideslideonmobile="off" 
							data-easein="default" 
							data-easeout="default" 
							data-masterspeed="default" 
							data-thumb="error-404.html" 
							data-rotate="0" 
							data-fstransition="fade" 
							data-fsmasterspeed="1500" 
							data-fsslotamount="7" 
							data-saveperformance="off" 
							data-title="A STUDY ON HAPPINESS" 
							data-param1="" data-param2="" 
							data-param3="" data-param4="" 
							data-param5="" data-param6="" 
							data-param7="" data-param8="" 
							data-param9="" data-param10="" 
							data-description="Science says that Women are generally happier">
							<!-- MAIN IMAGE -->
							<img src="{{asset($slider->image)}}" alt="" 
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat" 
								data-bgparallax="10" 
								class="rev-slidebg" 
								data-no-retina />
								
							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper " 
								id="slide-100-layer-1" 
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-type="shape" 
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>	
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme" 
								id="slide-100-layer-2" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['250','250','250','240']" 
								data-fontsize="['50','50','50','30']"
								data-lineheight="['55','55','55','35']"
								data-width="full"
								data-height="none"
								data-whitespace="normal"
								data-type="text" 
								data-responsive_offset="on" 
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
								{{$slider->title}}
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-100-layer-3" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['210','210','210','210']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
									{{-- Batter Education For A Better  --}}
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
								id="slide-100-layer-4" 
								data-x="['center','center','center','center']" 
								data-hoffset="['0','0','0','0']" 
								data-y="['top','top','top','top']" 
								data-voffset="['320','320','320','290']" 
								data-width="['800','800','700','420']"
								data-height="['100','100','100','120']"
								data-whitespace="unset"
								data-type="text" 
								data-responsive_offset="on"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
								{{$slider->description}}
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption Newspaper-Button rev-btn " 
								id="slide-100-layer-5" 
								data-x="['center','center','center','center']" 
								data-hoffset="['90','80','75','90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
								style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;"><a href="{{route('about_us.index')}}" style="color:white;"> READ MORE </a></div>
							<div class="tp-caption Newspaper-Button rev-btn" 
								id="slide-100-layer-6" 
								data-x="['center','center','center','center']" 
								data-hoffset="['-90','-80','-75','-90']" 
								data-y="['top','top','top','top']" 
								data-voffset="['400','400','400','420']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button" 
								data-responsive_offset="on" 
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								data-paddingtop="[12,12,12,12]"
								data-paddingright="[30,35,35,15]"
								data-paddingbottom="[12,12,12,12]"
								data-paddingleft="[30,35,35,15]"
								style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;"><a href="{{route('contact_us.index')}}"> CONTACT US</a></div>
						</li>
						@endforeach
						<!-- SLIDE  -->
					</ul>
				</div><!-- END REVOLUTION SLIDER -->  
			</div>  
		</div>  
        <!-- Main Slider -->
		<div class="content-block">
            
			<!-- Our Services -->
			<div class="section-area content-inner service-info-bx">
                <div class="container">
					<div class="row">
						@foreach(App\Models\Service::orderBy('display_order')->get()->take(3) as $key => $service)
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="{{asset($service->image)}}" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-book text-primary"></i>
									</div>
									<h4><a href="{{route('service.show',str_replace(' ', '_',$service->title))}}">{{$service->title}}</a></h4>
									<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="text-center" style="margin-top:15px;margin-bottom:15px;">
						<a href="{{route('service.index')}}" class="btn">View All Services</a>
					</div>
				</div>
            </div>
            <!-- Our Services END -->
			
			
			<!-- Testimonials -->
			<div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
					<div class="row">
						<div class="col-md-12 text-white heading-bx left">
							<h2 class="title-head text-uppercase">what people <span>say</span></h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
					</div>
					<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						@foreach(App\Models\Review::all() as $review)
						<div class="item">
							<div class="testimonial-bx">
								<div class="testimonial-thumb">
									<img src="{{asset($review->image)}}" alt="">
								</div>
								<div class="testimonial-info">
									<h5 class="name">{{$review->name}}</h5>
									<p>-{{$review->position}}</p>
								</div>
								<div class="testimonial-content">
									<p>{!! $review->message !!}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- Testimonials END -->
			
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
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
							{{-- <div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Pages</h5>
									<ul>
										<li><a href="{{route('subject.index')}}">Subject</a></li>
										<li><a href="{{route('tuition.index')}}">Tuition</a></li>
										<li><a href="{{route('resources.index')}}">Resource</a></li>
										<li><a href="{{route('news.index')}}">News</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Pages</h5>
									<ul>
										<li><a href="{{route('category.index')}}">Blog Category</a></li>
										<li><a href="{{route('blog.index')}}">Blogs</a></li>
										<li><a href="{{route('covid_information.index')}}">Covid Information</a></li>
									</ul>
								</div>
							</div> --}}
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
    <button class="back-to-top fa fa-chevron-up" ></button>
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
<!-- Revolution JavaScripts Files -->
<script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"assets/vendors/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},
				
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});	
</script>
</body>

</html>
