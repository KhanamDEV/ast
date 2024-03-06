<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
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
<div class="nav-on-top clearfix" style="background-color: #22374e;">
  <ul class="nav float-left pl-3">
    <li class="nav-item pl-3">
      <a class="nav-link" href="#"><i class="fab fa-facebook-f mauvang font-weight-bold" style="font-size: 1.2rem;"></i></a>
    </li>
        <li class="nav-item pl-3">
      <a class="nav-link" href="#"><i class="fab fa-instagram mauvang font-weight-bold"  style="font-size: 1.2rem;"></i></a>
    </li>
        <li class="nav-item pl-3">
      <a class="nav-link" href="#"><i class="fab fa-twitter mauvang font-weight-bold"  style="font-size: 1.2rem;"></i></a>
    </li>
  </ul>
	<ul class="nav float-right">
    
          <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="far fa-envelope" style="font-size: 1.2rem;position: relative;top: 1px;"></i> <span>Contact Us</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">My Account</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" style="font-weight: 700" href="#">ENG | AUD</a>
  </li>
</ul>
</div>

	<div class="m-0 py-2 " style="background-color: #fff;">
  <div class="container-fluid">
    <div class="content-bn row align-items-center" style="height: auto;padding-left:3rem;padding-right: 3rem;">
    	
      <div class="col-md-6 fix-menu-mb">
        <div class="logo-res-tn">
          <a href="{{ url('/') }}"><img class="" src="{{ asset('img/WRC_Logo.png') }}" style="width: 300px;"></a>
      </div>
      </div>
      <div class="col-md-6 mauvang font-weight-bold text-right d-none d-sm-block"  style="font-size: 1.5rem"><img class="" src="{{ asset('img/phone-icon.png') }}" style=""><span style="font-size: 1rem"></span>  1300 739 652</div>
   <!-- <div class="col-md-6" style="text-align:right">
        <img class="" src="img/icon-call.png" style="width: 270px;padding-bottom:10px;">
      </div> -->
    </div>
  </div>
</div>


  
</div>

   @yield('content')

<a href="#" id="back-to-top" title="Back to top"><i class="fas fa-arrow-up chutwt"></i></a>


<section class="footer py-4" style="background-color: #22374e;">
	<div class="container" style="font-weight: 500;font-size: 0.9rem;">
		<div class="row text-white">
			<div class="col-md-4">
				<div class="inf-footer">
					<ul class="list-unstyled">
						<li>BUSINESS INFORMATION</li>
						<li>ABN 71 608 371 277</li>
						<li>ATAS Accreditation No: A13040</li>
						<li>CATO Registered Operator No.TO1033</li>
						<li>Tweet World Travel Trading as Worldwide River Cruises</li>
						<li>Provided by CroisiEurope</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
                    <div class="footer-widget ">
                        <ul class="list-unstyled">
                            <li><a href="#">TERMS & CONDITIONS</a></li>
                            <li><a href="#">PRIVACY POLICY</a></li>
                            <li><a href="#">USEFUL LINKS</a></li>
                            <li><a href="#">TRAVEL ADVICE</a></li>
                            <li><a href="#">EXCHANGE RATE INFORMATION</a></li>
                        </ul>
                    </div>
			</div>
			<div class="col-md-4">
				<ul class="list-unstyled">
					<li>CONTACT US</li>
					<li>From Australia: 1300 739 652</li>
					<li>Outside Australia: +61 8 7226 1898</li>
					<li>contact@worldwiderivercruises.com.au</li>
				</ul>
				<div class="social py-3">
                  <a href="#"><i class="fab fa-facebook-f fa-2x mauvang pr-4"></i></a>
                  <a href="#"><i class="fab fa-instagram fa-2x mauvang pr-4"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x mauvang"></i></a>
               </div>
			</div>
		</div>
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="tiny-footer">
                        <p class="m-0 text-white text-center">© Copyright 2019 Worldwide Cruises</p>
                    </div>
                </div>
            </div>		
	</div>

</section>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/twtstyle.js') }}"></script>
  <script src="{{ asset('js/smoothscroll.js') }}"></script>
  <script src="{{ asset('js/pagination.min.js') }}"></script>
 
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


@yield('jsmain')

  <script>
    AOS.init({
  duration: 400,
});
  </script>




</body>

</html>
