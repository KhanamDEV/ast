<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money. ">
  <meta name="author" content="">
 <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
  <link rel="canonical" href="https://worldwiderivercruises.com.au"/>
  <meta http-equiv="Cache-control" content="public">
  <meta http-equiv="Expires" content="30">
  <title>Worldwide River Cruises - Featured Cruises with best value of money</title>
  <!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/twtstyle.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.mmenu.all.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/aos.css') }}" />

	<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141489781-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141489781-1');
</script>
 
</head>

<body>

<div class="sticky-top">
<div class="nav-on-top clearfix" style="background-color: #22374e;margin-right: auto; margin-left: auto;">
  <ul class="nav float-left pl-3" style="margin-left: 35px;">
    <li class="nav-item">
      <a class="nav-link" href="https://www.facebook.com/worldwiderivercruises" target="_blank"><i class="fab fa-facebook-f mauvang font-weight-bold" style="font-size: 1.2rem;"></i></a>
    </li>
        <li class="nav-item pl-3">
      <a class="nav-link" href="https://www.instagram.com/worldwiderivercruises" target="_blank"><i class="fab fa-instagram mauvang font-weight-bold"  style="font-size: 1.2rem;"></i></a>
    </li>
        <li class="nav-item pl-3">
      <a class="nav-link" href="https://www.twitter.com/WRiverCruise" target="_blank"><i class="fab fa-twitter mauvang font-weight-bold"  style="font-size: 1.2rem;"></i></a>
    </li>
  </ul>


  <ul class="nav float-right fix-nav-top-1 pr-1" style="margin-right: 35px;">
    
   <li class="nav-item pr-4">
    <a class="nav-link text-white" href="{{ url('/contactform') }}"> <i class="far fa-envelope" style="font-size: .8rem;position: relative;top: 1px;"></i> <span>Contact Us</span></a>
  </li>
  <!-- <li class="nav-item px-4"> -->
<li class="nav-item px-4 dropdown">
    @if (Auth::check())
   





<div class="dropdown show">
  <a class="dropdown-toggle text-white nav-link" href="#" role="button" id="dropdownMenuLinklg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ Auth::user()->name }}
  </a>

  <div class="dropdown-menu maunentwtx py-0" aria-labelledby="dropdownMenuLinklg" style="font-size: 11px;">
    <a class="dropdown-item text-white" href="{{ url('/my-profile') }}">My Profile</a> 
    <a class="dropdown-item text-white" href="#" data-toggle="modal" data-target="#ctmd">My Booking</a>
    <a class="dropdown-item text-white" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }} 
                                        </form>

  </div>
</div>






    @else
     <!-- <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#modallogin">Login</a> -->

<!-- <li class="nav-item dropdown" style="position: unset;"> -->
            <a  class="nav-link text-white" id="navbarDropdown1li" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" >Login</a>

<div class="cus-dr-t-mn p-0 dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown1li">
   
    <div class="container py-2" style="background-color: #ccc;z-index: 123;">
       <div class="row">
         <div class="col-md-6 pb-3">
          <div class="content-log-bt text-center">
            <p class=" mb-0 pb-1 text-uppercase chutwt font-weight-b600" style="font-size: 13px">for travel agent</p>
           <button type="button" class="btn text-white maunentwtx btn-block" onclick="window.open('https://b2b.tweetworldtravel.com.au/login')">AGENT LOGIN</button>
          </div>
         </div>
         <div class="col-md-6 pb-3">
                    <div class="content-log-bt text-center">
            <p class=" mb-0 pb-1 text-uppercase chutwt font-weight-b600" style="font-size: 13px">FOR CUSTOMER</p>
           <button type="button" class="btn text-white maunentwt btn-block" data-toggle="modal" data-target="#modallogin">LOGIN</button>
          </div>
         </div>
       </div>
