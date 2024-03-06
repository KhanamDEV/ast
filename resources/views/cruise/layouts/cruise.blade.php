<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
   
 <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" type='image/x-icon' href="{{ asset('img/favicon.ico') }}"/>
  <link rel="canonical" href="{{url()->current()}}"/>
  <meta http-equiv="Cache-control" content="public">
  <meta http-equiv="Expires" content="30">


<title>@yield('title')</title>
<meta name="title" content="@yield('title')">
<meta name="description" content="@yield('description')">
<meta name="keywords" content="Asian School Tours, Vietnam School Tours, Laos School Tours, Japan School Tours, China School Tours, Cambodia School Tours, Borneo School Tours, Mongolia School Tours, Sri Lanka School Tours, Myanmar School Tours, Educational Tours, Educational Tours for student, Educational student tours" />  

<meta property="og:type" content="Asia School Tours">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="@yield('description')">
<meta property="og:image" content="@yield('metaimage','https://www.asiaschooltour.com.au/img/slide/1566788002.jpg')">
<meta name="google-site-verification" content="EpXZ4rm_HaHOdLaUiwfibBK2mtU2iZFpUqXgLE4ufFE" />

<meta property="twitter:card" content="Asia School Tours">
<meta property="twitter:url" content="{{url()->current()}}">
<meta property="twitter:title" content="@yield('title')">
<meta property="twitter:description" content="@yield('description')">
<meta property="twitter:image" content="@yield('metaimage','https://www.asiaschooltour.com.au/img/slide/1566788002.jpg')">
  <!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/twtstyle.css') }}" rel="stylesheet">
  <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('flag-icon/css/flag-icon.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
@yield('customcss')
<link rel="stylesheet" href="{{ asset('css/hc-offcanvas-nav.css') }}" />
	<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141489781-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141489781-3');
</script> -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0VCPDFCX58"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0VCPDFCX58');
</script>
</head>

<body>

<div class="sticky-top">
<div class="nav-on-top clearfix" style="background-color: rgba(6, 175, 143, 1);margin-right: auto; margin-left: auto;">
  <ul class="nav float-left pl-3" style="margin-left: 35px;">

          <li class="nav-item pl-3" >
          <div style="
    text-align: right;
">
            <p style="
    font-family: 'Dancing Script', cursive;
    color: #fff;
    font-size: 22px;
    /* font-weight: bold; */
    padding: 0;
    margin: 0;
    ">" Travel is Learning, Experience is Knowledge " </p>
            <p style="
    font-family: 'Dancing Script', cursive;
    color: #fff;
    font-size: 20px;
    /* font-weight: bold; */
    padding: 0;
    margin: 0;
    ">- Thuy Carroll</p>
          </div>
       
    </li> 
 
  </ul>


  <ul class="nav float-right fix-nav-top-1 pr-5" style="position: relative;margin-top: 12px;">
    
   <li class="nav-item pr-4">
    <a class="nav-link text-white" href="{{ url('/contactform') }}"> <i class="far fa-envelope" style="font-size: .8rem;position: relative;top: 1px;"></i> <span style="font-weight: 600;font-size: 14px">Contact Us</span></a>
  </li>

<li class="nav-item pr-4 dropdown">
    @if (Auth::check())
   





<div class="dropdown show">
  <a class="dropdown-toggle text-white nav-link" href="#" role="button" id="dropdownMenuLinklg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ Auth::user()->name }}
  </a>

  <div class="dropdown-menu maunentwtx py-0" aria-labelledby="dropdownMenuLinklg" style="font-size: 11px;">
    <a class="dropdown-item text-white" href="{{ url('/my-profile') }}">My Profile</a> 
    <a class="dropdown-item text-white" href="{{ url('/my-bookings') }}">My Booking</a> 
    <?php 
    //<a class="dropdown-item text-white" href="#" data-toggle="modal" data-target="#ctmd">My Booking</a>
     ?>
    <a class="dropdown-item text-white" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }} 
                                        </form>

  </div>
</div>

    @else
   




    @endif
    
  
  </li>
  <li class="nav-item pr-4">
    <a class="nav-link text-white" style="font-weight: 600;font-size: 14px" href="#">ENG | AUD</a>
  </li>


