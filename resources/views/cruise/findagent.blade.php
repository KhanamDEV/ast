@extends('cruise.layouts.cruise')
@section('title','Find Agent')
@section('description', 'Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money.')
@section('metatitle','Find Agent - Worldwide River Cruises')
@section('content')


<div class="container" >
  <p>
  <h3>AGENT of Postcode : {{$valuesearch}}</h3>
</p>
    <ul class="list-group">
      <?php 
      foreach ($dataviewdetails as $keydataviewdetails => $valuedataviewdetails) {
       // print_r($valuedataviewdetails);
        //Emailmain
        //EmailAgent
       ?>
    <li class="list-group-item">
        <div class="panel panel-default row">
            <div class="panel-body col-md-6">
                <div class="panel-info">
                    <p><strong>Name</strong> : {{$valuedataviewdetails->name}}</p>
                    <p>{{$valuedataviewdetails->StreetName}}, {{$valuedataviewdetails->Suburb}}, {{$valuedataviewdetails->State}}, {{$valuedataviewdetails->Postcode}}</p>
                    <p>{{$valuedataviewdetails->Country}}</p>
                    <p><strong>Email : </strong>{{$valuedataviewdetails->EmailAgent}}</p>
                    <p><strong>Tel : </strong>{{$valuedataviewdetails->Phonemain}}</p>
                    <p><strong>Website : </strong>{{$valuedataviewdetails->companyweb}}</p>
                </div>
     
            </div>
            <div class="col-md-6">
            <div class="mapouter">
					<div class="gmap_canvas">
						<iframe width="600" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q={{$valuedataviewdetails->StreetName}}, {{$valuedataviewdetails->Suburb}}, {{$valuedataviewdetails->State}}, {{$valuedataviewdetails->Postcode}}&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
					<style>
						.mapouter{position:relative;text-align:right;height:250px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:100%;}
				</style>
			</div>
            </div>
        </div>
    </li>
  <?php } ?>
</ul>
</div>


<style type="text/css">
  .list-group li {
    list-style: none;
}
.panel-info, .panel-rating, .panel-more1 {
    float: left;
    margin: 0 10px;
}
</style>
@endsection

