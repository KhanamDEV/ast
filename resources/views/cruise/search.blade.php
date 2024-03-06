@extends('cruise.layouts.cruise')
@section('title','Worldwide River Cruises Search')
@section('description', 'Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money.')
@section('metatitle', 'Worldwide River Cruises Search - Worldwide River Cruises')
@section('content')


<section class="hohohu">
   <?php //print_r($dataviewCategorycurrent);
  if(!empty($dataviewCategorycurrent[0]->imagecover)){
   ?>
<div class="parallax z1" style="background-image: url('https://b2b.tweetworldtravel.com.au/images/categorycover/{{$dataviewCategorycurrent[0]->imagecover}}');height: 53vh;background-attachment: unset;">
<?php }else{ ?>
<div class="parallax z1" style="background-image: url('{{ asset('img/slide/Slovaquie-Danube-Bratislava-rive-bateau_CroisiEurope.jpg') }}');height: 53vh;background-attachment: unset;">
<?php } ?>


  <div class="first-div" style="height: 53vh">
    <a href="">
    <div class="first-inner-div fix-pl-tn btn-8">
      <?php 
        if(!empty($dataviewCategorycurrent[0])){
       ?>
      <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom"><?php echo !empty($dataviewCategorycurrent[0]->description)? strip_tags($dataviewCategorycurrent[0]->description) :$dataviewCategorycurrent[0]->name?></p>  
      <?php } ?>   
    </div>
    </a>
  </div>
</div>
</section>



<section class="wrapper-dt my-4">
        <div class="content">
            <div class="container">
           
              <div class="my-2" style="display: block;"> 
                <?php 
  if(!empty($dataviewCategorycurrent[0])){
 ?>
                <h3 class="chutwt d-table-cell maunentwt px-4 py-3 font-weight-bold"><?php echo $dataviewCategorycurrent[0]->name?></h3>  
              <?php }else{ ?>
  SEARCH RESULTS
              <?php } ?>
             </div>

            <div class="my-2" style="display: none"> 
                <nav class="breadcrumb-tn pt-2" aria-label="breadcrumb">
                  <ol class="breadcrumb maunentwt d-inline-flex">
                    <li class="breadcrumb-item"><a href="#" class="chutwt font-weight-bold">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="chutwt font-weight-bold">Library</a></li>
                    <li class="breadcrumb-item chutwt font-weight-bold active" aria-current="page">EUROPE CRUISES</li>
                  </ol>
                </nav>
             </div>
<?php 
//print_r($dataviewdetails);
if(empty($dataviewdetails)){
?>
 <div class="ro1w">
   <p>No results for keyword <b>{{ Request::get('search') }}</b> </p>
    <p>Back to <a href="{{ url('/') }}" class="chutwt font-weight-bold">Home</a></p>
 </div>
<?php
}else{
 ?>

                <div class="row">
                  
                  @foreach ($dataviewdetails as $itemcruise)
                  <?php 
                  //print_r($itemcruise);
                   ?>

                  <div class="col-xl-4 col-md-6">
                      <?php 
                          $data_name = str_replace(" ","-",$itemcruise['slug']);
                           ?>
                      <a href="{{ url('/posts',[$itemcruise['tripcode'],$data_name]) }}">
                        <div class="post-module">
                          <!-- Thumbnail-->
                          <div class="thumbnail">
                           
                            <?php if (strpos($itemcruise['image'], 'http') !== false) { ?>
                              <img src="<?php echo $itemcruise['image'] ?>" alt="<?php echo $itemcruise['title'] ?>" />
                            <?php }else{?>
                              <img src="https://b2b.tweetworldtravel.com.au/images/<?php echo $itemcruise['image'] ?>" alt="<?php echo $itemcruise['title'] ?>" />
                            <?php } ?>
                          </div>
                          <!-- Post Content-->
                          <div class="post-content">
                            <div class="category">
                              <div class="ex1 pt-1">
                               <!--  <i class="fas fa-car fa" aria-hidden="true"></i> -->
                                <i class="fas fa-wifi fa" aria-hidden="true"></i>
                                <i class="fas fa-ship fa" aria-hidden="true"></i>
                                <i class="fas fa-utensils fa" aria-hidden="true"></i>
                                <i class="fas fa-compass fa" aria-hidden="true"></i>
                              </div>
                            </div>
                              <h1 class="title"><?php echo $itemcruise['title'] ?></h1>
                                     <h2 class="sub_title">&nbsp<?php
                                     echo substr(strip_tags($itemcruise['shortdescription']),0,100); 
                                  

                                     ?></h2>
        <div class="description"><p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  ">
          {!!strip_tags($itemcruise['body'])!!}
        </p></div>
                            

                               <div class="clearfix" style="font-size: .9rem;color: #000;">
  <p class="float-left">From <b><?php echo number_format($itemcruise['pricesale']) ?></b> AUD</p>
  <p class="float-right">Duration <span class="text-secondary"><?php echo $itemcruise['duration'] ?> days <i class="far fa-clock fa-fw" style="font-size: .8rem;"></i></span></p>
</div>


                              <div class="post-meta"> <p class="m-0"><button class="btn btn-banner-tn btn-lg btn-block">BOOK NOW</button></p></div>
                            </div>
                          </div>
                        </a>
                    </div>
                    <?php // break; ?>
                    @endforeach

                </div>
           <?php } ?>
            </div>
        </div>
</section>

<style type="text/css">
  /*.post-module .post-content .title {
    height: 43px;
    overflow-y: hidden;
    margin: 0;
    padding: 0 0 10px;
    color: #22374e;
    font-size: 18px;
    font-weight: 700;
}*/
/*h2.sub_title {
    font-size: 14px !important;
    padding: 10px 0px !important;
}*/
/*.description{
  font-size: 12px !important;
  display: block !important;
  padding: 0 !important;
  margin: 0 !important;
}*/
/*.first-inner-div p {
    font-size: 20px !important;
 }*/
</style>

@endsection