</div> 


    @endif
    
    
  </li>
  <li class="nav-item pl-4">
    <a class="nav-link text-white" style="font-weight: 700" href="#">ENG | AUD</a>
  </li>
  <li class="text-right d-none d-sm-block"><img style="margin-top: 0.55rem" src="{{url('img/flag.png')}}" alt=""></li>
</ul>
</div>

	<div class="m-0 py-2 " style="background-color: #fff;">
  <div class="container-fluid">
       <div class="content-bn row align-items-center" style="height: auto;padding-left:2rem;padding-right: 2rem;">
    	
      <div class="col-md-6 col-6 fix-menu-mb">
        <div class="logo-res-tn">
          <a href="{{ url('/') }}"><img class="" src="{{ asset('img/WRC_Logo.png') }}" style="width: 210px;"></a>
      </div>
      </div>
     
      <div class="col-md-6 col-6 mauvang font-weight-bold text-right"  style="font-size: 1.8rem">


        <img class="hide-w678 pr-2" src="{{ asset('img/phone-icon.png') }}" style="width: 35px;margin-bottom: 5px;"><span class="hide-w678 pr-3" style="font-size: 1.8rem">1300 356 391</span>  
        <a href="{{ url('/cart') }}"><img src="{{ asset('img/cart.jpg') }}" style="width: 40px;"><span class="badge text-white maunentwtx" style="position: absolute;font-size: 14px;right: 0px;border-radius: 1rem;"><?php echo Cart::count(); ?></span></a>
      </div>
    </div>
  </div>
</div>


	<!-- Navigation -->
 		@include('cruise.module.menu')
  	<!-- Navigation -->
  
</div>

   @yield('content')
<h1 style="display: none">Worldwide River Cruises</h1>
<a href="#" id="back-to-top" title="Back to top"><i class="fas fa-arrow-up chutwt"></i></a>



<section class="news-twt" style="border-bottom: 3px solid #fff;border-top: 3px solid #fff;">
  <div class="container-fluid text-white py-3">
    <div class="col-md-7 mx-auto">
      <h2 class="text-center py-3" data-aos="flip-down">Why you choose to book with us?</h2>
<div class="row sty-hv-img">
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/1.png') }}" class="img-fluid">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/2.png') }}" class="img-fluid">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/3.png') }}" class="img-fluid">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/4.png') }}" class="img-fluid">
  </div>
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/5.png') }}" class="img-fluid">
  </div>    
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/6.png') }}" class="img-fluid">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/7.png') }}" class="img-fluid">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/8.png') }}" class="img-fluid">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/9.png') }}" class="img-fluid">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/10.png') }}" class="img-fluid">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/11.png') }}" class="img-fluid">
  </div> 
  <div class="col-md-3 col-6 pb-5 px-4">
    <img src="{{ asset('img/icon-homepage/12.png') }}" class="img-fluid">
  </div> 
</div>

    </div>
  </div>
</section>



<section class="brochures bg-white">
  <div class="container-fluid ">
    <h2 class="mauvang text-center py-3">2019/2020 River Cruise Brochures</h2>
    <div class="col-md-6 mx-auto">
      <div class="row">
        <div class="col-md-6 col-12 pb-3">
          <div class="text-center sty-hv-img">
            <a href="{{ asset('/') }}">
              <img src="{{ asset('img/brochure-image-1.png') }}" class="img-fluid" style="height: 35vh;transition: all 0.4s ease;" alt="">
            </a>
          </div>
          <div class="text-center pt-2">
          <a href="{{ asset('/') }}">2019 - Exclusive Intineraries</a></div>
        </div>
        <div class="col-md-6 col-12 pb-3">
          <div class="text-center sty-hv-img">
          <a href="{{ asset('/') }}">
            <img src="{{ asset('img/brochure-image-2.png') }}" class="img-fluid" style="height: 35vh;transition: all 0.4s ease;" alt="">
          </a>
          </div>
          <div class="text-center pt-2">
          <a href="{{ asset('/') }}">2020 Departures</a></div>
        </div>
        </div>
      
      </div>
    </div>
  </div>
