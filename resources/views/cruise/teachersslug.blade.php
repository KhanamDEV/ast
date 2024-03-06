@extends('cruise.layouts.cruise')
@section('title',$dataview->title.' Teachers - Asia School Tours')
@section('description', $dataview->title.' - Asia School Tours')
@section('metatitle', $dataview->title.' Teachers - Asia School Tours')
@section('content')
<?php 
if(empty($dataview->title)){

       header("Location: " . URL::to('/'), true, 302);
       exit();
  
}
 ?>

<section class="hohohu st-header-pj">
    <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/Vietnam2.jpg') }}">
    <div class="container">
      <div style="position: absolute;bottom: 0">
        <h1 class="text-white">Teachers</h1>
<ul class="nav nav-pills" style="font-size: 1rem">
  <li class="nav-item pr-1">
    <a class="nav-link" href="{{url('/teachers')}}">Teachers</a>
  </li>
  <?php 
   // krsort($dataview1);
    foreach ($dataview1 as $keydataviewtab => $valuedataviewtab) {
   ?>
  <li class="nav-item pr-1">
<a class="nav-link {{ ($valuedataviewtab->slug == $dataview->slug)?'active':' '}}" href="{{url('/teachers/'.$valuedataviewtab->slug)}}"  >{{$valuedataviewtab->title}}</a>
  </li>
<?php } ?>

</ul>
</div>
    </div>
  </div>
</section>

<style type="text/css" media="screen">
  .card {
        border-radius: 0;
    border-left: none;
    border-right: none;
    border-top: none;
    border-bottom: 1px solid #06af8f;
}

div#headingTwo {
    background: #fff;
    padding: 0px;
}
/*#accordion p,.title-hd-sc h5 {
    text-indent: 30px;
}
#accordion p::first-letter{
  font-size: 130%;
  font-weight: bold;
}
.mauxanh {
    color: #06af8f;
}*/
</style>
<section class="content-res login-form-margin" style="background-color: #fff">
<div class="container">
 <!-- <h2 class="mauxanh">{{$dataview->title}}</h2> -->
  <div class="title-hd-sc pb-1">
    <!-- <h5 style="font-weight: 400;line-height: 1.3;letter-spacing: -0.5px;"></h5> -->
   
  </div>
  
</div>

  <div class="container">
    <div class=" row">
      
    
  <div id="accordion" class="col-md-6">

{!! $dataview->body !!}
<?php 
if(!empty($dataview->itinerary)){
foreach ($dataview->itinerary as $key => $valueold_itine) {
  if(!empty($valueold_itine->itinerary_name)){
 ?>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0"> 
        <a class="btn btn-link collapsed mauxanh font-weight-bold w-100 text-left text-uppercase" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <?php echo $valueold_itine->itinerary_name ?>
           <i class="fas float-right fa-chevron-down"></i>
        </a>
       
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
            <blockquote class="blockq1uote">
              <?php
      //   echo  $valueold_itine->itinerary_detail;
             echo str_replace("<>","<br/>", $valueold_itine->itinerary_detail);
              ?>
            </blockquote>
      </div>
    </div>
  </div>
  <?php } ?>
<?php } ?>
<?php } ?>

  </div>
  <div class="col-md-6">
      <?php 
          $data_image_slite = '';
            if(!empty($dataview->imageup)){
                    $data_image_slite = json_decode($dataview->imageup,TRUE);
                 }
           ?>
          <img class="card-img-top" src="https://b2b.tweetworldtravel.com.au/images/add/<?php echo str_replace('cruise','',str_replace('undefined','',end($data_image_slite)))?>" alt="{{$dataview->title}}">
        
  </div>
</div>
</div>
</section>
@endsection

@section('jsmain')


@endsection