</ul>
</div>

	<div class="m-0 py-2 " style="background-color: #fff;">
  <div class="container-fluid">
       <div class="content-bn row align-items-center" style="height: auto;padding-left:2rem;padding-right: 2rem;">
    	
      <div class="col-md-6 col-6 fix-menu-mb"> 
        <div class="logo-res-tn">
          <a href="{{ url('/') }}"><img style= "width:200px" class="" src="{{ asset('img/logo_asia_school_tours.png') }}" alt="Asia School Tours"></a>
      </div>
      </div>
     
      <div class="col-md-6 col-6 mauvang font-weight-bold text-right"  style="font-size: 1.8rem;position: relative;">


        <img class="hide-w678 pr-2" src="{{ asset('img/phone-icon.png') }}" alt="Asia School Tours" style="width: 35px;margin-bottom: 5px;"><span class="hide-w678 pr-3" style="font-size: 1.8rem">+61 8 7226 1898</span>  

          <div class="hide-mobile" style="position: absolute;top: -32px;right: 20px;"><a class="toggle-mnmb">
            <span></span>
            
          </a></div>
      </div>
    </div>
  </div>
</div>

<h1 style="display: none"> Asia School Tours Specialized in CroisiEurope cruises, powered by Croisi Europe </h1>
	<!-- Navigation -->
 		@include('cruise.module.menu')
  	<!-- Navigation -->
  
</div>

   @yield('content')

<!-- <a href="#" id="back-to-top" title="Back to top"><i class="fas fa-arrow-up chutwt"></i></a> -->



<section class="news-twt" style="border-bottom: 3px solid #fff;border-top: 3px solid #fff;">
  <div class="container-fluid text-white py-3">
    <div class="col-md-7 mx-auto">
      <h2 class="text-center py-3" data-aos="flip-down">Why you choose to book with us?</h2>
<div class="row sty-hv-img">
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/1.png') }}" class="img-fluid" alt="Asia School Tours">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/2.png') }}" class="img-fluid" alt="Asia School Tours">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/3.png') }}" class="img-fluid" alt="Asia School Tours">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/4.png') }}" class="img-fluid" alt="Asia School Tours">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/5.png') }}" class="img-fluid" alt="Asia School Tours">
  </div>    
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/6.png') }}" class="img-fluid" alt="Asia School Tours">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/7.png') }}" class="img-fluid" alt="Asia School Tours">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/8.png') }}" class="img-fluid" alt="Asia School Tours">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/9.png') }}" class="img-fluid" alt="Asia School Tours">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/10.png') }}" class="img-fluid" alt="Asia School Tours">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/11.png') }}" class="img-fluid" alt="Asia School Tours">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/12.png') }}" class="img-fluid" alt="Asia School Tours">
  </div> 
</div>

    </div>
  </div>
</section>



<section class="brochures bg-white pb-3">
  <div class="container-fluid ">
    <h2 class="mauvang text-center py-3">Asia School Tours Brochures</h2>
    <div class="col-md-6 mx-auto">
     <!-- <div class="row"> -->
       <!-- <div class="col-md-6 col-12 pb-3"> -->
          <div class="text-center sty-hv-img">
            <a href="{{ asset('/brochures-collection') }}" target="_blank">
              <img src="{{ asset('img/brochure-image-1.png') }}" class="img-fluid" style="height: 35vh;transition: all 0.4s ease;" alt="Asia School Tours Brochures">
            </a>
          </div>
          <!--<div class="text-center pt-2">
          <a href="{{ asset('/') }}">Asia School Tours</a></div> -->
        
     <!--   <div class="col-md-6 col-12 pb-3">
          <div class="text-center sty-hv-img">
          <a href="{{ asset('/') }}">
            <img src="{{ asset('img/brochure-image-2.png') }}" class="img-fluid" style="height: 35vh;transition: all 0.4s ease;" alt="2019 - Exclusive Intineraries">
          </a>
          </div>
          <div class="text-center pt-2">
          <a href="{{ asset('/') }}">2020 Departures</a></div>
        </div> -->
        
      
      
    </div>
  </div>
