@extends('cruise.layouts.cruise')
@section('title', $title.' - Worldwide River Cruises')
@section('description', 'Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money.')
@section('metatitle',$title.' - Worldwide River Cruises')
@section('content')

<section class="hohohu">
  <?php 
  if(!empty($dataviewCategorycurrent[0]->imagecover)){
   ?>
<!-- <div class="parallax z1" style="background-image: url('https://b2b.tweetworldtravel.com.au/images/categorycover/{{$dataviewCategorycurrent[0]->imagecover}}');height: 53vh;"> -->
<div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="https://b2b.tweetworldtravel.com.au/images/categorycover/{{$dataviewCategorycurrent[0]->imagecover}}">
<?php }else{ ?>
<!-- <div class="parallax z1" style="background-image: url('{{ asset('img/MS-Loire-Princesse-Loire-profil03-CroisiEurope©CroisiEurope.jpg') }}');height: 53vh;"> -->
  <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="{{ asset('img/MS-Loire-Princesse-Loire-profil03-CroisiEurope©CroisiEurope.jpg') }}">
<?php } ?>
  <div class="first-div">
    <a href="#">
    <div class="first-inner-div btn-8">
      <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom"><?php echo $dataviewCategorycurrent[0]->name?></p>     
    </div>
    </a>
  </div>




</div>
</section>


<section class="wrapper-dt">
        <div class="content">
           <div class="container">
             

               <div class="my-2" style="display: none"> 
                <h2 class="chutwt d-table-cell maunentwt px-4 py-3 font-weight-bold"><?php echo $dataviewCategorycurrent[0]->name?></h2>  
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
  <div class="my-2">
  </div>

                <div class="row" id="demo">

                	@foreach ($datas as $data)
                    <div class="col-xs-12 col-sm-4 single-item">
                        <div class="card">
                        	<?php 
                        	$data_name = str_replace(" ","-",$data->name);
                        	 ?>
	                        <a class="img-card" href="{{ url('/m',[$data->id,$data_name]) }}">
	                           	<img src="https://b2b.tweetworldtravel.com.au/images/{{$data->image}}" />
	                        </a>
                            <div class="card-content">
                                <h3 class="card-title">
                                    <a class="chutwt" href="{{ url('/m',[$data->id,$data_name]) }}"> {{$data->name}}</a>
                                </h3>
                                <p class="mauvang" style="font-weight: 500"></p>
                               
                                  <a  href="{{ url('/m',[$data->id,$data_name]) }}">
                            <button type="button" class="btn btn-primary-tn1 text-uppercase mauvang">show more</button>
                             </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                   
                
                                                                   
                </div>
               
            </div>
        </div>
</section>


<a href="#" id="back-to-top" title="Back to top"><i class="fas fa-arrow-up chutwt"></i></a>




<section class="news-twt">
	<div class="container-fluid text-white py-3">
		<div class="col-md-10 mx-auto">
			<h1 class="text-center py-3" data-aos="flip-down">Reasons to choose this destination</h1>
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="warpper-ct p-3">
					<h3 class="pb-2">
				<?php 
				if($dataviewCategorycurrent[0]->name){
					echo $dataviewCategorycurrent[0]->name;
				}
				 ?>
					</h3>
					<?php 
				if($dataviewCategorycurrent[0]->description){
					echo $dataviewCategorycurrent[0]->description;
				}
				 ?>
					
				</div>
			</div>
			
		</div>
		</div>
	</div>
</section>


@endsection

@section('jsmain')




<script type="text/javascript">

	$('#demo').easyPaginate({
	    paginateElement: '.single-item',
	    elementsPerPage: 10,
	    effect: 'fade'
	});



</script>
<style type="text/css">
	.pagination {
  display: inline-block;
      margin: auto;
    position: relative;
    left: 40%;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.current {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.current) {background-color: #ddd;}
</style>
@endsection