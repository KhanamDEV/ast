@extends('cruise.layouts.cruise')
@section('title',isset($dataview1[0]->title)?$dataview1[0]->title:''.' Asia School Tours')
@section('description', $dataview1[0]->description)
@section('metatitle', 'Destinations - Asia School Tours')
@section('content')
<style type="text/css" media="screen">
  .card-img-top{
    height: 200px;
  }
  
</style>


<section class="hohohu st-header-pj">
<img src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/Vietnam5.jpg') }}" class="img-fluid w-100" alt="Responsive image" style="position: relative;">
    <div class="container">
      <div style="position: absolute;bottom: 0;margin-bottom: 30px;">
        <h1 class="text-white mb-4" style="text-shadow: 0 0 0.2em rgba(0,0,0,0.6);font-size: 3rem;">Destination</h1>
      </div>
    </div>
</section>
<div class="container st-header-pj" style="margin-top: -40px;">
<ul class="nav nav-pills" style="font-size: 1rem;position: relative;">
  <li class="nav-item pr-1">
    <a class="nav-link active" href="#">Countries & Regions</a>
  </li>

</ul>
</div>
<section class="content-res login-form-margin-20" style="background-color: #fff">
<div class="container">
  <div class="title-hd-sc pb-3">
    <?php 
   // print_r($dataview1[0]->description); ?>
    <h4 style="font-size: 14px;">{!! $dataview1[0]->description !!}</h4>
  </div>
  <div class="row">

    <?php  foreach ($dataview as $keydataviewdetails => $valuedataviewdetails) { ?>
    <?php 
    if($valuedataviewdetails->id == '76' || $valuedataviewdetails->id == '84' || $valuedataviewdetails->id == '81' ||$valuedataviewdetails->id == '78' || $valuedataviewdetails->id == '93' || $valuedataviewdetails->id == '89' || $valuedataviewdetails->id == '77' || $valuedataviewdetails->id == '80' || $valuedataviewdetails->id == '202' ){
   
   ?>
    <div class="col-md-4 pb-3" style="position: relative;">
    	<div class="card-hv-pj">
      <a href="{{url('/destination/'.$valuedataviewdetails->name)}}">
        <div class="wr-ct-img">
          <img class="card-img-top" src="https://b2b.tweetworldtravel.com.au/images/{{str_replace('undefined','',$valuedataviewdetails->image)}}" alt="{{$valuedataviewdetails->name}}">
          <div class="header-pj-t">
            <i class="fas fa-chevron-right" style="position: absolute;right: 5px;font-size: 20px;top: 7px;"></i>
            {{ $valuedataviewdetails->name }}
          </div>
          <div style="position: absolute;bottom: 0;right:10px;">
            <span class="flag-icon flag-icon-{{$valuedataviewdetails->name}} icon-sz-commu"></span>
          </div>
        </div>
        </a>
        <div class="py-2">
          <p class="card-text" style="font-size: 14px;"><?php  echo substr(strip_tags($valuedataviewdetails->description),0,200); ?></p>
          <a href="{{url('/destination/'.$valuedataviewdetails->name)}}" class="under-a-st mb-3" style="position: absolute;bottom: 0;">FIND OUT MORE</a>
        </div>
        </div>
    </div>
    <?php }?>
  <?php }?>
  </div>
</div>
</section>

@endsection

@section('jsmain')


@endsection