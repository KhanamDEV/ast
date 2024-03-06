@extends('cruise.layouts.cruise')
@section('title',$dataviewdetails->title)

@section('content')

<style type="text/css">
  /*.first-div{
    height: 50vh !important;
  }*/
  span.Specialoffer {
    font-size: 11px;
    background: #fff902;
    color: #00f;
    padding: 0 5px;
    font-weight: 700;
}
#tab-D .btn.btn-booking{
      text-align: center;
    white-space: nowrap;
    vertical-align: middle;
}
#tab-D .table thead th {
    vertical-align: middle;
    font-size: 11px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.first-inner-div p {
    font-size: 20px !important;
}
.post_title{
text-transform: uppercase;
}
.checkboooking{
  display: none;
}
.w3-bar.w3-black {
    margin: 0;
    padding: 0;
}
.tablink:hover{
    cursor: pointer;
}

</style>
<?php 
$image_codever = '';
if(!empty($dataviewdetails->imagecover)){
     $data_image_imagecover = json_decode($dataviewdetails->imagecover,TRUE);
     if(!empty($data_image_imagecover[0])){
      $image_codever = $data_image_imagecover[0];
     }else{
       $image_codever = '';
     }
}
if(!empty($dataviewdetails->briefs)){
$briefpost = json_decode($dataviewdetails->briefs,TRUE);
$data_briefs =  App::make("App\Http\Controllers\CruiseController")->getBriefspost($briefpost[0]);
$data_briefs  = json_decode($data_briefs);
 ?>
<section class="hohohu">
<!-- <div class="parallaxx z1" style="background-image: url('https://b2b.tweetworldtravel.com.au/images/imagecover/{{$image_codever}}');height: 53vh;"> -->
  <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="https://b2b.tweetworldtravel.com.au/images/imagecover/{{$image_codever}}">
  <div class="first-div mobile-hide" style="height: 53vh">
    <a href="">
    <div class="first-inner-div fix-pl-tn btn-8">
      <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">{!! strip_tags($data_briefs->detail) !!} </p>     
    </div>
    </a>
  </div>
</div>
</section>
<?php }else{ ?>
  <?php 
  if(!empty($image_codever)){
   ?>
  
<section class="hohohu">
<!-- <div class="parallaxx z1" style="background-image: url('https://b2b.tweetworldtravel.com.au/images/imagecover/{{$image_codever}}');height: 53vh;"> -->
  <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="https://b2b.tweetworldtravel.com.au/images/imagecover/{{$image_codever}}">
  <div class="first-div" style="height: 53vh">
    <a href="">
    <div class="first-inner-div fix-pl-tn btn-8">
    </div>
    </a>
  </div>
</div>
</section>
<?php } ?>
<?php } ?>
<div class="conent-details my-4">
<div class="container">
             

            
            <div class="my-2"> 
                <nav class="breadcrumb-tn pt-2" aria-label="breadcrumb">
                  <ol class="breadcrumb maune1ntwt d-inline-flex" style="text-transform: capitalize;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="chutwt font-weight-bold">Home</a></li>
                    <?php 
                    $data_breadcrumb =  App::make("App\Http\Controllers\CruiseController")->getBmenu($dataviewdetails->id);
                  //  print_r($data_breadcrumb);
                    if (!empty($data_breadcrumb)) {
                      $dataa_breadcrumb = json_decode($data_breadcrumb,TRUE);
                      $dataaa_breadcrumb = array_reverse($dataa_breadcrumb);
                      foreach ($dataaa_breadcrumb as $keydataa_breadcrumb => $valuedataa_breadcrumb) {
                          $data_name_breadcrumb = str_replace(" ","-",$valuedataa_breadcrumb['name']);
                       ?>
                           <li class="breadcrumb-item"><a href="{{ url('m',[$valuedataa_breadcrumb['ididi'],$data_name_breadcrumb]) }}" class="chutwt font-weight-bold">{{$valuedataa_breadcrumb['name']}} </a></li>
                       <?php
                      }
                    }
                     ?>

                  </ol>
                </nav>
             </div>


<div class="row">
  <div class="col-md-6 pb-3">
<!-- <div class="wrapper-card-dt">
  <img src="https://images.croisieurope.com/media/ee4cd510-1174-4f86-a9b8-7a637604e715/6/france-rhin-chateau-haut-koenigsbourg-leoks" class="w-100 img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
<div class="overlay">From 2,014.00 AUD</div>
</div> -->

<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">

  <div class="carousel-inner">

	<?php 
	if(!empty($dataviewdetails->imageup)){
		 $data_image_slite = json_decode($dataviewdetails->imageup,TRUE);
		  foreach ($data_image_slite as $keyslll => $valueimageslide) {
	 ?>
    <div class="carousel-item <?php echo ($keyslll == 0)?'active':'' ?>">
      <div class="wrapper-card-dt">
  <img src="https://b2b.tweetworldtravel.com.au/images/add/{{$valueimageslide}}" class="w-100 img-fluid rounded" style="height: 40vh;">
<div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated">From {{number_format($dataviewdetails->pricesale)}} AUD</span></div>
</div>
    </div>
   	  <?php } ?>  
	   <?php }else{ ?>
	   	<?php  if (strpos($dataviewdetails->image, 'http') !== false) { ?>
	   	
	   	  	<div class="carousel-item active">
			    <div class="wrapper-card-dt">
				  <img src="{{$dataviewdetails->image}}" class="w-100 img-fluid rounded" style="height: 40vh;">
				<div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated">From {{number_format($dataviewdetails->pricesale)}} AUD</span></div>
				</div>
			</div>
			<?php }else{ ?>
			<div class="carousel-item active">
			    <div class="wrapper-card-dt">
				  <img src="https://b2b.tweetworldtravel.com.au/images/{{$dataviewdetails->image}}" class="w-100 img-fluid rounded" style="height: 40vh;">
				<div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated">From {{number_format($dataviewdetails->pricesale)}} AUD</span></div>
				</div>
			</div>
			<?php } ?>
	   <?php } ?>  
  

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </div>
  <div class="col-md-6 pb-3">
    <div class="content-title-dt">
      <h3 class="post_title">{{$dataviewdetails->title}}</h3>
      <p class="post_detail">{!!html_entity_decode($dataviewdetails->shortdescription)!!}</p>
      <div class="post_detail">{!!html_entity_decode($dataviewdetails->body)!!}</div>
      <div class="post_detail_c">
      <p> <b>Trip code :</b> {{$dataviewdetails->tripcode}}</p>
      <p> <b>Duration :</b> {{$dataviewdetails->duration+1}} days</p>
      <p> <b>Destination :</b> {{$dataviewdetails->destination}}</p>
      <p> <b>Travel Dates :</b>{{$dataviewdetails->traveldates}}</p>
      </div>
    </div>


  </div>
