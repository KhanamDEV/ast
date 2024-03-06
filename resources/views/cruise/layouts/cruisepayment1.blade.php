<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta name="description" content="Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money. ">
  <meta name="author" content="">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
  <title>Worldwide River Cruises</title>
  <!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/twtstyle.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div class="sticky-top">
<div class="nav-on-top clearfix" style="background-color: #22374e;padding-right: 35px;padding-left: 35px;margin-right: auto; margin-left: auto;">
  <ul class="nav float-left pl-3">
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


  <ul class="nav float-right fix-nav-top-1 pr-3">
    
   <li class="nav-item pr-4">
    <a class="nav-link text-white" href="#"><i class="far fa-envelope" style="font-size: .8rem;position: relative;top: 1px;"></i> <span>Contact Us</span></a>
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

<div class="cus-dr-t-mn p-0 dropdown-menu" aria-labelledby="navbarDropdown1li">
   
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

<a href="#" id="back-to-top" title="Back to top"><i class="fas fa-arrow-up chutwt"></i></a>



<section class="news-twt" style="border-bottom: 3px solid #fff;border-top: 3px solid #fff;">
  <div class="container-fluid text-white py-3">
    <div class="col-md-7 mx-auto">
      <h1 class="text-center py-3" data-aos="flip-down">Why you choose to book with us?</h1>
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
    <h1 class="mauvang text-center py-3">2019/2020 River Cruise Brochures</h1>
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
            <li>In Partnership With CroisiEurope</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
                    <div class="footer-widget ">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/cruise-booking-terms-conditions') }}">TERMS & CONDITIONS</a></li>
                            <li><a href="{{ url('/privacy-policy') }}">PRIVACY POLICY</a></li>
                            <!-- <li><a href="#">USEFUL LINKS</a></li> -->
                            <li><a href="#">TRAVEL ADVICE</a></li>
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
                  <a href="https://www.twitter.com/WRiverCruise" target="_blank"><i class="fab fa-instagram fa-2x mauvang px-4"></i></a>
                  <a href="https://www.instagram.com/worldwiderivercruises" target="_blank"><i class="fab fa-twitter fa-2x mauvang px-4"></i></a>
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
            <div class="modal-body">
                <div class="input-md-bk">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Booking ID">
                        <div class="input-group-append">
                            <button class="btn btn-xanh-twt" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Guest Name">
                        <div class="input-group-append">
                            <button class="btn btn-xanh-twt" type="button">
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
  <a href="{{ url('/') }}" class="float-left text-secondary">Forgot your password ?</a>
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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>



 <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
  $('#inputEdeparture').datepicker({
    format: 'dd/mm/yyyy',
     uiLibrary: 'bootstrap4'
  });

</script>

@yield('jsmain')

  <script>
    AOS.init({
  duration: 400,
});
    $(document).ready(function(){
  $('.pick-date').mask("00/00/0000", {placeholder: "DD/MM/YY"});
});
  </script>




</body>

</html>
