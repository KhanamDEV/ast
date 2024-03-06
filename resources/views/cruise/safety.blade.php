@extends('cruise.layouts.cruise')
@section('title','Safety - Asia School Tours')
@section('description', 'Safety - Asia School Tours')
@section('metatitle', 'Safety - Asia School Tours')
@section('content')



<section class="hohohu st-header-pj">
<img src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/Vietnam2.jpg') }}" class="img-fluid w-100 " alt="Safety - Asia School Tours" style="position: relative;">
  		<div class="container">
  			<div style="position: absolute;bottom: 50px;">
  				<h1 class="text-white" style="text-shadow: 0 0 0.2em rgba(0,0,0,0.6);font-size: 3rem;">Safety</h1>
        </div>
  		</div>
</section>
<div class="container st-header-pj" style="margin-top: -39px;">
<ul class="nav nav-pills" style="font-size: 1rem;position: relative;">
  <li class="nav-item pr-1">
    <a class="nav-link active" href="#">Safety</a>
  </li>
  <?php 
  krsort($dataview);
    foreach ($dataview as $keydataviewtab => $valuedataviewtab) {
   ?>
  <li class="nav-item pr-1">
    <a class="nav-link" href="{{url('/safety/'.$valuedataviewtab->slug)}}">{{$valuedataviewtab->title}}</a>
  </li>
<?php } ?>

</ul>
</div>

<section class="content-res login-form-margin-20" style="background-color: #fff">
<div class="container">
  <div class="title-hd-sc pb-3">
    <h4 style="font-weight: 400;line-height: 1.3;letter-spacing: -0.5px;font-size: 16px;">{!!$dataview1[0]->description!!}</h4>
  </div>

  <div class="row">
        <?php 
   // for ($i=0; $i < 3; $i++) { 
  foreach ($dataview as $keydataview => $valuedataview) {
   
                          $data_name = str_replace(" ","-",$valuedataview->title);
  ?>
  
    <div class="col-md-4 mb-3" style="position: relative;">
    	<div class="card-hv-pj">
      <a href="{{url('/safety/'.$valuedataview->slug)}}">
        <div class="wr-ct-img">
        	<?php 
        	$data_image_slite = '';
        	  if(!empty($valuedataview->imageup)){
                    $data_image_slite = json_decode($valuedataview->imageup,TRUE);
                 }
        	 ?>
          <img class="card-img-top" src="https://b2b.tweetworldtravel.com.au/images/add/<?php echo str_replace('cruise','',str_replace('undefined','',end($data_image_slite)))?>" alt="{{$valuedataview->title}}">
          <div class="header-pj-t"><i class="fas fa-chevron-right" style="position: absolute;right: 5px;font-size: 20px;top: 7px;"></i>
          {{$valuedataview->title}}
          </div>
        </div>
        </a>
        <div class="py-2">

        	<ul class="list-group list-group-flush pb-3">
        	<?php 
        	foreach($valuedataview->itinerary as $key => $valueold_itine) {
        		 if(!empty($valueold_itine->itinerary_name)){
        	 ?>
  				<li class="list-group-item"> <?php echo $valueold_itine->itinerary_name ?></li>
          <?php }
          } ?>
        	</ul>
        	

          <a href="{{url('/safety/'.$valuedataview->slug)}}" class="under-a-st" style="position: absolute;bottom: 0;">FIND OUT MORE</a>
        </div>
        </div>
    </div>
      <?php } ?>
    
</div>
</section>

@endsection

@section('jsmain')


@endsection