</div>

    <div class="tab-collapse-st my-4">
      <div class="container">
      <div class="row">
        <div class="col-md-2 p-0 mb-3">
<ul class="nav nav-pills flex-column" id="myTab">
  <li class="nav-item">
    <a class="nav-link active slideto-H" id="pill-H" data-toggle="pill" aria-controls="tab-H"  href="#tab-H">Highlights</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  slideto-A" id="pill-A" data-toggle="pill" aria-controls="tab-A"  href="#tab-A">Itinerary</a>
  </li>
  <li class="nav-item">
    <a class="nav-link slideto-B" id="pill-B" data-toggle="pill" aria-controls="tab-B" href="#tab-B">Maps</a>
  </li>
  <li class="nav-item">
    <a class="nav-link slideto-C" id="pill-C" data-toggle="pill" aria-controls="tab-C"  href="#tab-C">Inclusions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link slideto-D" id="pill-D" data-toggle="pill" aria-controls="tab-D"  href="#tab-D">Date & Price</a>
  </li>
  <li class="nav-item">
    <a class="nav-link slideto-E" id="pill-E" data-toggle="pill" aria-controls="tab-E"  href="#tab-E">Cabin & Deck Plans</a>
  </li>
  <li class="nav-item">
    <a class="nav-link slideto-F" id="pill-F" data-toggle="pill" aria-controls="tab-F"  href="#tab-F">Excursions</a>
  </li>    
  <li class="nav-item">
    <a class="nav-link slideto-G" id="pill-G" data-toggle="pill" aria-controls="tabG"  href="#tabG">Terms & Conditions</a>
  </li>    
</ul>  
</div>

        <div id="tab-content" class="col-md-10 tab-content">
           <div id="tab-H" class="tab-pane fade show active slide-H" role="tabpanel" aria-labelledby="pill-H">
                 <?php echo htmlspecialchars_decode($dataviewdetails->highlight); ?>
           </div>
            <div id="tab-A" class="tab-pane fade show slide-A" role="tabpanel" aria-labelledby="pill-A">
              <div class="clearfix">
<div class="float-left">
    <a class="" data-target="#itineraryemail" data-toggle="modal" href="#itineraryemail"><i class="fa fa-envelope chutwt"></i></a>
    <a href="https://b2b.tweetworldtravel.com.au/printItinerary/{{$dataviewdetails->tripcode}}"> <i class="fa fa-print chutwt"></i></a>
</div>

<div class="btn-group float-right" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary mr-1 btn-sty-dt" onclick="myfunction()"><i class="fas fa-arrow-down"></i></button>
  <button type="button" class="btn btn-secondary btn-sty-dt" onclick="myfunction2()"><i class="fas fa-arrow-up"></i></button>
</div>
</div>