</section>


<section class="footer py-4" style="background-color: #22374e;">
  <div class="container" style="font-weight: 500;font-size: 0.9rem;">
    <div class="row text-white">
      <div class="col-md-4">
        <div class="inf-footer">
          <ul class="list-unstyled">
            <li style="font-size: 0.9rem">BUSINESS INFORMATION</li>
            <li>ABN 71 608 371 277</li>
            <li>ATAS Accreditation No: A13040</li>
            <li>CATO Registered Operator No.TO1033</li>
            <li>Tweet World Travel Trading as Worldwide River Cruises</li>
            <li>In Partnership With CroisiEurope <img style="width: 18%;position: absolute;bottom: 10px;right: 120px;" src="{{url('img/logo-croisi.png')}}" ></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
                    <div class="footer-widget ">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/cruise-booking-terms-conditions') }}">TERMS & CONDITIONS</a></li>
                            <li><a href="{{ url('/privacy-policy') }}">PRIVACY POLICY</a></li>
                            <!-- <li><a href="#">USEFUL LINKS</a></li> -->
                            <li><a href="https://smartraveller.gov.au/Pages/default.aspx" target ="_blank">TRAVEL ADVICE</a></li>
                            <!-- <li><a href="#">EXCHANGE RATE INFORMATION</a></li> --> 
                        </ul>
                    </div>
      </div>
      <div class="col-md-4 inf-footer">
        <ul class="list-unstyled">
          <li style="font-size: 0.9rem">CONTACT US</li>
          <li>From Australia: 1300 356 391</li>
          <li>Outside Australia: +61 8 7226 1898</li>
          <li>contact@worldwiderivercruises.com.au</li>
        </ul>

      </div>
    </div>
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 
                            <div class="social py-3 text-center">
                  <a href="https://www.facebook.com/worldwiderivercruises" target="_blank"><i class="fab fa-facebook-f fa-2x mauvang px-4"></i></a>
                  <a href="https://www.instagram.com/worldwiderivercruises" target="_blank"><i class="fab fa-instagram fa-2x mauvang px-4"></i></a>
                  <a href="https://www.twitter.com/WRiverCruise" target="_blank"><i class="fab fa-twitter fa-2x mauvang px-4"></i></a>
               </div>
                  <div class="tiny-footer">
                        <p class="m-0 text-white text-center">© Copyright 2019 Worldwide Cruises</p>
                    </div>
                </div>

            </div>    
  </div>

</section>
<div class="content-bar-silde">
<div class="form-bar">
	<div id="formBody" class="formBody">
		<form action="" method="POST" name="contactForm">
			<div class="wrapper-l-f pr-3 py-2" style="padding-left: 2rem">
					<div id="formHeader" class="formHeader">
            <div class="top-left">
              <div class="fix-trans-box">
		<h5 id="message" class="text-white">ASK A QUESTION</h5></div>
    </div>
	</div>
			<div class="inputContainer pb-2">
				<input type="text" class="form-control rounded-0" id="exampleFormControlInput1" placeholder="Email">
			</div>
			<div class="inputContainer pb-2">
				<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
			</div>
			<button type="button" class="btn btn-primary-tn btn-block">SEND</button>
			</div>
		</form>
	</div>
</div>

<div class="button-bar">
<!-- 	<div class="wrapper-button">
		<button type="button" class="btn sty-bar-button btn-lg mauvang">FIND AN AGENT</button>
    </div> -->
  <div id="formBody" class="formBody py-3">
    <form action="" method="POST" name="contactForm">
      <div class="wrapper-l-f pr-3 py-3" style="padding-left: 2rem">
          <div id="formHeader" class="formHeader">
            <div class="top-left">
              <div class="fix-trans-box">
    <h5 id="message" class="text-white">FIND AN AGENT</h5></div>
    </div>
  </div>
      <div class="inputContainer pb-3">
        <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" placeholder="Postcode / Suburb">
      </div>
      <button type="button" class="btn btn-primary-tn btn-block">Find</button>
      </div>
    </form>
  </div>


