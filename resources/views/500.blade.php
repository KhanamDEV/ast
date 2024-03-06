@extends('cruise.layouts.cruise')
@section('title','500 - Asia School Tours')
@section('description', '500 - Asia School Tours')
@section('metatitle', '500 - Asia School Tours')
@section('content')
<style type="text/css" media="screen">
	#notfound {
  position: relative;
  height: 40vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 767px;
  width: 100%;
  line-height: 1.4;
  padding: 0px 15px;
}

.notfound .notfound-404 {
  position: relative;
  height: 190px;
  line-height: 150px;
  margin-bottom: 25px;
}

.notfound .notfound-404 h1 {

  font-size: 186px;
  font-weight: 900;
  margin: 0px;
  text-transform: uppercase;


  background-size: cover;
  background-position: center;
}

.notfound h2 {
  font-family: 'Titillium Web', sans-serif;
  font-size: 26px;
  font-weight: 700;
  margin: 0;
}

.notfound p {
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  font-weight: 500;
  margin-bottom: 0px;
  text-transform: uppercase;
}

.notfound a {
  font-family: 'Titillium Web', sans-serif;
  display: inline-block;
  text-transform: uppercase;
  color: #fff;
  text-decoration: none;
  border: none;
  background: #5c91fe;
  padding: 10px 40px;
  font-size: 14px;
  font-weight: 700;
  border-radius: 1px;
  margin-top: 15px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 110px;
    line-height: 110px;
  }
  .notfound .notfound-404 h1 {
    font-size: 120px;
  }
}
</style>
<section class="hohohu st-header-pj">
<div id="notfound">
<div class="notfound">
<div class="notfound-404">
<h1>500</h1>
</div>
<h2>Oops! This Page Could Not Be Found</h2>
<p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>
<a href="{{ url('https://asiaschooltour.com.au/') }}">Go To Homepage</a>
</div>
</div>
</section>

@endsection

@section('jsmain')


@endsection