@extends('cruise.layouts.cruise')
@section('title', $dataviewdetails['title'])
@section('description', !empty($dataviewdetails['meta_description']) ? $dataviewdetails['meta_description']: strip_tags($dataviewdetails['body']))
@section('metatitle', $dataviewdetails['title'])
@section('content')

<?php 
$min_oprice = array();
foreach ($dataviewdetails['pricetable'] as $key_min => $value_price_min) {
  $min_oprice[] = (int)$value_price_min['Pricepptwinshare'];
}
if(!empty($min_oprice)){
  $price_min_show = min($min_oprice);
}else{
  $price_min_show = 0;
}

 ?>
 <style type="text/css" media="screen">
   .btn.btn-booking.booking_cruise {
    color: #fff;
    background: #ff983e;
    width: 100%;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
}
.btn.btn-booking.booking_cruise:hover {
    color: #fff;
    background: #337ab7;
    cursor: pointer;
}
.btn.btn-sold {
    background: #999;
    width: 100%;
    color: #fff;
    padding: 0 5px;
    margin: 5px 0;
    padding: 5px;
    white-space: nowrap;
}

.btn.btn-onrequest {
    background: #1291b7;
    width: 100%;
    color: #fff;
    padding: 0 5px;
    margin: 5px 0;
    padding: 5px;
    white-space: nowrap;
}
 </style>
 <?php 

 $image_codever = '';
if(!empty($dataviewdetails['imagecover'])){
     $data_image_imagecover = json_decode($dataviewdetails['imagecover'],TRUE);
     if(!empty($data_image_imagecover[0])){
      $image_codever = 'https://b2b.tweetworldtravel.com.au/images/imagecover/'.$data_image_imagecover[0];
     }else{
       $image_codever = 'https://tweettours.com/images/destination/img-03.jpg';
     }
}
  ?>
<section class="tg-innerbanner">
   <div class="parallax-ct" style="background: url('{{$image_codever}}') no-repeat center; background-size: cover;"
      data-paroller-factor="0.5" data-paroller-factor-xs="0.2">
    
      <div class="tg-sectionspace tg-haslayout" style="padding:90px 0;">
         <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="tg-innerbanner text-center text-white py-5">
                     <h1 class="pb-2">{{$dataviewdetails['title']}}</h1>
                     <h2>{!!html_entity_decode($dataviewdetails['shortdescription'])!!}</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="wrapper-dt">
   <div class="content">
      <div class="container">