</section>
<section class="hohohu1 " style="background: #f3f1f5;">
  <div class="container">
    <h2 class="mauvang text-center py-3">Our Brands</h2>
    <div class="col-md-12 fix-image-brand">
      <div class="row">
               <div class="owl-carousel-smooth111">
                <div class="text-center " >
                    <a href="https://www.asiaschooltour.com.au" target="_blank">
                  <img src="{{ asset('img/logo_asia_school_tours.png') }}" alt="{{ asset('imglogo_asia_school_tours.png') }}" style="height: 80px;"  width="170" height="97" title="asisaschooltour">
                  <div class="fw-divider-space "></div>
                  </a>
                </div>
                <div class="text-center" >
                    <a href="https://www.tweetworldtravel.com.au" target="_blank">
                  <img src="{{ asset('img/tweetworldtravel_logo.png') }}" alt="{{ asset('img/tweetworldtravel_logo.png') }}"  width="170" height="97" title="tweetworldtravel">
                  <div class="fw-divider-space " ></div>
                  </a>
                </div>
                <div class="text-center">
                    <a href="https://www.worldwiderivercruises.com.au" target="_blank">
                  <img src="{{ asset('img/wwc_logo.png') }}" alt="{{ asset('img/wwc_logo.png') }}" style="height: 80px;" width="170" height="97" title="wwc">
                  <div class="fw-divider-space " ></div>
                  </a>
                </div>
                <div class="text-center" >
                    <a href="https://www.tweettours.com/" target="_blank">
                  <img src="{{ asset('img/logo123.png') }}" alt="{{ asset('img/logo.png') }}" width="170" height="97" title="tweettours">
                  <div class="fw-divider-space " ></div>
                  </a>
                </div>

                <div class="text-center ">
                    <a href="https://www.tweetworldcruises.com.au/" target="_blank">
                  <img src="{{ asset('img/logo-twtcruise.png') }}" alt="{{ asset('img/logo-twtcruise.png') }}" width="170" height="97" title="twtcruise">
                  <div class="fw-divider-space "></div>
              </a>
                </div>
             </div>
              </div>
    </div>
  </div>
</section>

<section class="footer py-4" style="background-color: rgba(6, 175, 143, 1);">
  <div class="container" style="font-weight: 500;font-size: 0.9rem;">
    <div class="row text-white">
      <div class="col-md-4">
        <div class="inf-footer">
          <ul class="list-unstyled">
            <li style="font-size: 0.9rem">BUSINESS INFORMATION</li>
            <li>ABN 71 608 371 277</li>
            <li>ATAS Accreditation No: A13040</li>
            <li>CATO Registered Operator No.TO1033</li>
            <li>SETO Operator No. 64612637</li>
            <li>Tweet World Travel Trading as Asia School Tours</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
                    <div class="footer-widget ">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/terms-conditions') }}">TERMS & CONDITIONS</a></li>
                            <li><a href="{{ url('/privacy-policy') }}">PRIVACY POLICY</a></li>
                            <!-- <li><a href="#">USEFUL LINKS</a></li> -->
                            <li><a href="https://www.smartraveller.gov.au/" target ="_blank">TRAVEL ADVICE</a></li>
                            <li><a href="{{ url('/travel-insurance') }}">TRAVEL INSURANCE</a></li>
                            <!-- <li><a href="#">EXCHANGE RATE INFORMATION</a></li> --> 
                            <li><b>Our secure payment method</b></li>
                            <li>
                              <img src="{{ asset('img/lock.png') }}" alt="Tweet World Travel" style="width: 20px;margin-right: 10px;">
                              <img src="{{ asset('img/payment_options.png') }}" alt="payment Tweet World Travel" style="height: 20px;">
                            </li>
                        </ul>
                        
                    </div>
      </div>
      <div class="col-md-4 inf-footer">
        <ul class="list-unstyled">
          <li style="font-size: 0.9rem">CONTACT US</li>
          <li>- Phone: +61 8 7226 1898</li>
          <li>- Email: contact@tweetworldtravel.com.au</li>
          <li>- Address: Tweet World Travel </li>
          <li>&nbsp&nbsp&nbspShop 8 587-591 Magill Rd Magill SA 5072</li>
        </ul>

      </div>
    </div>
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 
                            <div class="social py-3 text-center">
                  <a href="https://www.facebook.com/Tweetworldtravel12/" target="_blank"><i class="fab fa-facebook-f fa-2x mauvang px-4"></i></a>
                  <a href="https://www.instagram.com/tweet_world_travel/" target="_blank"><i class="fab fa-instagram fa-2x mauvang px-4"></i></a>
                  <a href="https://twitter.com/TWorldTravel" target="_blank"><i class="fab fa-twitter fa-2x mauvang px-4"></i></a>
                  <a href="https://www.youtube.com/channel/UCgw2O05QRJb3DEiVDS7RwSg/featured" target="_blank"><i class="fab fa-youtube fa-2x mauvang px-4"></i></a>
               </div>
               <p class="w-100 text-center mt-5" style="margin-top: 30px; width: 65%;margin-left: auto; margin-right: auto;">
                <img src="{{ asset('img/participation1.png') }}" alt="" style="width:50%;background-color: #f8f9fa;border: 2px solid #87929d;padding: 10px 20px;border-radius: 15px;
