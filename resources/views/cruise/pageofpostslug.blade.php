@extends('cruise.layouts.cruise')
@section('title',$dataviewdetails->title.' - Asia School Tours')
@section('description', 'Asia School Tours')
@section('metatitle',$dataviewdetails->title .' - Asia School Tours')
@section('content')
<style type="text/css" media="screen">
  .list-group-horizontal {
    -ms-flex-direction: row;
    flex-direction: row;
}
.list-group-horizontal li{
  text-align: center;
  border:none;
}
.list-group-horizontal .list-group-item{
 padding: .25rem .75rem;
}
  .span_flag{
    font-size: 0.6875rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  color:#99978a;
  }
  .div_content_flag {
    padding: 0 0 30px 0 !important;
    margin: 0 !important;
    position: relative;
}
.div_content_flag p{
  font-size: 1rem;
    border-top: 1px solid;
    padding: 10px 0 0 0px;
    text-align: left;
    line-height: 1.3rem;
    margin-bottom: 0;
}
.header-pj-t{
  position: unset;
  height: 58px
}
.card-img-top{
  border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.dashed{
      margin-left: 8px;
    list-style-type: none;
    font-size: 1rem;
}
ul.dashed > li {
  text-indent: -5px;
}
ul.dashed > li:before {
  content: "-";
  text-indent: -5px;
}
</style>


<?php 

$imagecover = $dataviewdetails->imagecover;
  if(!empty($imagecover)){
     $data_image_imagecover = json_decode($imagecover,TRUE);
     $image_conver_show = $data_image_imagecover[0];
   }else{
    $image_conver_show = 'img/MS-Loire-Princesse-Loire-profil03-CroisiEurope©CroisiEurope.jpg';
   }

 ?>
<section class="hohohu">
    <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="https://b2b.tweetworldtravel.com.au/images/add/{{ $image_conver_show }}">

  <div class="first-div" style="height: 53vh;">
    <a href="#">
    <div class="first-inner-div btn-8">
      <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">{{$dataviewdetails->title}}</p>     
    </div>
    </a>
  </div>
</div>
</section>
<?php 
//print_r($dataviewdetails);
 ?>
<section class="content-res login-form-margin" style="background-color: #fff">
<div class="container">
  
  <div class="row">
   
    <div class="col-md-6">
      <div style="border: 5px solid #048068">

          <div style="background: #06af8f;color: #fff;text-align: center;padding: 3px;">
           <h3> DESTINATION INFORMATION</h3>
          </div>

        {!! $dataviewdetails->highlight !!}
      </div>  
    </div>

    <div class="col-md-6">
      <div>
         <div style="background: #fff;color: #f37c20;padding: 3px;font-weight: bold;font-size: 2rem;">
           <span> Suggested Itineraries</span>
          </div>
          <div >
                    <div class="clearfix">
          <div style="background: #06af8f;text-align: center;padding: 10px;color: #fff;">
            <h2 style="font-size: 1.4rem;"> {{$dataviewdetails->title}}</h2>
          </div>
     

      
        </div>

        <div id="accordion" style="padding: 10px;border: 1px solid #048068;">
          <div style="width: 100%;    float: none !important;    display: inline-block;">
              <div class="btn-group float-right" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary mr-1 btn-sty-dt" onclick="myfunction()"><i class="fas fa-arrow-down"></i></button>
                <button type="button" class="btn btn-secondary btn-sty-dt" onclick="myfunction2()"><i class="fas fa-arrow-up"></i></button>
              </div>
          </div>
          <?php 
          
         //   if(!empty($dataviewdetails1)){
           //   $dulieu = base64_decode($dataviewdetails1);
              $old_itine = $dataviewdetails->itinerary;
              $keyvpint =1;
            foreach ($old_itine as $key => $valueold_itine) {
             
           ?>
            <div class="card" style="margin-bottom: 5px;">
              <div class="card-header p-0">
                <h4 class="panel-title itinerary_box">
                    <div class="day"> 
                      <span>DAY <?php echo $keyvpint ?></span>
                    </div>
                      <div class="tieude panel-heading">  
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key ?>" aria-expanded="true" aria-controls="collapseOne" class="card-link"><i class="fas fa-chevron-down float-right"></i><?php echo $valueold_itine->itinerary_name ?></a> 
                      </div>
                </h4>
              </div>

              <div id="collapse<?php echo $key ?>" class="collapse" style="">
                <div class="card-body">
                 <?php 
                   // $text_itinerary = base64_decode($valueold_itine[key($valueold_itine)]);
                    echo str_replace("<>","<br>", $valueold_itine->itinerary_detail);
                 ?>
                </div>
              </div>
            </div>
           
          <?php 
        $keyvpint++;
            }
          ?>

          </div>
          </div>

      </div>    
        <div style="border: 5px solid #048068;margin-top: 10px">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner">

            <?php 
            $image = '';
         //  $imageup =  '["fushimi-inari-taisha-shrine-1612656_960_720.jpg","temple-1841296_960_720.jpg","Japan (5).jpg","Japan4.jpg"]';
           $imageup = $dataviewdetails->imageup;
            if(!empty($imageup)){
               $data_image_slite = json_decode($imageup,TRUE);
                foreach ($data_image_slite as $keyslll => $valueimageslide) {
             ?>
              <div class="carousel-item <?php echo ($keyslll == 0)?'active':'' ?>">
                <div class="wrapper-card-dt">
            <img src="https://b2b.tweetworldtravel.com.au/images/add/{{$valueimageslide}}" class="w-100 img-fluid rounded" style="height: 40vh;">
          <div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated"></span></div>
          </div>
              </div>
                <?php } ?>  
               <?php }else{ ?>
                <?php  if (strpos($image, 'http') !== false) { ?>
                
                    <div class="carousel-item active">
                    <div class="wrapper-card-dt">
                    <img src="{{$dataviewdetails->image}}" class="w-100 img-fluid rounded" style="height: 40vh;">
                  <div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated">F AUD</span></div>
                  </div>
                </div>
                <?php }else{ ?>
                <div class="carousel-item active">
                    <div class="wrapper-card-dt">
                    <img src="https://b2b.tweetworldtravel.com.au/images/{{$dataviewdetails->image}}" class="w-100 img-fluid rounded" style="height: 40vh;">
                  <div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated">From AUD</span></div>
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
    </div>
     
    
    
  </div>
  <div class="row">
    <div style="padding: 10px;border: 1px solid #048068;margin-top: 10px">
        <div style="background: #fff;color: #f37c20;padding: 3px;font-weight: bold;font-size: 2rem;">
           <span> Visa Information</span>
        </div> 
        <div>
          {!! isset($dataviewdetails->visa)?$dataviewdetails->visa:'' !!}
        </div>  
    </div>
    <div style="padding: 10px;border: 1px solid #048068;margin-top: 10px">
        <div style="background: #fff;color: #f37c20;padding: 3px;font-weight: bold;font-size: 2rem;">
           <span> Terms & Conditions</span>
        </div> 
        <div>
            
          {!! isset($dataviewdetails->terms)?$dataviewdetails->terms:'' !!}
        </div>
    </div>
    <div class="col-md-6">
      
    </div> 
    <div class="col-md-6">
      
    </div> 
  </div>
</div>
</section>

@endsection

@section('jsmain')
<script type="text/javascript">
function myfunction(){
   $('#accordion .collapse').collapse('show');
}
function myfunction2(){
  $('#accordion .collapse').collapse('hide');
}

</script>

@endsection