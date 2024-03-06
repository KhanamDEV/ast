@extends('cruise.layouts.cruise')
@section('title','Mock')
@section('description', 'Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money.')
@section('metatitle', 'Mock')
@section('content')

<section class="hohohu st-header-pj">
    <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="{{ asset('img/MS-Loire-Princesse-Loire-profil03-CroisiEurope©CroisiEurope.jpg') }}">
    <div class="container">
      <div style="position: absolute;bottom: 0;margin-bottom: 40px;">
        <h1 class="text-white">Community Projects</h1>
</div>
    </div>
</div>
</section>
<div class="container st-header-pj" style="margin-top: -40px;">
<ul class="nav nav-pills" style="font-size: 1rem;position: relative;">
  <li class="nav-item pr-1">
    <a class="nav-link active" href="#">All project types</a>
  </li>
  <li class="nav-item pr-1">
    <a class="nav-link " href="#">Community</a>
  </li>
  <li class="nav-item pr-1">
    <a class="nav-link" href="#">Conservation</a>
  </li>
  <li class="nav-item pr-1">
    <a class="nav-link" href="#">Field Study</a>
  </li>
    <li class="nav-item" style="position: absolute;right: 0;bottom: 0">
    <a class="nut-nen-vang" href="#">Enquire</a>
  </li>
</ul>
</div>
<section class="content-res login-form-margin-20 st-card-comu" style="background-color: #fff">
<div class="container">
  <div class="title-hd-sc pb-5">
    <h4 style="font-weight: 400;line-height: 1.3;letter-spacing: -0.5px;">Choose one of our community projects to provide your pupils with an engaging opportunity as part of an overseas adventure. Projects can take the format of redecorating a school, refurbishing classrooms and building recreational facilities. Or, can be community based to help improve rural infrastructure, build sustainable structures and support agricultural practices.</h4>
  </div>
  <div class="row">
    <?php 
    for ($i=0; $i < 5; $i++) { 
  
     ?>
    <div class="col-md-6 col-lg-4">
    	 <a href="{{url('/projects/namibia-rural-school-development')}}">
        <div class="wr-ct-img" style="position: relative;">
         
          <div class="header-pj-t">Namibia: Rural School Development</div>
           <img class="card-img-top" src="https://www.schoolsworldwide.co.uk/images/teasers/cat_conservation_teaser.jpg" alt="Card image">
        </div>
    </a>
        <ul class="list-group list-group-horizontal mt-1 justify-content-center">
          <li class="list-group-item">
              <span class="flag-icon flag-icon-na icon-sz-commu d-flex"></span>
            <span class="span_flag">Namibia</span>
          </li>
          <li class="list-group-item">
              <div class="when-t"> 
                <p class="m-0">JAN - DEC</p>       
              </div>
            <span class="span_flag">When</span>
          </li>
          <li class="list-group-item">
              <div class="day-t">     
                <p  class="m-0 mx-auto">4-7</p>
              </div>
            <span class="span_flag">days</span>
          </li>
          <li class="list-group-item">
              <div class="icon-t">
              <i class="far fa-handshake mx-auto" style="font-size: 30px;color:#411154;"></i>           
              </div>
            <span class="span_flag">Community</span>
          </li>
        </ul>
       
        <div class="py-2 div_content_flag">
          <p class="card-text pb-3">Namibia is a stunning country with a rich cultural heritage, dramatic scenery and vibrant communities. This project will bring you into a community with fantastic opportunities for cultural exchanges.</p>
          <a href="#" class="under-a-st">FIND OUT MORE</a>
        </div>
    </div>
  <?php } ?>
  
    
    
  </div>
</div>
</section>

@endsection

@section('jsmain')


@endsection