"></p>
                  <div class="tiny-footer">
                        <p class="m-0 text-white text-center">© Copyright 2020 Asia School Tours</p>
                    </div>
                </div>

            </div>    
  </div>

</section>

<div class="icon-bar">

   <ul class="nav flex-column">
    <li class="nav-item mb-1 maunenxanh">
      <a class="nav-link" href="https://facebook.com/Tweetworldtravel12/" target="_blank"><i class="fab fa-facebook-f text-white font-weight-bold" style="font-size: 1.3rem;"></i></a>
    </li>
        <li class="nav-item mb-1 maunenxanh">
      <a class="nav-link" href="https://www.instagram.com/tweet_world_travel/" target="_blank"><i class="fab fa-instagram text-white font-weight-bold"  style="font-size: 1.3rem;"></i></a>
    </li>
        <li class="nav-item mb-1 maunenxanh">
      <a class="nav-link" href="https://twitter.com/TWorldTravel" target="_blank"><i class="fab fa-twitter text-white font-weight-bold"  style="font-size: 1.3rem;"></i></a>
    </li>
    </li>
        <li class="nav-item mb-1 maunenxanh">
      <a class="nav-link" href="https://www.youtube.com/channel/UCgw2O05QRJb3DEiVDS7RwSg/featured" target="_blank"><i class="fab fa-youtube text-white font-weight-bold"  style="font-size: 1.3rem;"></i></a>
    </li>
  </ul>


</div>

	<!-- popup -->
 		@include('cruise.module.popup')
  	<!-- popup -->

          <nav id="main-nav">
  <ul class="first-nav">
                    <li>
                      <a href="{{ url('/') }}" >HOME</a>
                    </li>
                    <li>
                        <a href="{{ url('/destination') }}"> DESTINATIONS</a>
                        <ul>
                            <li><a href="{{ url('/destination',['Vietnam']) }}">Vietnam</a></li>
                            <li><a href="{{ url('/destination',['Laos']) }}">Laos</a></li>
                            <li><a href="{{ url('/destination',['Cambodia']) }}">Cambodia</a></li>
                            <li><a href="{{ url('/destination',['Japan']) }}">Japan</a></li>
                            <li><a href="{{ url('/destination',['China']) }}">China</a></li>
                            <li><a href="{{ url('/destination',['Myanmar']) }}">Myanmar</a></li>
                            <li><a href="{{ url('/destination',['Malaysia']) }}">Malaysia</a></li>
                            <li><a href="{{ url('/destination',['Sri Lanka']) }}">Sri Lanka</a></li>
                            <li><a href="{{ url('/destination',['Mongolia']) }}">Mongolia</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/trip-types') }}">TRIP TYPES</a>
                        <ul>
                            <li><a href="{{ url('/trip-types',['Explorer-Trips']) }}">Explorer Trips</a></li>
                            <li><a href="{{ url('/trip-types',['Adventure-Trips']) }}">Adventure Trips</a></li>
                            <li><a href="{{ url('/trip-types',['Field-trek-Trips']) }}">Field-trek Trips</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/projects') }}">PROJECTS</a>
                        <ul>
                            <li><a href="{{ url('/projects',['Community-Project']) }}">Community Project</a></li>
                            <li><a href="{{ url('/projects',['Volunteering-Activities']) }}">Volunteering Activity</a></li>
                            <li><a href="{{ url('/projects',['Field-Study-Project']) }}">Field Study Project</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/teachers') }}">TEACHERS</a>
                        <ul>
                            <li><a href="{{ url('/teachers',['whats-involved']) }}">What's Involved?</a></li>
                            <li><a href="{{ url('/teachers',['become-an-escort-teacher']) }}">Become an Escort Teacher</a>
                            <ul>
                                  <li><a href="{{ url('/teachers') }}">Our Consents Management</a></li>
                                  <li><a href="{{ url('/teachers') }}">Our Risks Management</a></li>
                                  <li><a href="{{ url('/',['new-teacher-registration']) }}">Registration To Be a Lead Teacher</a></li>
                              </ul>
                            <li><a href="{{ url('/teachers',['faq']) }}">FAQ</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a href="{{ url('/projects') }}">TEACHERS</a>
                        <ul>
                            <li><a href="{{ url('/teachers',['whats-involved']) }}">What's Involved?</a></li>
                            <li><a href="{{ url('/teachers',['whats-involved']) }}">What's Involved?</a></li>
                            <li><a href="{{ url('/teachers',['teacher-registration']) }}">Become a Lead Teacher</a></li>
                            <ul>
                                  <li><a href="{{ url('/teachers',['Our-Consents-Management']) }}">Our Consents Management</a></li>
                                  <li><a href="{{ url('/teachers',['Our-Risks-Management']) }}">Our Risks Management</a></li>
                                  <li><a href="{{ url('/teachers',['Our-Risks-Management']) }}">Our Risks Management</a></li>
                              </ul>
                            <li><a href="{{ url('/teachers',['about-us']) }}">FAQ</a>

                            </li>
                        </ul>
                    </li> -->
                    <li><a href="{{ url('/safety') }}">SAFETY</a></li>
                    <li><a href="{{ url('/about-us') }}">ABOUT US</a></li>
  </ul>

            <ul class="bottom-nav">
              <li class="github">
                <a class="nav-link" href="https://www.facebook.com/Tweetworldtravel12/" target="_blank"><i class="fab fa-facebook-f mauvang font-weight-bold" style="font-size: 1.4rem;"></i></a>
              </li>
              <li class="email">
                 <a class="nav-link" href="https://www.instagram.com/tweet_world_travel/" target="_blank"><i class="fab fa-instagram mauvang font-weight-bold"  style="font-size: 1.4rem;"></i></a>
              </li>
              <li class="ko-fi">
                <a class="nav-link" href="https://twitter.com/TWorldTravel" target="_blank"><i class="fab fa-twitter mauvang font-weight-bold"  style="font-size: 1.4rem;"></i></a>
                </a>
              </li>
            </ul>