</div>
</div>
<div class="modal fade" id="ctmd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MANAGE MY BOOKINGS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <form method="GET" action="/my-booking?code=agentsearch">
            <div class="modal-body">
                <div class="input-md-bk">
                    <div class="input-group mb-3">
                      
                        <input type="text" class="search-query form-control" name="bookingcode" placeholder="Booking ID" autocomplete="off" />
                        <div class="input-group-append">
                            <button class="btn btn-xanh-twt" type="submit">
                                <i class="fa fa-search"></i>
                            </button>

                        </div>
                    </div>
                    <div class="input-group mb-3">
                          <input type="text" class="search-query form-control" name="bookingname" placeholder="Guest Name" autocomplete="off" />
                        <div class="input-group-append">
                            <button class="btn btn-xanh-twt" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bb_content">
                  <?php 
                    $array_count_booking =  App::make("App\Http\Controllers\CartController")->countbooking();
                     $array_count_booking[1] = isset($array_count_booking[1])?$array_count_booking[1]:'0';
                                      $array_count_booking[2] = isset($array_count_booking[2])?$array_count_booking[2]:'0';
                                      $array_count_booking[3] = isset($array_count_booking[3])?$array_count_booking[3]:'0';
                                      $array_count_booking[4] = isset($array_count_booking[4])?$array_count_booking[4]:'0';
                                      $array_count_booking[5] = isset($array_count_booking[5])?$array_count_booking[5]:'0';
                                      $array_count_booking[6] = isset($array_count_booking[6])?$array_count_booking[6]:'0';
                                      $array_count_booking[7] = isset($array_count_booking[7])?$array_count_booking[7]:'0';
                                      $array_count_booking[8] = isset($array_count_booking[8])?$array_count_booking[8]:'0';
                                      $array_count_booking[9] = isset($array_count_booking[9])?$array_count_booking[9]:'0';
                                      $array_count_booking[10] = isset($array_count_booking[10])?$array_count_booking[10]:'0';
                                      $array_count_booking[11] = isset($array_count_booking[11])?$array_count_booking[11]:'0';
                                      $array_count_booking[12] = isset($array_count_booking[12])?$array_count_booking[12]:'0';
                                      $array_count_booking[13] = isset($array_count_booking[13])?$array_count_booking[13]:'0';
                                      $array_count_booking[14] = isset($array_count_booking[14])?$array_count_booking[14]:'0';
                                       $array_count_booking[16] = isset($array_count_booking[16])?$array_count_booking[16]:'0';
                   ?>
                              <div class="table-display">
                                      <div class="cell-display div2" style="background: #E8E8E8;">
                        <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_paid_twt.png" alt="" style="width:40px;"></div> PENDING </div>
                   <div class="cell-display">
                        <div class="div3 {{ ($array_count_booking[1] != 0)?'bold':'' }}" >
                          <a href="{{ route('mybooking', ['status' => 1]) }}">Quote <span class="bb_right">{{ isset($array_count_booking[1])?$array_count_booking[1]:'0' }}</span> </a> 
                      </div>
                      <div class="div4 {{ ($array_count_booking[2] != 0)?'bold':'' }}">
                        <a href="{{ route('mybooking', ['status' => 2]) }}">Instant Purchase (Booking Unconfirmed) <span class="bb_right">{{ isset($array_count_booking[2])?$array_count_booking[2]:'0' }}</span></a>
                      </div>
                      <div class="div5 {{ ($array_count_booking[3] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 3]) }}">Amendment Request <span class="bb_right">{{ isset($array_count_booking[3])?$array_count_booking[3]:'0' }}</span></a></div>
                      <div class="div6 {{ ($array_count_booking[4] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 4]) }}">Amendment Declined <span class="bb_right">{{ isset($array_count_booking[4])?$array_count_booking[4]:'0' }}</span></a></div>
                      <div class="div6 {{ ($array_count_booking[5] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 5]) }}">Cancellation Request <span class="bb_right">{{ isset($array_count_booking[5])?$array_count_booking[5]:'0' }}</span></a></div>
                    </div>
                </div>
                <div class="table-display">
                    <div class="cell-display div2" style="background: #E8E8E8;"> <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_unpaid_twt.png" alt="" style="width:40px;"></div> UNPAID </div>
                   <div class="cell-display">
                      <div class="div3 {{ ($array_count_booking[6] != 0)?'bold':'' }}"><a class="disabled" href="{{ route('mybooking', ['status' => 6]) }}">Confirmed Unpaid <span class="bb_right">{{ isset($array_count_booking[6])?$array_count_booking[6]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[7] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 7]) }}">Payment Due In 48 Hours <span class="bb_right">{{ isset($array_count_booking[7])?$array_count_booking[7]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[8] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 8]) }}">Payment Due In 7 Days <span class="bb_right">{{ isset($array_count_booking[8])?$array_count_booking[8]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[9] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 9]) }}">Payment Due In 30 Days <span class="bb_right">{{ isset($array_count_booking[9])?$array_count_booking[9]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[16] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 16]) }}">Quote Accepted <span class="bb_right">{{ isset($array_count_booking[16])?$array_count_booking[16]:'0' }}</span></a></div>
                      
                    </div>
                </div>
                <div class="table-display">
                    <div class="cell-display div2" style="background: #E8E8E8;"> <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_check_twt.png" alt="" style="width:40px;"></div> PAID </div>
                   <div class="cell-display">
                      <div class="div3 {{ ($array_count_booking[10] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 10]) }}">Booking Confirmed (Full Paid) <span class="bb_right">{{ isset($array_count_booking[10])?$array_count_booking[10]:'0' }}</span></a></div>
                      <div class="div3 {{ ($array_count_booking[11] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 11]) }}">Booking Confirmed (Deposit Paid) <span class="bb_right">{{ isset($array_count_booking[11])?$array_count_booking[11]:'0' }}</span></a></div>
                      <div class="div4 {{ ($array_count_booking[12] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 12]) }}">Refund Pending <span class="bb_right">{{ isset($array_count_booking[12])?$array_count_booking[12]:'0' }}</span></a></div>
                      <div class="div5 {{ ($array_count_booking[13] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 13]) }}">Commission Paid <span class="bb_right">{{ isset($array_count_booking[13])?$array_count_booking[13]:'0' }}</span></a></div>
                      <div class="div5 {{ ($array_count_booking[14] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 14]) }}">Commission Unpaid <span class="bb_right">{{ isset($array_count_booking[14])?$array_count_booking[14]:'0' }}</span></a></div>
                    </div>
                </div>
            </div>
            </div>
          </form>
            <div class="modal-footer">
                <button type="button" class="btn button-xanh" data-dismiss="modal">Close</button>
                <a class="btn button-vang" href="{{ url('/my-bookings') }}">View All</a> 
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="modalloginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
  <!-- <div class="container"> -->
    <!-- <div class="row"> -->
      <!-- <div class="col-sm-12 mx-auto"> -->
        <div class="card card-signin">
          <div class="card-body">
            <h5 class="card-title text-center text-dark">Sign In</h5>
          
              <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                 {{ csrf_field() }}
              <div class="form-label-group mb-3">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus style="height: 50px;border-radius: 20px;">
              </div>
              <div class="form-label-group mb-3">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required style="height: 50px;border-radius: 20px;">
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                <label class="custom-control-label text-dark" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-block text-uppercase mauvang maunentwtx" type="submit">Sign in</button>
<div class="clearfix pt-3">
  <a href="{{ url('/password/reset') }}" class="float-left text-secondary">Forgot your password ?</a>
  <a href="{{ url('/register') }}" class="float-right text-secondary">Registration</a>