<div id="accordion">



  </div>

            </div>
            <div id="tab-B" class="tab-pane fade slide-B" role="tabpanel" aria-labelledby="pill-B">
            	 <?php 
                        if(!empty($dataviewdetails->mapscruise)){
                          ?>
                          <img src="https://b2b.tweetworldtravel.com.au{{ $dataviewdetails->mapscruise }}" alt="" style="height: auto">
                          <?php
                        }else{
                          $data_cruise_maps =  App::make("App\Http\Controllers\CruiseController")->getMapsInCriosiFile($dataviewdetails->tripcode);
                          if(!empty($data_cruise_maps)){
                          	$data_cruise_maps = json_decode($data_cruise_maps,TRUE);
                          	//print_r($data_cruise_maps[$article['tripcode']]['ImageFileMap1']);
                          	$data_map_show = isset($data_cruise_maps[$dataviewdetails->tripcode]['ImageFileMap1'])?$data_cruise_maps[$dataviewdetails->tripcode]['ImageFileMap1']:"";
                          	?>
                          	 <div class="div_map_cruise text-center">
			                     <img src="{{ $data_map_show }}" alt="" style="height: auto" class="img-thumbnail">
			                </div>
                          	<?php

                          }
                        }
                ?>

            </div>
            <div id="tab-C" class="tab-pane fade py-3 pl-3 slide-C" role="tabpanel" aria-labelledby="pill-C">
              <?php echo htmlspecialchars_decode($dataviewdetails->inclusions); ?>
            </div>
            <div id="tab-D" class="tab-pane fade slide-D" role="tabpanel" aria-labelledby="pill-D">

                <?php 
                $data_year = array();
                  $data_cruise_price =  App::make("App\Http\Controllers\CruiseController")->getPricetableCruise($dataviewdetails->tripcode);
                  if(!empty($data_cruise_price)){
                    $data_cruise_priceview = json_decode($data_cruise_price,TRUE);

                  foreach ($data_cruise_priceview as $keydata_cruise_price => $valuedata_cruise_price) {
                    if(!empty($valuedata_cruise_price['startdate'])){
                          $itemstartcheck = \Carbon\Carbon::parse($valuedata_cruise_price['startdate'])->format('Y');
                          $data_year[$itemstartcheck][] = $valuedata_cruise_price;
                    }
                      //$data_year[$itemstartcheck][] = $valuedata_cruise_price;

                    }
                  //  print_r($data_year);
                 ?>

            <div class="w3-bar w3-black clearfix row">
            	<?php 
            	$numcheck_hold = array();
              ksort($data_year);
            	  foreach ($data_year as $keydata_year1 => $valuedata_year1) {
            	  	$numcheck_hold[] = $keydata_year1;
            	 ?>
              <button class="tablink btn-lg btn-block col m-0 maunentwtx text-white bt-active-dt w3-red" onclick="openCity(event,'<?php echo $keydata_year1?>')" style="border: none;border-radius: 0;border-right: 2px solid #fff;" id="defaultOpencity<?php echo $keydata_year1?>"><?php echo $keydata_year1?></button>
        
          		<?php } ?>
            </div> 
 

                 <?php 
                 foreach ($data_year as $keydata_year => $valuedata_year) {
                  
                  ?>
                  <div id="{{$keydata_year}}" class="w3-container w3-border city" <?php echo ($keydata_year == '2019')?'':'style="display:none"'; ?> >
              <table class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th scope="col">Ship</th>
                    <th scope="col">Ship Category</th>
                    <th scope="col">Cabin type</th>
                    <th scope="col">Start date</th>
                    <th scope="col">End date</th>
                    <th scope="col">Price pp twin share</th>
                    <th scope="col">Available Cabins</th>
                    <th scope="col">Special</th>
                    <th style="display:none">Special</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $itemstart = '';
                  $itemend = '';
                  $check = 0;
                  foreach ($valuedata_year as $keydata_cruise_price => $valuedata_cruise_price) {
                    if(!empty($valuedata_cruise_price['startdate'])){
                          $itemstartcheck = \Carbon\Carbon::parse($valuedata_cruise_price['startdate'])->format('Y');
                      }
                   ?>
                  <tr class="text-center">
                    <td scope="row" class="table-dt-st">{{$valuedata_cruise_price['ship']}}</td>
                    <td class="table-dt-st">{{$valuedata_cruise_price['shipcategory']}}</td>
                    <td>{{$valuedata_cruise_price['cabintype']}}</td>
                    <td>
                        <?php 
                        if(!empty($valuedata_cruise_price['startdate'])){
                          echo $itemstart = \Carbon\Carbon::parse($valuedata_cruise_price['startdate'])->format('d/m/Y');

                          $itemstartas = \Carbon\Carbon::parse($valuedata_cruise_price['startdate'])->format('Y-m-d');
                           $today_time = strtotime("2019-08-01");
                            $expire_time = strtotime($itemstartas);
                            if ($expire_time < $today_time) {
                              $check = 1;
                            }else{
                              $check = 0;
                            }
                        }
                         ?>
                    </td>
                    <td>
                     <?php 
                        if(!empty($valuedata_cruise_price['enddate'])){
                          echo $itemend = \Carbon\Carbon::parse($valuedata_cruise_price['enddate'])->format('d/m/Y');
                        }
                         ?> 
                    </td>
                    <td>
                      <span style="
    text-decoration: line-through;
    color: red;
    font-weight: bold;
"><?php
    if ($valuedata_cruise_price['special'] > 1){
  echo number_format($valuedata_cruise_price['pricepptwin']);
}
   ?></span>
                    <?php 

                    if ($valuedata_cruise_price['special'] > 1){
                      $price_oness = $valuedata_cruise_price['special'];
                    }else{
                       $price_oness = $valuedata_cruise_price['pricepptwin'];
                    }
                    if ($valuedata_cruise_price['special'] > 1){
                      $price_one = $valuedata_cruise_price['specialsingle'];
                    }else{
                       $price_one = $valuedata_cruise_price['pricesinge'];
                    }
                     ?>
                      <b>{{ number_format($price_oness)}}</b></td>
                    <td>{{$valuedata_cruise_price['availablecabins']}}</td>
                    <td>
                          <?php if ($valuedata_cruise_price['special'] > 1): ?>
                            <span class="Specialoffer">Special Offer</span>
                          <?php endif ?>
                    </td>
                    <td class="pricetable_text" style="display:none">{{ number_format($price_one)}}</td>
                    <td class="tb-bt-f">
                      <?php 
                      
                  //  print_r($check);
                     if($check == 1){
                       echo '<a class="btn btn-booking btn-secondary" style="font-size: .9rem;padding-left: 2rem;padding-right: 2rem;" data-target="#booknow" data-toggle="modal" href="#booknow">Sold Out</a>';
                     }else{
                      switch ($valuedata_cruise_price['availablecabins']) {
                      	case '1':
                          ?>
                         <a class="btn btn-booking bt-sold-tb booking_cruise_request" style="font-size: .9rem;padding-left: 1.35rem;padding-right: 1.35rem;background: rgba(213, 176, 75, 1) !important;" data-target="#onrequest" data-id="{{$valuedata_cruise_price['id']}}" data-ship="{{$valuedata_cruise_price['ship']}}" data-shipcategory="{{$valuedata_cruise_price['shipcategory']}}" data-cabintype="{{$valuedata_cruise_price['cabintype']}}" data-startdate="{{$itemstart}}" data-enddate="{{$itemend}}" data-price="{{$price_oness}}" data-availablecabins="{{$valuedata_cruise_price['availablecabins']}}" data-pricesinge="{{$price_one}}" data-toggle="modal" href="#onrequest">On Request</a>
                          <?php
                          break;
                        case '0':
                        	 echo '<a class="btn btn-booking btn-secondary" style="font-size: .9rem;padding-left: 2rem;padding-right: 2rem;" data-target="#booknow" data-toggle="modal" href="#booknow">Sold Out</a>';
                           ?>
                          <?php
                          break;
                        default:
                          ?>
                          <a class="btn btn-booking booking_cruise" data-target="#exampleModalLong" data-id="{{$valuedata_cruise_price['id']}}" data-ship="{{$valuedata_cruise_price['ship']}}" data-shipcategory="{{$valuedata_cruise_price['shipcategory']}}" data-cabintype="{{$valuedata_cruise_price['cabintype']}}" data-startdate="{{$itemstart}}" data-enddate="{{$itemend}}" data-price="{{$price_oness}}" data-availablecabins="{{$valuedata_cruise_price['availablecabins']}}" data-pricesinge="{{$price_one}}" data-toggle="modal" href="#exampleModalLong">Book now</a>
                          <?php
                          break;
                      }
                     } 
                       ?>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
              <?php } ?>
            <?php } ?>

              {!! $dataviewdetails->subpricetable !!}
            </div>
            <div id="tab-E" class="tab-pane fade slide-E" role="tabpanel" aria-labelledby="pill-E">

<?php 
     $data_shipdeck =  App::make("App\Http\Controllers\CruiseController")->getShipdeckbyTripcode($dataviewdetails->tripcode);
   //  print_r($data_shipdeck);
   //  die();
     if(!empty($data_shipdeck) && $data_shipdeck != '""'){
 ?>



              <div id="carouselExampleControls1" class="carousel slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner">

                <?php 
                $hihi = 0;
                   $data_shipdeck_image = json_decode($data_shipdeck,TRUE);
                  // print_r($data_shipdeck_image);
              //     die();
                    foreach ($data_shipdeck_image as $keydata_shipdeck_image_data => $valuedata_shipdeck_image_data) {
                      $data_shipdeck_image_show_on = json_decode($valuedata_shipdeck_image_data,TRUE);
                      foreach ($data_shipdeck_image_show_on as $keydata_shipdeck_image => $valuedata_shipdeck_image) {
                 ?>
                  <div class="carousel-item <?php echo ($hihi == 0)?'active':'' ?>">
                    <div class="wrapper-card-dt">
                <img src="https://b2b.tweetworldtravel.com.au/images/shipdesk/{{$valuedata_shipdeck_image['image']}}" class="w-100 img-fluid rounded" style="height: 60vh;">
              <div class="overlay maunentwt fadeInUp animated"><span class="zoomIn delay-1s animated">{{$valuedata_shipdeck_image['caption']}}</span></div>
              </div>
                  </div>
                  <?php  $hihi++ ?>
                    <?php } ?>  
                   <?php } ?>  
                   
                
                

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

                <ol class="carousel-indicators visible-sm-block hidden-xs-block visible-md-block visible-lg-block">
                           <?php 
                             $hoho = 0;
                             $data_shipdeck_image = json_decode($data_shipdeck,TRUE);
                              foreach ($data_shipdeck_image as $keydata_shipdeck_image_data => $valuedata_shipdeck_image_data) {
                                $data_shipdeck_image_show_on = json_decode($valuedata_shipdeck_image_data,TRUE);
                                foreach ($data_shipdeck_image_show_on as $keydata_shipdeck_image1 => $valuedata_shipdeck_image1) {
                           ?>
                           <li data-target="#carouselExampleControls1" data-slide-to="{{$hoho}}" class="<?php echo ($hoho == 0)?'active':'' ?>">
                             <img src="https://b2b.tweetworldtravel.com.au/images/shipdesk/{{$valuedata_shipdeck_image1['image']}}" class="img-responsive" style="width: 80px;height: 60px">
                          </li>
                          <?php  $hoho++ ?>
                         <?php } ?>  
                   <?php } ?> 

                        </ol> 

              </div>
  <?php } ?>



            </div>
            <div id="tab-F" class="tab-pane fade slide-F" role="tabpanel" aria-labelledby="pill-F">
  <?php 
  //dataa get excursion
    $data_excursion =  App::make("App\Http\Controllers\CruiseController")->getExcursionbyTripcode($dataviewdetails->tripcode);
     if(!empty($data_excursion)){
      $data_excursion_view = json_decode($data_excursion,TRUE);
      //print_r($data_excursion_view);
   ?>
<ul class="nav nav-tabs nav-excursion" role="tablist">
  <li class="nav-item w-50">
    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Package</a>
  </li>
  <li class="nav-item w-50">
    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">A la Carte</a>
  </li>
</ul><!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="tabs-1" role="tabpanel">
    <div class="container">
              <div class="content-modal-tn">

        <?php 
        foreach ($data_excursion_view  as $keypackage => $valuepackage) {
        if($valuepackage['AddonType']  == 'Package'){
         ?>

          <div class="row cruise_excursion_tab">
            <div class="col-md-4 pb-3 pr-0">
              <?php 
                $classic = explode(" ", $valuepackage['DetailAddonLabelLong']);
               ?>
               <?php 
                if($classic[0] == 'DISCOVERY'){
               ?>
                <div class="clor_new text-center">
              <?php }else{ ?>
              <!-- clor_new -->
              <div class="clor_new_trip_ab">
              <?php } ?>
              <?php 
            
              echo $classic[0];
               ?>
             </div>
              <div style="height: auto;">
                  <img src="{{$valuepackage['DetailAddonImage']}}" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8 pb-3 pr-0">
              <div class="clor_new_trip_abon">{{$valuepackage['DetailAddonLabelLong']}}
              -  <?php 
                              $yeassr = substr($valuepackage['PricePriceFromDate'], 0,4);
                              echo $yeassr;
                               ?>
                                 
                               </div>
              <div class="row">

                <div class="col-md-8">
                  <p class="fsty-md-l"><?php 
                    echo substr(strip_tags($valuepackage['DetailAddonDescription']),0,200);
                   ?></p>
                </div>
                <div class="col-md-4" style="font-size: 0.8rem;">
                  <p class="mb-0 font-weight-b500">PRICE PER PERSON</p>
                  <p class="mb-0">Pre-paid : <span class="font-weight-b500">{{number_format($valuepackage['PricePrice'],2)}} AUD</span></p>
                  <p class="mb-0">On-board : <span class="font-weight-b500">{{number_format($valuepackage['PricePriceOnBoard'],2)}} AUD</span></p>
                 
                  <div class="bt-bk-md float-right pt-3">
                    <button class="btn btn-booking maunentwt text-white jsseeml" id="div_dian{{$valuepackage['AddonCode']}}" data-code="{{$valuepackage['AddonCode']}}">SEE MORE</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="id_dian_{{$valuepackage['AddonCode']}}" style="display: none">
            <?php 
             foreach ($data_excursion_view  as $keyitempackage => $valueitempackage) {
              if($valueitempackage['AddonCodePackage'] == $valuepackage['AddonCode']){
             ?>
                      <div class="container wrapper-md-bk1">
          <div class="showallaa clearfix"> 
            <div class="float-left font-weight-b500">1 TRIPS OF DAYs</div> 
            <div class="float-right font-weight-b500">{{$valueitempackage['AddonGroup']}}</div> 
          </div>
        <div class="row cruise_excursion_tab">
            <div class="col-md-3 pb-3">
              <div style="height: auto;">
                <img src="{{$valueitempackage['DetailAddonImage']}}" class="img-fluid">
              </div>
            </div>
            <div class="col-md-9 pb-3">
              <div class="clor_new_trip_abon">{{$valueitempackage['DetailAddonLabelLong']}}</div>
              <div class="row">
                <div class="col-md-6">
                  <p class="fsty-md-l">DURATION {{$valueitempackage['DetailAddonDurationHour']}} hours</p>
                </div>
                <div class="col-md-6">
                  <p class="mb-0 font-weight-b500">PRICE PER PERSON</p>
                   <p class="mb-0">Pre-paid : <span class="font-weight-b500">{{number_format($valueitempackage['PricePrice'],2)}} AUD</span></p>
                  <p class="mb-0">On-board : <span class="font-weight-b500">{{number_format($valueitempackage['PricePriceOnBoard'],2)}} AUD</span></p>
               
                </div>
              </div>
            </div>
          </div>
          </div>
          <?php } ?>
              <?php } ?>
          </div>
          </div>
          <?php } ?>
        <?php } ?>
          
        </div>
  
    </div>
  </div>
  <div class="tab-pane" id="tabs-2" role="tabpanel">
    <div class="container">
      <div class="more-content-md pt-3">

          <?php 
         // $data_excursion_view1 = array_unique($data_excursion_view);
        //  print_r($data_excursion_view);
        foreach ($data_excursion_view  as $keyalacarte => $valuealacarte) {
        if($valuealacarte['AddonType']  == 'Miscellaneous'){
         ?>
          <div class="wrapper-md-bk">
          <div class="showallaa clearfix"> 
            <div class="float-left font-weight-b500">1 TRIPS OF DAY</div> 
            <div class="float-right font-weight-b500">{{$valuealacarte['AddonGroup']}}</div> 
          </div>
        <div class="row cruise_excursion_tab">
            <div class="col-md-3 pb-3 pr-0">
              <div style="height: auto;">
                <img src="{{$valuealacarte['DetailAddonImage']}}" class="img-fluid">
              </div>
            </div>
            <div class="col-md-9 pb-3 pr-0">
              <div class="clor_new_trip_abon">{{$valuealacarte['DetailAddonLabelLong']}}- 
                              <?php 
                              $yeassra= substr($valuealacarte['PricePriceFromDate'], 0,4);
                              echo $yeassra;
                               ?></div>
              <div class="row">
                <div class="col-md-8" style="font-size: 0.8rem;">
                  <p><?php 
                    echo substr(strip_tags($valuealacarte['DetailAddonDescription']),0,200);
                   ?></p>
                  <p class="fsty-md-l">DURATION {{$valuealacarte['DetailAddonDurationHour']}} hours</p>
                </div>
                <div class="col-md-4" style="font-size: 0.8rem;">
                  <p class="mb-0 font-weight-b500">PRICE PER PERSON</p>
                  <p class="mb-0">Pre-paid : <span class="font-weight-b500">{{number_format($valuealacarte['PricePrice'],2)}} AUD</span></p>
                  <p class="mb-0">On-board : <span class="font-weight-b500">{{number_format($valuealacarte['PricePriceOnBoard'],2)}} AUD</span></p>
                  <a href="" style="position: absolute;bottom: 0;right: 25px;font-size: 16px;">SEE MORE </a>
                </div>
              </div>
            </div>
          </div>
          </div>
        <?php } ?>
      <?php } ?>

        

          

</div>
    </div>
  </div>

</div>
<?php } ?>

                   
        </div>

         <div id="tabG" class="tab-pane fade py-3 pl-3 slide-G" role="tabpanel" >
          <?php
          if(!empty($dataviewdetails->terms)){

                   echo htmlspecialchars_decode($dataviewdetails->terms);
                 }else{
                    ?>

<section class="content-res login-form-margin">
  <div class="container bg-white px-3 pb-3 shadow rounded">
   <?php 
  $term =  App::make("App\Http\Controllers\CruiseController")->getterm();
   ?>
  <div class="sun_title">TERMS & CONDITIONS</div>
  <?php 
  //echo json_decode($term);
   ?>
  </div>
  </div>
</section>

                 <?php } ?>
            </div>  
      </div>

      </div>
    </div>
</div>
</div>
<div class="modal fade" id="onrequest" tabindex="-1" role="dialog" aria-labelledby="onrequest" aria-hidden="true">
  <div class="modal-dialog modal-lg-tn" role="document">
    <div class="modal-content modal-content-dt">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">On Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
 <form class="form-horizontal" role="form" method="POST" action="{{ url('/contactstore') }}">
      {{ csrf_field() }}
            <div class="row justify-content-center pt-3" style="background: url(img/shadow-2.png) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row pt-4">
                          <div class="col-md-2 col-sm-12">                
                            <div class="form-group">
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic">Title*
                              </label>
                              <select name="title" id="title" class="form-control" required="">
                                <option value="">---</option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                              </select>
                            </div>
                            </div>
                          </div>                          
                          <div class="col-md-2 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">First Name*
                              </label>
                              <input class="form-control" type="text" required="" name="firstname" id="firstname" placeholder="First Name">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Surname*
                              </label>
                              <input class="form-control" type="text" required="" name="surname" id="surname" placeholder="Surname">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">E-Mail*
                              </label>
                              <input class="form-control" type="text" name="email" id="email" placeholder="E-Mail">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Subject
                              </label>
                              <input class="form-control" type="text" name="subject" required="" id="Subject" placeholder="Enter your subject here">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                          <div class="col-md-12 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Message
                              </label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Please enter your message here..." name="message"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    <div class="row pt-4">
                    <div class="col-lg-6 box-login-twt">
                      <div class="wrapper-box p-3">
                        <div class="checkbox text-center font-weight-600">
              <div class="chiller_cb">
              <input id="myCheckbox" type="checkbox" required="">
              <label for="myCheckbox">I have read and agree to the <a href="#" class="maucam">Terms &amp; Conditions*</a></label>
              <span></span>
            </div>
              </div>
            </div>
          </div>
            </div>
         
               <div class="row p-0 mt-4">
              <div id="html_element"></div>
                </div>
          
           <div class="row p-0">
              
              <button class="btn-block border-0 nen-maucam p-0 font-weight-b500 col-md-6 mx-auto" id="btn_submit" type="submit" style="border-radius:5px;height: 40px;color: #fff;">SEND</button>
          </div>
        </div>


  </form>
          </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg-tn" role="document">
    <div class="modal-content modal-content-dt">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
  <div class="container-fluid">
    <div class="row flex-column-reverse flex-md-row">
      <div class="col-md-6 ">
        <div class="content-modal-tn">
          <h6>SELECT EXCURSIONS:</h6>
          <p class="font-weight-b500">PACKAGES</p>

	<div id="hehehe" style="display: none"></div>
<div id="heheheprice" style="display: none"></div>
<div id="hehehepricetotal" style="display: none">0</div>
	<?php 
	 if(!empty($data_excursion)){
      $data_excursion_view = json_decode($data_excursion,TRUE);
        foreach ($data_excursion_view  as $keypackagebook => $valuepackagebook) {
        if($valuepackagebook['AddonType']  == 'Package'){
	 ?>





          <div class="row cruise_excursion_tab div_hide-a{{$valuepackagebook['year_check']}}">
            <div class="col-md-4 pb-3 ">
             
              <?php 
                $classic = explode(" ", $valuepackagebook['DetailAddonLabelLong']);
               ?>
               <?php 
                if($classic[0] == 'DISCOVERY'){
               ?>
                <div class="clor_new text-center">
              <?php }else{ ?>
              <!-- clor_new -->
              <div class="clor_new_trip_ab">
              <?php } ?>
              <?php 
            
              echo $classic[0];
               ?>
               {{$valuepackagebook['year_check']}}
             </div>
              <div style="height: auto;">
                  <img src="{{$valuepackagebook['DetailAddonImage']}}" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8 pb-3">
              <div class="clor_new_trip_abon">{{$valuepackagebook['DetailAddonLabelLong']}}</div>
              <div class="row">

                <div class="col-md-6">
                  <p class="fsty-md-l"><?php 
                    echo substr(strip_tags($valuepackagebook['DetailAddonDescription']),0,200);
                   ?></p>
                </div>
                <div class="col-md-6">
                  <p class="mb-0 font-weight-b500">PRICE PER PERSON</p>
                  <p class="mb-0">Pre-paid : <span class="font-weight-b500">${{number_format($valuepackagebook['PricePrice'],2)}}</span></p>
                  <p class="mb-0">On-board : <span class="font-weight-b500">${{number_format($valuepackagebook['PricePriceOnBoard'],2)}}</span></p>
                  <input type="checkbox" name="beckk[]" class="checkboooking" value="{{$valuepackagebook['AddonCode']}};{{number_format($valuepackagebook['PricePrice'],2)}}">
                  <div class="bt-bk-md float-right pt-3">
                    <button class="btn btn-booking maunentwt text-white">SEE MORE</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


		<?php } ?>
		<?php } ?>

	<?php } ?>           
        </div>
<div class="more-content-md">
          <p class="font-weight-b500">A LA CARTE</p>
		

		<?php 
		 if(!empty($data_excursion)){
      $data_excursion_view = json_decode($data_excursion,TRUE);
		 foreach ($data_excursion_view  as $keyalacartebook => $valuealacartebook) {
		 	 if($valuealacartebook['AddonType']  == 'Miscellaneous'){
		 ?>

          <div class="wrapper-md-bk div_hide-a{{$valuealacartebook['year_check']}}">
          <div class="showallaa clearfix"> 
            <div class="float-left font-weight-b500">1 TRIPS OF DAY - {{$valuealacartebook['year_check']}}</div> 
            <div class="float-right font-weight-b500">{{$valuealacartebook['AddonGroup']}}</div> 
          </div>
        <div class="row cruise_excursion_tab">
            <div class="col-md-3 pb-3">
              <div style="height: auto;">
                <img src="{{$valuealacartebook['DetailAddonImage']}}" class="img-fluid">
              </div>
            </div>
            <div class="col-md-9 pb-3">
              <div class="clor_new_trip_abon">{{$valuealacartebook['DetailAddonLabelLong']}}</div>
              <div class="row">
                <div class="col-md-6">
                  <p class="fsty-md-l">DURATION {{$valuealacartebook['DetailAddonDurationHour']}} hours</p>
                </div>
                <div class="col-md-6">
                  <p class="mb-0 font-weight-b500">PRICE PER PERSON</p>
                  <p class="mb-0">Pre-paid : <span class="font-weight-b500">${{number_format($valuealacartebook['PricePrice'],2)}}</span></p>
                  <p class="mb-0">On-board : <span class="font-weight-b500">${{number_format($valuealacartebook['PricePriceOnBoard'],2)}} </span></p>
                  <input type="checkbox" name="beckk[]" class="checkboooking" value="{{$valuealacartebook['AddonCode']}};{{number_format($valuealacartebook['PricePrice'],2)}}">
                </div>
              </div>
            </div>
          </div>
          </div>
				<?php } ?>
			<?php } ?>
		<?php } ?>
         
</div>


    </div>
      <div class="col-md-6 pb-3">
        <div class="row">
          <div class="content-modal-tn pb-2">
            <h6 id="book-modal-title">{{$dataviewdetails->title}}</h6>
            <p class="mb-0">SHIP NAME : <span id="book-modal-ship"></span></p>
            <p class="mb-0">SHIP CATEGORY : <span id="book-modal-category"></span></p>
          </div>
        </div>
        <div class="row date-modal-tn pb-2">
          <div class="col-md-6 text-center">
            <span>start date</span>
            <div class="modal-b-date"><span id="book-modal-startdate"></span></div>
          </div>
          <div class="col-md-6 text-center">
            <span>end date</span>
            <div class="modal-b-date"><span id="book-modal-enddate"></span></div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-3 col-6">
            <label for="inputState">No of Room</label>
            <select id="mySelectRoom" class="form-control">
              <option value="">0</option>
            </select>
          </div>


          <div class="form-group col-md-3 col-6">
            <label for="inputState">Adult</label>
            <select id="mySelectAdult" class="form-control">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
          <div class="form-group col-md-3 col-6">
            <label for="inputState">Child</label>
            <select id="mySelectChild" class="form-control">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
          <div class="form-group col-md-3 col-6">
            <label for="inputState">Child Age</label>
            <div id="mySelectChildinput">
                <input type="text" name="beckkn" class="form-control" value="">
            </div>
            
          </div>          
        </div>
        <div class="row">
          <div class="col-md-9 offset-md-3">
            <table style="width: 100%">
              <tr>
                <td>Adult price</td>
                <td><span id="book-price-adultone"></span></td>
                <td><span id="book-price-adult"></span></td>
              </tr>
              <tr>
                <td>Children price</td>
                <td><span id="book-price-childone"></span></td>
                <td><span id="book-price-child"></span></td>
              </tr>
              <tr>
                <td>Excursions</td>
                <td></td>
                <td><span id="book-price-excursion"></span></td>
              </tr>
            </table>
         
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-6">
            <p class="total">Total</p>
          </div>
          <div class="col-md-2">
            <p class="total"><span id="book-price-all"></span><span id="book-price-all-same" style="display: none"></span></p>
          </div>
        </div>
        <div class="row float-right">
          <!-- <div class="ct-bt-md float-right"> -->
                  <button type="button" class="btn btn-secondary mr-2 maunentwt" data-dismiss="modal">Close</button>

                     <form method="POST" action="{{url('cart')}}" id="form-book">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="product_title" id="product_title" value="{{$dataviewdetails->title}}" >
                          <input type="hidden" name="product_tripcode" id="product_tripcode" value="{{$dataviewdetails->tripcode}}" >
                          <input type="hidden" name="product_id" id="product_id">
                          <input type="hidden" name="product_ship" id="product_ship">
                          <input type="hidden" name="product_shipcategory" id="product_shipcategory">
                          <input type="hidden" name="product_cabintype" id="product_cabintype">
                          <input type="hidden" name="product_startdate" id="product_startdate">
                          <input type="hidden" name="product_enddate" id="product_enddate">
                          <input type="hidden" name="product_numroom" id="product_numroom">
                          <input type="hidden" name="product_adult" id="product_adult">
                          <input type="hidden" name="product_child" id="product_child">
                          <input type="hidden" name="product_adult_one" id="product_adult_one">
                          <input type="hidden" name="product_child_one" id="product_child_one">
                          <input type="hidden" name="product_price_all" id="product_price_all">
                          <input type="hidden" name="product_excursion_all" id="product_excursion_all">
                          <input type="hidden" name="product_excursion_price" id="product_excursion_price">
                          <button type="submit" class="btn btn-primary maunentwtx">Book now</button>
                      </form>


                
        <!-- </div> -->
        </div>
    </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>




@endsection


@section('jsmain')       
<script type="text/javascript">
  
    $(document).on("click", ".booking_cruise_request", function () {
       var product_id = $(this).data('id');
       var product_ship = $(this).data('ship');
       var product_shipcategory = $(this).data('shipcategory');
       var product_cabintype = $(this).data('cabintype');
       var product_startdate = $(this).data('startdate');
       var product_enddate = $(this).data('enddate');
       var product_availablecabins = $(this).data('availablecabins');
       var product_price = $(this).data('price');
       var product_pricesinge = $(this).data('pricesinge');
       //console.log('{{$dataviewdetails->tripcode}} - {{$dataviewdetails->title}} - '+product_cabintype+' - '+product_startdate);
       var string_title = '{{$dataviewdetails->tripcode}} - {{$dataviewdetails->title}} - '+product_cabintype+' - '+product_startdate;
       $('#Subject').val(string_title);

     });
  $(document).on("click", ".booking_cruise", function () {
    $('[class*="div_hide-a"]').hide();
       var product_id = $(this).data('id');
       var product_ship = $(this).data('ship');
       var product_shipcategory = $(this).data('shipcategory');
       var product_cabintype = $(this).data('cabintype');
       var product_startdate = $(this).data('startdate');
       var product_enddate = $(this).data('enddate');
       var product_availablecabins = $(this).data('availablecabins');
       var product_price = $(this).data('price');
       var product_pricesinge = $(this).data('pricesinge');

       var res_year = product_startdate.substring(6,10);
                console.log(res_year);
                $(".div_hide-a"+res_year).show();

       $('#mySelectRoom').empty();
       $("#book-price-adultone").text('');
      $("#book-price-adult").text('');
      $("#book-price-childone").text('');
      $("#book-price-child").text('');
      $("#book-price-all").text('');
       $('#book-price-all-same').text('');
      $( "#mySelectAdult" ).val(0); 
      $( "#mySelectChild" ).val(0); 
 		$("#book-price-excursion").text('');
 		$(".checkboooking").hide();
		$('#hehehe').text('');
		$('#heheheprice').text('');
		$('#hehehepricetotal').text('');
       $("#form-book #product_id").val( product_id );
       $("#form-book #product_ship").val( product_ship );
       $("#form-book #product_shipcategory").val( product_shipcategory );
       $("#form-book #product_cabintype").val( product_cabintype );
       $("#form-book #product_startdate").val( product_startdate );
       $("#form-book #product_enddate").val( product_enddate );

          $("#book-modal-ship").text(product_ship);
          $("#book-modal-category").text(product_shipcategory);
          $("#book-modal-startdate").text(product_startdate);
          $("#book-modal-enddate").text(product_enddate);

          for (i = 1; i <= product_availablecabins; i++)
          {
               $('#mySelectRoom').append($('<option>',
                {
                  value: i,
                  text : i
                }));
          }
          $( "#mySelectRoom" ).change(function() {
                $("#book-price-adultone").text('');
                $("#book-price-adult").text('');
                $("#book-price-childone").text('');
                $("#book-price-child").text('');
                $("#book-price-all").text('');
                $( "#mySelectAdult" ).val(0); 
                $( "#mySelectChild" ).val(0); 
                 $('#book-price-all-same').text('');
          });

          $( "#mySelectAdult" ).change(function() {
            var numAdult = $(this).val();
            var numRoom = $( "#mySelectRoom option:selected" ).val();
            var numChild = $( "#mySelectChild option:selected" ).val();
            var priceexcurison = $('#hehehepricetotal').text();
            if(numAdult == '1' && numChild == '0' ){
              price_adult = numRoom * product_pricesinge + Number(priceexcurison);
               price_adult_old = numRoom * product_pricesinge;
              $("#book-price-adultone").text(product_pricesinge);
              $("#book-price-adult").text(price_adult);
              $("#book-price-all").text(price_adult);
               $('#book-price-all-same').text(price_adult_old);
                $('#book-price-excursion').text(moneyFormat(Number(priceexcurison)*Number(numAdult)));
            }else{
              if(numAdult == 0){
                $("#book-price-adultone").text('');
                $("#book-price-adult").text('');
                $("#book-price-childone").text('');
                $("#book-price-child").text('');
                $("#book-price-all").text('');
                $("#book-price-excursion").text('');
                
              }else{
                price_adult = product_price;
                price_child = (product_price*0.8);
                price_adult_m = (numAdult * product_price) * numRoom;
                price_child_m = (numChild * price_child.toFixed(2)) * numRoom;
                price_all = parseFloat(price_adult_m) + parseFloat(price_child_m) + ((Number(numAdult) + Number(numChild))*priceexcurison);
                price_all_old = parseFloat(price_adult_m) + parseFloat(price_child_m);
                $("#book-price-adultone").text(price_adult);
                $("#book-price-adult").text(price_adult_m);
                if(numChild == 0){
					$("#book-price-childone").text("");
					$("#book-price-child").text("");
                }else{
                	$("#book-price-childone").text(price_child.toFixed(2));
                	$("#book-price-child").text(price_child_m);
                }
                $("#book-price-all").text(moneyFormat(price_all));
                 $('#book-price-all-same').text(price_all_old);
                  $('#book-price-excursion').text(moneyFormat(Number(priceexcurison)*Number(numAdult + numChild)));
              }
            }
              $('.checkboooking').show();
          });
          $( "#mySelectChild" ).change(function() {
            var numChild = $(this).val();
            var numRoom = $( "#mySelectRoom option:selected" ).val();
            var numAdult = $( "#mySelectAdult option:selected" ).val();
            var priceexcurison = $('#hehehepricetotal').text();
            if(numAdult > 0){
              if(numAdult == '1' && numChild == '0' ){
                price_adult = numRoom * product_pricesinge;
                $("#book-price-adultone").text(product_pricesinge);
                $("#book-price-adult").text(price_adult);
                $("#book-price-childone").text('');
                $("#book-price-child").text('');
                price_all = numRoom * product_pricesinge + (numAdult * priceexcurison);
                price_all_old = numRoom * product_pricesinge;
                $("#book-price-all").text(moneyFormat(price_all));
                  $('#book-price-all-same').text(price_all_old);
                  $('#book-price-excursion').text(moneyFormat(Number(priceexcurison)*Number(numAdult)));
              }else{
                if(numChild == '0'){
                  $("#book-price-childone").text('');
                  $("#book-price-child").text('');
                  price_adult = numRoom * product_pricesinge + (numAdult * priceexcurison);
                  price_adult_old = numRoom * product_pricesinge;
                
                  $("#book-price-all").text(moneyFormat(price_adult));
                  $('#book-price-all-same').text(price_adult_old);
                  $('#book-price-excursion').text(moneyFormat(Number(priceexcurison)*Number(numAdult)));
                }else{
                  price_adult = product_price;
                  price_child = (product_price*0.8);
                  price_adult_m = (numAdult * product_price) * numRoom;
                  price_child_m = (numChild * price_child.toFixed(2)) * numRoom;
                  price_all = parseFloat(price_adult_m) + parseFloat(price_child_m) + ((Number(numAdult) + Number(numChild))*priceexcurison);
                  price_all_old = parseFloat(price_adult_m) + parseFloat(price_child_m);
                  $("#book-price-adultone").text(price_adult);
                  $("#book-price-adult").text(price_adult_m);
                  $("#book-price-childone").text(price_child.toFixed(2));
                  $("#book-price-child").text(price_child_m);
                   $("#book-price-all").text(moneyFormat(price_all));
                  $('#book-price-all-same').text(price_all_old);
                  $('#book-price-excursion').text(moneyFormat(Number((Number(numAdult) + Number(numChild))*priceexcurison)));
                }
              }
            }
             $('.checkboooking').show();
          });
  });



  $('.checkboooking').change(function() {

        if($(this).is(":checked")) {
            dataa = $('#hehehe').text();
            dataaprice = $('#heheheprice').text();

           	datas =  dataa.split(',');
           	datasprice = dataaprice.split(',');


           	var number_adult  = $( "#mySelectAdult option:selected" ).text();
            var   number_child = $( "#mySelectChild option:selected" ).text();
            var number = Number(number_adult) + Number(number_child);
            var number_room =  $( "#mySelectRoom option:selected" ).val();
            //   var numRoom = $( "#mySelectRoom option:selected" ).val();
           	var values = $(this).val();
           	codeandprice = values.split(';');

            datas.unshift(codeandprice[0]);
            datasprice.unshift(codeandprice[1]);
            $('#hehehe').text(datas);   
			     sum = 0;
			     $.each(datasprice,function(){sum+=parseFloat(this) || 0;});
            $('#heheheprice').text(datasprice);   
            $('#hehehepricetotal').text(sum);   

            var price_au =  $('#book-price-all').text();
            var price_goc =  $('#book-price-all-same').text();

            var prie_auaa = (Number(sum)*Number(number)) + Number(price_goc);
          	$('#book-price-excursion').text(moneyFormat(Number(sum)*Number(number)));
          	$('#book-price-all').text(moneyFormat(prie_auaa));
        }else{
	      	dataa = $('#hehehe').text();
	      	dataaprice = $('#heheheprice').text();

	       	datas =  dataa.split(',');
	       	datasprice = dataaprice.split(',');


	       	var number_adult  = $( "#mySelectAdult option:selected" ).text();
            var number_child = $( "#mySelectChild option:selected" ).text();
            var number_room =  $( "#mySelectRoom option:selected" ).val();
            var number = Number(number_adult) + Number(number_child);
	       	var values = $(this).val();

	       	codeandprice = values.split(';');

	      	var removeItem = codeandprice[0];
	      	y = jQuery.grep(datas, function(value) {
	        	return value != removeItem;
	      	});

	      	var removeItemprice = codeandprice[1];
	      	yprice = jQuery.grep(datasprice, function(value) {
	        	return value != removeItemprice;
	      	});

	      	var price_au =  $('#book-price-all').text();
	      	var price_goc =  $('#book-price-all-same').text();
	    
	      	$('#hehehe').text(y);
	      	sum = 0;
		    	$.each(yprice,function(){sum+=parseFloat(this) || 0;});

          $('#heheheprice').text(yprice);   
          $('#hehehepricetotal').text(sum);   

           var prie_auaa = (Number(sum)*Number(number)) + Number(price_goc);
          $('#book-price-excursion').text(moneyFormat(Number(sum)*Number(number)));
          $('#book-price-all').text(moneyFormat(prie_auaa));

	       }
    });


  
  $( "#form-book" ).submit(function( event ) {
     var product_numroom = $( "#mySelectRoom option:selected" ).val();
     var product_adult = $( "#mySelectAdult option:selected" ).val();
     var product_child = $( "#mySelectChild option:selected" ).val();
     var product_adult_one = $("#book-price-adultone").text();
     var product_child_one = $("#book-price-childone").text();
     var product_price_all = $("#book-price-all").text();
     var product_excursion_all = $("#hehehe").text();
     var product_excursion_price = $("#book-price-excursion").text();
     if(product_adult == 0){
      alert("Select Adult");
      return false;
     }
      $( "#product_numroom").val(product_numroom);
      $( "#product_adult").val(product_adult);
      $( "#product_child").val(product_child);
      $( "#product_adult_one").val(product_adult_one);
      $( "#product_child_one").val(product_child_one);
      $( "#product_price_all").val(product_price_all);
      $( "#product_excursion_all").val(product_excursion_all);
      $( "#product_excursion_price").val(product_excursion_price);
     // alert( "Book now" );
     // event.preventDefault();
  });



$('[id^="div_dian"]').click(function () {
      var code = $(this).data('code');
      $(".id_dian_"+code).animate({opacity: 'toggle'}, 'slow'); 
      var text = $('#div_dian'+code).text();
      $('#div_dian'+code).text(text == "SEE MORE" ? "SEE LESS" : "SEE MORE");
});

function moneyFormat(price, sign = '$') {
  const pieces = parseFloat(price).toFixed(2).split('')
  let ii = pieces.length - 3
  while ((ii-=3) > 0) {
    pieces.splice(ii, 0, ',')
  }
  return  pieces.join('')
}

</script>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
<?php 
if(!empty($numcheck_hold)){
	$item_click_show = $numcheck_hold[0];
	?>
	document.getElementById("defaultOpencity"+<?php echo $item_click_show ?>).click();
<?php } ?>


$('#myTab li a').on('click', function(event) {
    event.preventDefault();
  //  $('html, body').animate({scrollTop:0}, 'fast'); 
    $('html, body').animate({scrollTop:$('#tab-content').position().top - 200}, 'slow');
    $(this).tab('show');    
});


</script>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LeLN6kUAAAAAMcr9THgpbLQ-XskkLOae4W5vMPE'
        });
      };
    </script>
<!-- <script>
  $(document).ready(function () {
    $('.slideto-A').click(function() {
    $('html, body').animate({
      scrollTop: $(".slide-A").offset().top
    }, 1000)
  }),  $('.slideto-B').click(function() {
    $('html, body').animate({
      scrollTop: $(".slide-B").offset().top
    }, 1000)
  }),  $('.slideto-C').click(function() {
    $('html, body').animate({
      scrollTop: $(".slide-C").offset().top
    }, 1000)
  }),  $('.slideto-D').click(function() {
    $('html, body').animate({
      scrollTop: $(".slide-D").offset().top
    }, 1000)
  }),  $('.slideto-E').click(function() {
    $('html, body').animate({
      scrollTop: $(".slide-E").offset().top
    }, 1000)
  }),  $('.slideto-F').click(function() {
    $('html, body').animate({
      scrollTop: $(".slide-F").offset().top
    }, 1000)
  }),  $('.slideto-G').click(function() {
    $('html, body').animate({
      scrollTop: $(".slide-G").offset().top
    }, 1000)
  })
});
</script>
 -->


@endsection