</nav>


</div>
<script type="application/ld+json">
{
    "@context": "http:\/\/schema.org",
    "@type": "TravelAgency",
    "name": "Asia School Tour",
    "email": "contact@tweetworldtravel.com",
    "image":"https://www.asiaschooltour.com.au/img/logo_asia_school_tours.png",
    "url":"https://www.asiaschooltour.com.au/"
}
</script>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>

  <script src="{{ asset('js/pagination.min.js') }}"></script>
   <script src="{{ asset('js/indexcard.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('js/hc-offcanvas-nav.js') }}"></script>

 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
 <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script src="{{ asset('js/twtstyle.js') }}"></script>
<style type='text/css'>

@-moz-document url-prefix() {
     .button-bar {
  right: -245px;
 }
 .form-bar {
  right: -260px;
 }
}
@supports (-ms-ime-align: auto) {
     .button-bar {
  right: -250px;
 }
 .form-bar {
  right: -250px;
 }
}
</style>

<script type="text/javascript">
  $('#inputEdeparture').datepicker({
    format: 'dd/mm/yyyy',
     uiLibrary: 'bootstrap4'
  });
$('#navbarDropdown1').hover(function() {
  $('#winner').show();
  $('.gj-picker ').hover(function() {
    $('#winner').show();
  });
  $( "#winner" ).mouseleave(function() {
    $( "#winner" ).hide();
  });
});

</script>
@yield('jscustom')
@yield('jsmain')

  <script>
    AOS.init({
  duration: 400,
});
    $(document).ready(function(){
  $('.pick-date').mask("00/00/0000", {placeholder: "DD/MM/YYYY"});
});

  </script>

<script>
  (function($) {
          var $main_nav = $('#main-nav');
          var $toggle = $('.toggle-mnmb');

          var defaultData = {
            maxWidth: false,
            customToggle: $toggle,
            navTitle: '<span style="color:rgba(213, 176, 75, 1);font-weight:600;">Asia School Tours<span>',
            levelTitles: false,
            insertBack:true,
            insertClose: true,
            closeLevels: false,
            disableBody: true,
            closeOnClick: true,
          };
          // call our plugin
          var Nav = $main_nav.hcOffcanvasNav(defaultData);
        })(jQuery);
</script>
<script>
        window.__lc = window.__lc || {};
        window.__lc.license = 17041185;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/17041185/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>

</body>

</html>