</div>
            </form>
          </div>
        </div>
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
    </div>
  </div>
</div>

<div class="modal fade fix-showmb-scruise" id="menusearchcruise" tabindex="-1" role="dialog" aria-labelledby="modalsearchcruise" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

 <form action="/search" method="GET">
    <div class="container p-3" style="background-color: #22374e;z-index: 123;">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">DEPARTURE DATE</label>
                    <input type="text" class="form-control rounded-0 pick-date" id="inputEdeparture" name="departure" placeholder="MONTH OF DEPARTURE DATE" autocomplete="off">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Destination/Region</label>
                    <input type="text" class="form-control rounded-0" id="" name="destination" autocomplete="off" placeholder="Destination/Region" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Ship Name</label>
                    <select class="form-control rounded-0" id="shipname" name="shipname"><option value="" selected="selected">All</option><option value="Barge Anne Marie">Barge Anne Marie</option><option value="Barge Daniele">Barge Daniele</option><option value="Barge Deborah">Barge Deborah</option><option value="Barge Madeleine">Barge Madeleine</option><option value="Barge Jeanine">Barge Jeanine</option><option value="Barge Raymonde">Barge Raymonde</option><option value="Era Cruise">Era Cruise</option><option value="Legend">Legend</option><option value="MS La Belle de l Adriatique">MS La Belle de l Adriatique</option><option value="MS Amalia Rodrigues">MS Amalia Rodrigues</option><option value="MS Fernao de Magalhaes">MS Fernao de Magalhaes</option><option value="MS Gil Eanes">MS Gil Eanes</option><option value="MS Infrante Don Henrique">MS Infrante Don Henrique</option><option value="MS Miguel Torga">MS Miguel Torga</option><option value="MS Vasco de Gama">MS Vasco de Gama</option><option value="MS Elbe Princesse">MS Elbe Princesse</option><option value="MS Elbe Princesse II">MS Elbe Princesse II</option><option value="MS Cyrano de Bergerac">MS Cyrano de Bergerac</option><option value="MS France">MS France</option><option value="MS Princesse d'Aquitaine">MS Princesse d'Aquitaine</option><option value="MS La Belle de Cadix">MS La Belle de Cadix</option><option value="MS Loire Princesse">MS Loire Princesse</option><option value="MS Michenlangelo">MS Michenlangelo</option><option value="MS Beethoven">MS Beethoven</option><option value="MS Douce France">MS Douce France</option><option value="MS Europe">MS Europe</option><option value="MS Gerard Schmitter">MS Gerard Schmitter</option><option value="MS La Boheme">MS La Boheme</option><option value="MS Lafayette">MS Lafayette</option><option value="MS Leonard de Vinci">MS Leonard de Vinci</option><option value="MS Modigliani">MS Modigliani</option><option value="MS Mona Lisa">MS Mona Lisa</option><option value="MS Monet">MS Monet</option><option value="MS Symphonie">MS Symphonie</option><option value="MS Victor Hugo">MS Victor Hugo</option><option value="MS Vivaldi">MS Vivaldi</option><option value="MS Camargue">MS Camargue</option><option value="MS Mistral">MS Mistral</option><option value="MS Van Gogh">MS Van Gogh</option><option value="MS Botticelli">MS Botticelli</option><option value="MS Renoir">MS Renoir</option><option value="MS Rhone Princess">MS Rhone Princess</option><option value="MS Seine Princess">MS Seine Princess</option><option value="MS Jacques Cartier">MS Jacques Cartier</option><option value="MS Georgy Chicherin">MS Georgy Chicherin</option><option value="MS Kronstadt">MS Kronstadt</option><option value="MS Lev Tolstoi">MS Lev Tolstoi</option><option value="Ocean Nova">Ocean Nova</option><option value="Paragon">Paragon</option><option value="Rostropovitch">Rostropovitch</option><option value="RV African Dream">RV African Dream</option><option value="RV Indochina Pandaw">RV Indochina Pandaw</option><option value="RV Kalaw">RV Kalaw</option><option value="RV Indochine">RV Indochine</option><option value="RV Indochine II">RV Indochine II</option><option value="RV Lan Diep">RV Lan Diep</option><option value="RV Navigator">RV Navigator</option><option value="RV Princess">RV Princess</option><option value="Stella Australis">Stella Australis</option><option value="Zafiro">Zafiro</option></select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="form-group">
                    <label class="chutrang" for="">DURATION</label>
                    <select class="form-control rounded-0" id="duration" name="duration"><option value="" selected="selected">All</option><option value="1;3">1 - 3 Days</option><option value="3;8">3 - 8 Days</option><option value="9;15">9 - 15 Days</option><option value="16;19">16 - 19 Days</option><option value="20;99">20 Days and Above</option></select>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="form-group">
                    <label class="chutrang" for="">Ship Category</label>
                    <select class="form-control rounded-0" id="shipcategory" name="shipcategory"><option value="" selected="selected">All</option><option value="STD">Standard</option><option value="PREM">Premium</option></select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="chutrang" for="">Price Range</label>
                    <select class="form-control rounded-0" id="duration" name="pricerange"><option value="" selected="selected">All</option><option value="1000;3000">$1000 - $3000</option><option value="3000;5000">$3000 - $5000</option><option value="5000;7000">$5000 - $7000</option><option value="7000;9000">$7000 - $9000</option><option value="9000;11000">$9000 - $11000</option><option value="11000;13000">$11000 - $13000</option><option value="13000;15000">$13000 - $15000</option><option value="15000;17000">$15000 - $17000</option><option value="17000;19000">$17000 - $19000</option><option value="19000;21000">$19000 - $21000</option><option value="21000;23000">$21000 - $23000</option><option value="23000;25000">$23000 - $25000</option><option value="25500;99999999">Over $25,500</option></select>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="form-group">
                    <label class="chutrang" for="">OR/</label>
                    <input type="text" class="form-control rounded-0" id="" name="search" autocomplete="off">
                </div>
            </div>
          <div class="col-md-2 col-6">
                <div class="form-group">
                    <label class="chutrang" for="" style="white-space: nowrap;">Flexi date (+/-days)/</label>
                    <input type="text" class="form-control rounded-0" id="" name="flexidate" autocomplete="off">
                </div> 
            </div>
  <!--         <div class="col-md-6">
              <div class="form-group">
                    <label class="chutrang" for=""></label>
               <button type="submit" class="btn text-white btn-lg btn-block maunentwt" style="margin-top: 6px;padding: 5px;">SEARCH</button>
               </div>
            </div> -->
        </div>   
        <div class="row pt-2">
          <div class="col-8">
            <div class="form-group mb-0">
             
               <button type="submit" class="btn text-white btn-lg btn-block maunentwt" style="padding: 2px;">SEARCH</button>
               </div>
          </div>
                    <div class="col-4">
                      <div class="form-group mb-0">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-dismiss="modal" style="padding: 2px;">Close</button>
                      </div>
          </div>
        </div>

    </div>



 
  </form>
    </div>
  </div>
</div>


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/twtstyle.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('js/smoothscroll.js') }}"></script>
  <script src="{{ asset('js/pagination.min.js') }}"></script>
   <script src="{{ asset('js/indexcard.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>

 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
 <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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

$(function() {
                
                $("#navbarResponsive111").mmenu({
                    navbars: [{
                        // content: [ 'searchfield' ],

                    }],
                    wrappers: [ 'bootstrap4' ],
                     extensions  : [ 'fx-menu-slide', 'shadow-page','pagedim-black', ],

                    }, { });
});
// $( "#winner" ).mouseleave(function() {
//   $( "#winner" ).hide();
// });

</script>

@yield('jsmain')

  <script>
    AOS.init({
  duration: 400,
});
    $(document).ready(function(){
  $('.pick-date').mask("00/00/0000", {placeholder: "DD/MM/YYYY"});
});

  </script>




</body>

</html>
