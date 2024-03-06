@extends('cruise.layouts.cruise')
@section('title','TERMS & CONDITIONS - Asia School Tours')
@section('description', 'Terms and Conditions of Asia School Tours Website')
@section('metatitle', 'TERMS & CONDITIONS - Asia School Tours')
@section('content')

<section class="content-res login-form-margin">
  <div class="container bg-white px-3 pb-3 shadow rounded">
  
  <?php 
  $term =  App::make("App\Http\Controllers\CruiseController")->getterm();
  //
   ?>
 
	<?php 
	echo json_decode($term);
	 ?>
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