@extends('cruise.layouts.cruise')
@section('title','Teachers - Asia School Tours')
@section('description', 'Teachers - Asia School Tours')
@section('metatitle', 'Teachers - Asia School Tours')
@section('content')

<section class="hohohu st-header-pj">
    <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/Vietnam2.jpg') }}">
		<div class="container">
			<div style="position: absolute;bottom: 0">
				<h1 class="text-white">Teachers</h1>
<ul class="nav nav-pills" style="font-size: 1rem">
  <li class="nav-item pr-1">
    <a class="nav-link active" href="#">Teachers</a>
  </li>
  <?php 
  // krsort($dataview);
    foreach ($dataview as $keydataviewtab => $valuedataviewtab) {
   ?>
  <li class="nav-item pr-1">
    <a class="nav-link" href="{{url('/teachers/'.$valuedataviewtab->slug)}}" title="{{$valuedataviewtab->title}}">{{$valuedataviewtab->title}}</a>
  </li>
<?php } ?>

</ul>
</div>
		</div>
	</div>
</section>

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
  
    <div class="col-md-4 mb-3">
    	<div class="card-hv-pj">
      <a href="{{url('/teachers/'.$valuedataview->slug)}}">
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
        	//foreach($valuedataview->itinerary as $key => $valueold_itine) {
        		 
        	 ?>
  				<li class="list-group-item"> <?php //echo $valueold_itine->itinerary_name ?></li>
        	<?php //} ?>
        	</ul>
        	

          <a href="{{url('/teachers/'.$valuedataview->slug)}}" class="under-a-st">FIND OUT MORE</a>
        </div>
        </div>
    </div>
      <?php } ?>
    
</div>
</section>

@endsection

@section('jsmain')


@endsection