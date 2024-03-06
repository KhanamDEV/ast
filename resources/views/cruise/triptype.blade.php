@extends('cruise.layouts.cruise')
@section('title','Trip Types - Asia School Tours')
@section('description', ' All School Tour Trip Types - Asia School Tours')
@section('metatitle', 'Trip Types - Asia School Tours')
@section('content')

<section class="hohohu st-header-pj">
<img src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/AngKorCambodia.jpg') }}" class="img-fluid w-100 " alt="Responsive image" style="position: relative;">
  		<div class="container">
  			<div style="position: absolute;bottom: 50px;">
  				<h1 class="text-white" style="text-shadow: 0 0 0.2em rgba(0,0,0,0.6);font-size: 3rem;">Trip Types</h1>
        </div>
  		</div>
</section>
<style type="text/css" media="screen">
  .attr-list-li {
    margin: 0 0 0 2rem;
    /*text-indent: -0.75em;*/
    font-size: 14px;
}
.header-pj-t{
 
      line-height: 30px;
          padding: 5px 30px 4px 7px;
}

</style>
<section class="content-res login-form-margin-20" style="background-color: #fff">
<div class="container">
  <div class="title-hd-sc pb-3">
    <h4 style="font-weight: 400;line-height: 1.3;font-size: 16px;">Tweet World Travel offer a range of trip types for your school to choose, from adventure and exploration trip throughout Asia, to adventurous educational Field Trek to follow your subjects. Our range of trip types provide a broad variety of experiences to suit all your educational objectives, school curricula and any group’s abilities. Especially, we can incorporate various options for community projects or volunteering activities into your school trip, making it a meaningful overseas school trip experience.</h4>
  </div>
  <div class="row">
    <?php 
    foreach ($dataview as $keydataview => $valuedataview) {
       $content_show_img = '';
    switch ($valuedataview->name) {
      case 'Explorer Trips':
        $content_show_img = asset('img/ourtrip/explorer.png');
        break;
      case 'Adventure Trips':
        $content_show_img =  asset('img/ourtrip/adventure.png');
        break;
      case 'Field-trek Trips':
        $content_show_img = asset('img/ourtrip/field-trek.png');
        break;  
      default:
        $content_show_img = '';
        break;
    }

     ?>
    <div class="col-md-4 pb-3">
    	<div class="card-hv-pj">
      <a href="{{url('/trip-types/'.str_replace(' ','-',$valuedataview->name))}}" alt="{{$valuedataview->name}}">
        <div class="wr-ct-img">
          <img class="card-img-top" src="https://b2b.tweetworldtravel.com.au/images/categorycover/{{$valuedataview->imagecover}}" alt="{{$valuedataview->name}}">
          <div class="header-pj-t">
            <!-- <i class="far fa-handshake px-2" style="font-size: 14px;"></i> -->
            <img src="{{$content_show_img}}" alt="{{$valuedataview->name}}" style=" width: 30px; height: 30px; ">

            <i class="fas fa-chevron-right" style="position: absolute;right: 5px;font-size: 20px;top: 12px;"></i>
           {{$valuedataview->name}}
          </div>
        </div>
        </a>
         {!! $valuedataview->note !!}
        <div class="py-2" style="height: 290px;overflow: hidden;">
          <p class="card-text" style="font-size: 14px;text-align: justify;">
            <?php 

            echo substr(strip_tags($valuedataview->description),0,400)."...";

             ?>
            </p>
        
        </div>
      <a href="{{url('/trip-types/'.str_replace(' ','-',$valuedataview->name))}}" alt="{{$valuedataview->name}}" class="under-a-st">FIND OUT MORE</a>
        </div>
    </div>
  <?php }?>
  </div>
</div>
</section>

@endsection

@section('jsmain')
<script type="text/javascript">

</script>

@endsection