<!--          <div class="my-2">
            <?php 

             ?>
            <nav class="breadcrumb-tn" aria-label="breadcrumb">
               <ol class="breadcrumb maunentwt d-inline-flex" style="margin-bottom: 5px;">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}" class="chutwt font-weight-bold">Home</a></li>
                  <li class="breadcrumb-item"><a href="#" class="chutwt font-weight-bold">Library</a></li>
                  <li class="breadcrumb-item chutwt font-weight-bold active" aria-current="page">EUROPE CRUISES</li>
               </ol>
            </nav>
         </div> -->
          <div class="my-2"> 
                <nav class="breadcrumb-tn pt-2" aria-label="breadcrumb">
                  <ol class="breadcrumb maunentwt d-inline-flex" style="text-transform: capitalize;">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="chutwt font-weight-bold">Home</a></li>
                    <?php 
                  //  $data_breadcrumb =  App::make("App\Http\Controllers\CruiseController")->getBmenu($dataviewdetails['id']);
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
               <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
 <?php 
                if(!empty($dataviewdetails['imageup'])){
                    $data_image_slite = json_decode($dataviewdetails['imageup'],TRUE);
                 ?>
                    <?php foreach ($data_image_slite as $keyslll => $valueimageslide) { ?>
                     <div class="carousel-item <?php echo ($keyslll == 0)?'active':'' ?>">
                        <div class="wrapper-card-dt">
                           <img src="https://b2b.tweetworldtravel.com.au/images/add/{!! str_replace('cruise','',str_replace('undefined','',$valueimageslide)) !!}" class="w-100 img-fluid rounded" style="height: 40vh;" alt="{{$dataviewdetails['title']}}">

                          <div class="overlay fadeInUp animated">
                              <span class="zoomIn delay-1s animated"> <?php 
                              if($price_min_show == 0){
                                echo '<a style ="color:white" data-target="#onrequest" data-toggle="modal" href="#onrequest" style="width: 20% !important;">Enquire Now</a>';
                              }else{
                                echo "From";
                                 echo number_format(str_replace(" ",'',$price_min_show));
                                 echo 'AUD';
                              }
                               ?> </span>
                          </div>
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
                  <h3 class="post_title"  style="text-transform: uppercase;">{{$dataviewdetails['title']}}</h3>
                  <p class="post_detail">{!!html_entity_decode($dataviewdetails['shortdescription'])!!}</p>
                  <div class="post_detail">{!!html_entity_decode($dataviewdetails['body'])!!}</div>
                  <div class="post_detail_c">
                     <p> <b>Trip code :</b> {{$dataviewdetails['tripcode']}}</p>
                     <p> <b>Duration :</b> {{$dataviewdetails['duration']+1}} days</p>
                     <p> <b>Destination :</b> {{$dataviewdetails['destination']}}</p>
                     <p> <b>Travel Dates :</b> {{$dataviewdetails['traveldates']}}</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-collapse-st my-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 p-0 mb-3">
                     <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                           <a class="nav-link " id="pill-H" data-toggle="pill" aria-controls="tab-H" href="#tab-H">Highlights</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link active" id="pill-A" data-toggle="pill" aria-controls="tab-B"  href="#tab-A">Itinerary</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pill-B" data-toggle="pill" aria-controls="tab-B" href="#tab-B">Maps</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pill-C" data-toggle="pill" aria-controls="tab-C"  href="#tab-C">Inclusions</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pill-D" data-toggle="pill" aria-controls="tab-D"  href="#tab-D">Date & Price</a>
                        </li>
                        <li class="nav-item" style="display: none">
                           <a class="nav-link" id="pill-E" data-toggle="pill" aria-controls="tab-E"  href="#tab-E" >Accommodation</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pill-F" data-toggle="pill" aria-controls="tab-F"  href="#tab-F">Visa Information</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pill-G" data-toggle="pill" aria-controls="tab-G"  href="#tab-G">Terms & Conditions</a>
                        </li>
                     </ul>
                  </div>
                  <div id="tab-content" class="col-md-10 tab-content">
                        <div id="tab-H" class="tab-pane fade   " role="tabpanel" aria-labelledby="pill-H">
                            
                            <?php echo htmlspecialchars_decode($dataviewdetails['highlight']); ?>&nbsp
                         </div>
                        <div id="tab-A" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pill-A">
                            <div class="clearfix">
                               <div class="float-left">
                                  <!-- <a class="" data-target="#itineraryemail" data-toggle="modal" href="#itineraryemail"><i class="fa fa-envelope chutwt"></i></a> -->
                                  <!-- <a href="https://b2b.tweetworldtravel.com.au/printItinerary/ERC3D-01"> <i class="fa fa-print chutwt"></i></a> -->
                               </div>
                               <div class="btn-group float-right" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-secondary mr-1 btn-sty-dt" onclick="myfunction()"><i class="fas fa-arrow-down"></i></button>
                                  <button type="button" class="btn btn-secondary btn-sty-dt" onclick="myfunction2()"><i class="fas fa-arrow-up"></i></button>
                               </div>
                            </div>
                            <div id="accordion">

                                <?php 
                                    if(!empty($dataviewdetails['itinerary'])){
                                        foreach ($dataviewdetails['itinerary'] as $key => $valueold_itine) {
                                ?>
                                <div class="card" style="margin-bottom: 5px;">
                                  <div class="card-header p-0">
                                     <h4 class="panel-title itinerary_box">
                                        <div class="day"> 
                                           <span>DAY <?php echo $key+1 ?></span>
                                        </div>
                                        <div class="tieude panel-heading">
                                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $key ?>" class="card-link">
                                           <i class="fas fa-chevron-down float-right"></i><?php echo $valueold_itine['itinerary_name'] ?></a> 
                                        </div>
                                     </h4>
                                  </div>
                                  <div id="collapse<?php echo $key ?>" class="collapse" style="">
                                     <div class="card-body">
                                        <?php
                                            echo str_replace("<>","<br>", $valueold_itine['itinerary_detail']);
                                        ?>
                                     </div>
                                  </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                        </div>
                     </div>
                     <div id="tab-B" class="tab-pane fade" role="tabpanel" aria-labelledby="pill-B">
                        <?php if(!empty($dataviewdetails['mapscruise'])){ ?>
                                  <img src="https://b2b.tweetworldtravel.com.au/{{ $dataviewdetails['mapscruise'] }}" alt="" style="height: auto">
                                  <?php
                                }else{
                                  ?>
                            <div style="width: 100%">
                                <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={{ $dataviewdetails['maps'] }}&ie=UTF8&t=&z=16&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                            <?php }
                        ?>
                     </div>
                     <div id="tab-C" class="tab-pane fade" role="tabpanel" aria-labelledby="pill-C">
                        <p><?php echo htmlspecialchars_decode($dataviewdetails['inclusions']); ?></p>
                     </div>
                     <div id="tab-D" class="tab-pane fade" role="tabpanel" aria-labelledby="pill-D">
<?php 
$new_make_key = array();
$new_array_make = array();
   foreach ($dataviewdetails['pricetable'] as $keypricetablemake => $valuepricetablemake) {
      $parts = explode('/', $valuepricetablemake['Startdate']);
      $parts_key = !empty($parts[2])?$parts[2]:'Over';
      $new_array_make[$parts_key][] = $valuepricetablemake;
      $new_make_key[$parts_key] = $parts_key;

   }

   //dd($new_array_make);
 ?>

                      <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified">
                          <?php 
                          $hew = 0;
                          foreach ($new_make_key as $keynew_make_key => $valuenew_make_key) {
                           ?>
                          <li class="nav-item">
                            <a class="nav-link <?php echo ($hew == 0)?'active':'' ?>" data-toggle="tab" href="#menu<?php echo $valuenew_make_key ?>"><?php echo $valuenew_make_key ?></a>
                          </li>
                          <?php $hew++;} ?>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <?php 
                            $hewa = 0;
                            foreach ($new_array_make as $keynew_array_make => $valuenew_array_make) {
                             ?>
                          <div class="tab-pane container <?php echo ($hewa == 0)?'active':'fade' ?>" id="menu<?php echo $keynew_array_make ?>" style="padding: 0;">
                            <?php //echo $keynew_array_make ?>
                        <table class="table table-bordered table-responsive-md vtc-f-th" style="font-size: 12px;">
                           <thead>
                              <tr class="vtc-f-tr" style="background-color: #337ab7;color: #fff;">
                                 <th scope="col">Accommodation</th>
                                 <th scope="col">TourTypes</th>
                                 <th scope="col">GroupSize</th>
                                 <th scope="col">Start date</th>
                                 <th scope="col">End date</th>
                                 <th scope="col">Price pp twin share</th>
                                 <th scope="col">Single Supplementary</th>
                                 <th scope="col">Special Offer</th>
                                 <th scope="col">Status</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php 
                            foreach ($valuenew_array_make as $keypricetable => $valuepricetable) {
                             ?>
                              <tr class="text-center">
                                 <td scope="row" class="table-dt-st">{{$valuepricetable['Accommodation']}}</td>
                                 <td class="table-dt-st">{{$valuepricetable['TourTypes']}}</td>
                                 <td>{{$valuepricetable['GroupSize']}}</td>
                                 <td>{{$valuepricetable['Startdate']}}</td>
                                 <td>{{$valuepricetable['Enddate']}}</td>
                                 <td><b>{{!empty($valuepricetable['Pricepptwinshare']) ? number_format((float)$valuepricetable['Pricepptwinshare']) : ''}}</b></td>
                                 <td>{{!empty($valuepricetable['SingleSupplementary']) ? number_format((float)$valuepricetable['SingleSupplementary']) : ''}}</td>
                                 <td>{{!empty($valuepricetable['SpecialOffer']) ? number_format($valuepricetable['SpecialOffer']) : ''}}</td>
                                 <td class="w-100">
                                  <?php 
                                  switch ($valuepricetable['Status']) {
                                    case 'SOLD OUT':
                                      echo '<a class="btn btn-sold">Sold Out</a>';
                                      break;
                                    case 'AVAILABLE':
                                      echo '<a class="btn btn-booking booking_cruise" data-target="#booknow" data-toggle="modal" href="#booknow">Book now</a>';
                                      break;
                                    case 'ON REQUEST':
                                      echo '<a class="btn btn-onrequest booking_cruise_onrequest" data-target="#onrequest" data-toggle="modal" href="#onrequest">On request</a>';
                                      break;  
                                    default:
                                      echo '<a class="btn btn-onrequest booking_cruise_onrequest" data-target="#onrequest" data-toggle="modal" href="#onrequest">On request</a>';
                                      break;
                                  }
                                   ?>
                                </td>
                              </tr>
                              <?php
                                }
                               ?>
                           </tbody>
                        </table>
                          </div>
                           <?php $hewa++;} ?>
                        </div>




                          <?php echo htmlspecialchars_decode($dataviewdetails['subpricetable']); ?>
                     </div>
                     <div id="tab-E" class="tab-pane fade" role="tabpanel" aria-labelledby="pill-E">
                       
                     </div>
                     <div id="tab-F" class="tab-pane fade" role="tabpanel" aria-labelledby="pill-F">
                          <?php echo htmlspecialchars_decode($dataviewdetails['visa']); ?>
                     </div>
                     <div id="tab-G" class="tab-pane fade" role="tabpanel" aria-labelledby="pill-G">
                      <?php echo htmlspecialchars_decode($dataviewdetails['terms']); ?>
                     
                      </div>
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
        <h5 class="modal-title" id="exampleModalLongTitle">School Tour Enquiry Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
       

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/contactadd') }}">
                        {{ csrf_field() }}
      
      <div class="form-group">
        <label for="name">Your Name (required):</label> 
        <input class="form-control" autofocus="autofocus" required="required" name="name" type="text" id="name"> 
        
      </div>

      <div class="form-group">
        <label for="email">Your Email (required)</label> 
        <input class="form-control" required="required" name="email" type="text" id="email"> 
        
      </div>
      
      <div class="form-group">
        <label for="phone">Your Phone Number</label> 
        <input class="form-control" required="required" name="phone" type="text" id="phone"> 
        
      </div>

      <div class="form-group">
        <label for="subject">Subject:</label> 
        <input class="form-control" required="required" id="Subject" name="subject" type="text"> 
        
      </div>
      <div class="form-group">
        <label for="message">Message:</label> 
        <textarea class="form-control" id="ckeditor" required="required" name="message" cols="50" rows="10"></textarea> 
      </div>
      <div class="box_body form-group">
        <input class="btn btn-hero btn-lg btn-primary" id="submitForm" style="width:100%" type="submit" value="Submit">
      </div>
        </form>
          </div>
      </div>
  </div>
</div>
</div>

<div class="modal fade" id="booknow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Booking </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
        <div>
            <input type="hidden" name="number" class="modal-b-id-input" >
                <div class="row m-0"><h4>  <div class="modal-b-name"> </div> </h4></div>
                   <div class="row m-0">
                   <div class="col-md-4"> Accommodation :</div> 
                   <div class="modal-b-ship col-md-8"> </div>
                </div>
                <div class="row m-0">
                       <div class="col-md-4"> Tour Types :</div> 
                       <div class="modal-b-shipcategory col-md-8"> </div>  
                </div>
                <div class="row m-0" style="text-align: center">
                    <div class="col-md-5">
                          <label>Start date</label>
                        <div class="modal-b-dateto"> </div>
                    </div>
                    <div class="col-md-1">
                        ->
                    </div>
                    <div class="col-md-5">
                          <label> End date</label>
                     <div class="modal-b-dateend"> </div>
                 </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-3">
                        <label>No of Room</label>
                        <div id="myDiv_room">
                          <select id="mySelectRoom" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Adult</label>
                        <div id="myDiv_adult"> </div>
                    </div>
                    <div class="col-md-3">
                        <label>Child</label>
                        <div id="myDiv_child"> </div>
                    </div>  
                    <div class="col-md-3">
                        <label>Child AGE</label>
                        <div id="myDiv_child_age"></div>
                    </div>    
                </div>
                <div style="height: 30px">
                  
                </div>
                <div class="row m-0">
                  <div class="col-md-3">
                    
                  </div>
                 
                  <div class="col-md-3">
                    <b>Adult price</b>
                  </div>
                   <div class="col-md-3">
                    <div class="modal-b-price-adult-show"> </div>
                  </div>
                  <div class="col-md-3 ringh_14">
                    <div class="modal-b-price-adult"> </div>
                  </div>
                </div>
                <div class="row m-0">
                  <div class="col-md-3">
                    
                  </div>
                 
                  <div class="col-md-3">
                    <b>Children price</b>
                  </div>
                   <div class="col-md-3">
                      <div class="modal-b-price-child-show"> </div>
                  </div>
                  <div class="col-md-3 ringh_14">
                    <div class="modal-b-price-child"> </div>
                  </div>
                </div>
                 <div class="row m-0">
                  <div class="col-md-3">
                    
                  </div>
                  <div class="col-md-3">
                   
                  </div>
                  <div class="col-md-3">
                    <b>Total</b>
                  </div>
                  <div class="col-md-3 ringh_14">
                    <span class="modal-b-price" style="display: none;"></span> <span class="modal-b-price-room-pick"  style="display: none;"></span> <span class="modal-b-price-total-pick" style=" font-weight: bold; "></span>
                  </div>
                </div>
               
                </div>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="booking_cruise1">Book Now</button>
      </div>
    </div>
  </div>
</div>

</section>


@endsection


  @section('ngoc_view')
<script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

             $('#onrequest').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) 
                var $row = button.closest("tr");    
                var $tds = $row.find("td"),
                cabintype = $tds.eq(2).text(),
                daystart = $tds.eq(3).text();
               var string_title = '{{$dataviewdetails["tripcode"]}} - {{$dataviewdetails["title"]}} - '+cabintype+' - '+daystart;
               $('#Subject').val(string_title);
             });   

$('#booknow').on('show.bs.modal', function (event) {
    $("#mySelect").remove();
    $("#mySelectchild").remove();
    $("#myDiv_child_age").empty().append();
    var button = $(event.relatedTarget) 
    var $row = button.closest("tr");
            var $tds = $row.find("td"),
            ship = $tds.eq(0).text(),
            shipcategoty = $tds.eq(1).text(),
            cabintype = $tds.eq(2).text(),
            daystart = $tds.eq(3).text(),
            endstart = $tds.eq(4).text(),
            price = $tds.eq(5).text();
            numberrprice = $tds.eq(6).text();
            specialprice = $tds.eq(7).text();
            if(specialprice.trim() != ''){
                 price = specialprice;
            }
            post_title = "{{ $dataviewdetails['slug'] }}";
            post_name= "{{ $dataviewdetails['title'] }}";
            post_id= "{{ $dataviewdetails['id'] }}";
      var recipient = price 
      var modal = $(this);
      modal.find('.modal-b-id-input').val(post_id);
      modal.find('.modal-b-name').text(post_name);
      modal.find('.modal-b-dateto').text(daystart);
      modal.find('.modal-b-dateend').text(endstart);
      modal.find('.modal-b-ship').text(ship);
      modal.find('.modal-b-shipcategory').text(shipcategoty);
      modal.find('.modal-b-price').text("0");
      modal.find('.modal-b-price-adult-show').text("");
      modal.find('.modal-b-price-adult').text(" ");
      modal.find('.modal-b-price-total-pick').text(" ");
      modal.find('.modal-b-price-room-pick').text(" ");
      numberr = 6;
      var myDiv = document.getElementById("myDiv_adult");
      var selectList = document.createElement("select");
      selectList.setAttribute("id", "mySelect");
      selectList.setAttribute("class", "form-control");
      myDiv.appendChild(selectList);
      var anumber_adult = 1;
      for (var i = 0; i <= numberr; i++) {
          var option = document.createElement("option");
          option.setAttribute("value", i);
          option.text = i;
          selectList.appendChild(option);
      }
      var myDiv_child = document.getElementById("myDiv_child");
      var selectLista = document.createElement("select");
      selectLista.setAttribute("id", "mySelectchild");
      selectLista.setAttribute("class", "form-control");
      myDiv_child.appendChild(selectLista);
      var option = document.createElement("option");
      option.setAttribute("value", 0);
      option.text = 0;
      selectLista.appendChild(option);
      $('#mySelectRoom').on('change', function() {
      $('#mySelect').val(1).trigger('change');
    }); 
    $('#myDiv_adult').on('change', function() {
       $("#myDiv_child_age").empty().append();
        number_adult_pick = $(this).find(":selected").val();
        if(number_adult_pick == 1){
          var prie_au = Number(price.replace(',','')) * number_adult_pick + Number(numberrprice.replace(',',''));
          var prie_au_sign = Number(price.replace(',','')) + Number(numberrprice.replace(',',''));
        }else{
          var prie_au = price.replace(',','') * number_adult_pick;
          var prie_au_sign = price.replace(',','');
        } 
        modal.find('.modal-b-price-adult-show').text(moneyFormat(prie_au_sign));
        modal.find('.modal-b-price-child-show').text(' ');
        modal.find('.modal-b-price-adult').text(moneyFormat(prie_au));
        modal.find('.modal-b-price').text(moneyFormat(prie_au));
        modal.find('.modal-b-price-child').text('');
        var room = modal.find('#mySelectRoom').find(":selected").val();
        modal.find('.modal-b-price-room-pick').text(room);
        modal.find('.modal-b-price-total-pick').text(moneyFormat(room*prie_au));
        anumber_adult = $(this).find(":selected").val();
        var numverchild = numberr - $(this).find(":selected").val();
        $("#myDiv_child option").remove();    
          for (var i = 0; i <= 6; i++) {
              var option = document.createElement("option");
              option.setAttribute("value", i);
              option.text = i;
              selectLista.appendChild(option);
          }
        var price_au =  $('.modal-b-price-adult').text();
        $('#myDiv_child').on('change', function() {
            var numv = $(this).find(":selected").val();
            var prie_auav = price_au.replace(',','');
            var price_au_view = Number(prie_auav);
            $("#myDiv_child_age").empty().append();
            for(im=1; im <= numv ; im++){
            $("#myDiv_child_age").append($('<select name="childage[]" class="form-control"><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option></select>'));
        }
          if(numv == 1){
            if(numv >= 0){
                if(number_adult_pick == 1){
                var price_au_view = Number(price.replace(',',''));
              }
          }
            var prie_auchild = price.replace(',','') * numv;
            var prie_auchild_out = ((prie_auchild)*0.75);
            var prie_auchild_out_view = ((price.replace(',',''))*0.75);
            prie_all = Number(prie_auchild_out) + Number(prie_auav);
            modal.find('.modal-b-price-adult').text(moneyFormat(price_au_view));
            modal.find('.modal-b-price-child').text(moneyFormat(prie_auchild_out));
            modal.find('.modal-b-price').text(moneyFormat(prie_all));
            modal.find('.modal-b-price-room-pick').text(room);
            modal.find('.modal-b-price-total-pick').text(moneyFormat(room*prie_all));
            modal.find('.modal-b-price-adult-show').text(moneyFormat(price.replace(',','')));
            modal.find('.modal-b-price-child-show').text(moneyFormat(prie_auchild_out_view));
          }else{
              if(numv >= 0){
                if(number_adult_pick == 1){
                var price_au_view = Number(price.replace(',','')) ;
              }
          }
            var prie_auchild = price.replace(',','') * numv;
            var prie_auchild_out = ((prie_auchild /100)*75);
            var prie_auchild_out_view = ((price.replace(',',''))*0.75);
            modal.find('.modal-b-price-adult').text(moneyFormat(price_au_view));
            modal.find('.modal-b-price-child').text(moneyFormat(prie_auchild_out));
            prie_all = Number(prie_auchild_out) + Number(prie_auav);
            modal.find('.modal-b-price').text(moneyFormat(prie_all));
            modal.find('.modal-b-price-room-pick').text(room);
            modal.find('.modal-b-price-total-pick').text(moneyFormat(room*prie_all));
            modal.find('.modal-b-price-adult-show').text(moneyFormat(price.replace(',','')));
            modal.find('.modal-b-price-child-show').text(moneyFormat(prie_auchild_out_view));
          }
         });
    });


});

function moneyFormat(price, sign = '$') {
  const pieces = parseFloat(price).toFixed(2).split('')
  let ii = pieces.length - 3
  while ((ii-=3) > 0) {
    pieces.splice(ii, 0, ',')
  }
  return  pieces.join('')
}
        $("#booking_cruise1").click(function(i) {

            var myKeyVals = { 
                post_title :"{{ $dataviewdetails['title'] }}", 
                id : {{ $dataviewdetails['id'] }}, 
                price : $('.modal-b-price').text(),
                ship : $('.modal-b-ship').text(),
                shipcategory : $('.modal-b-shipcategory').text(),
                daystart : $('.modal-b-dateto').text(),
                endstart : $('.modal-b-dateend').text(),
                number_adult : $( "#mySelect option:selected" ).text(),
                number_child : $( "#mySelectchild option:selected" ).text(),
                number_room : $( ".modal-b-price-room-pick" ).text(),
                price_adult : $( ".modal-b-price-adult" ).text(),
                price_child : $( ".modal-b-price-child" ).text(),
                tripcode: "<?php echo $dataviewdetails['tripcode'] ?>",
                type:'Tours'
            }
                var saveData = $.ajax({
                  type: 'POST',
                  url: "/cart",
                  data: myKeyVals,
                  dataType: "text",
                  success: function(resultData) { 
                    window.location='/cart';
          
                    }
});
      
        });
$( "#printItineraryEmailBox" ).submit(function( event ) {
  event.preventDefault();
  var $form = $( this ),
    term = $form.find( "input[name='email']" ).val(),
    tripcode = $form.find( "input[name='tripcode']" ).val(),
    url = $form.attr( "action" );
 
  // Send the data using post
  var posting = $.post( url, { email: term,tripcode: tripcode } );
  // Put the results in a div
  posting.done(function( data ) {
    //var content = $( data ).find( "#content" );
    $( "#sendokemail" ).text( data );
    $("#buton_printItineraryEmail").hide();
    $("#email").hide();
  });
});
     
    </script>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer></script>
 <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LdW56EUAAAAAMSHFbDBYg4mXR3ctWCw0FVrnWER'
        });
      };
    </script>
    @stop