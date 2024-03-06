@extends('cruise.layouts.cruise')
@section('title','Projects - Asia School Tours')
@section('description', 'All School Tour Projects - Asia School Tours')
@section('metatitle', 'Projects - Asia School Tours')
@section('content')



<section class="hohohu st-header-pj">
<img src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/Japan3.jpg') }}" class="img-fluid w-100 height-53vh" alt="Projects - Asia School Tours" style="position: relative;">
    <div class="container">
      <div style="position: absolute;bottom: 0;margin-bottom: 30px;">
        <h1 class="text-white mb-4">Projects</h1>
      </div>
    </div>
</section>
<div class="container st-header-pj" style="margin-top: -35px;">
<ul class="nav nav-pills">
  <li class="nav-item pr-1">
    <a class="nav-link active" href="{{ url('/projects') }}">All project types</a>
  </li>
  <li class="nav-item pr-1">
  
    <a class="nav-link {{ ($dataviewcategory->name == 'Community-Project')?'active':' '}}" href="{{ url('/projects',['Community-Project']) }}">Community</a>
  </li>
  <li class="nav-item pr-1">
    <a class="nav-link {{ ($dataviewcategory->name == 'Volunteering-Activities')?'active':' '}}" href="{{ url('/projects',['Volunteering-Activities']) }}">Volunteering</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ ($dataviewcategory->name == 'Field-Study-Project')?'active':' '}}" href="{{ url('/projects',['Field-Study-Project']) }}">Field Study</a>
  </li>
</ul>
</div>

<section class="content-res login-form-margin-20" style="background-color: #fff">
<div class="container">
  <div class="title-hd-sc pb-3">
    <h5 style="font-weight: 400;line-height: 1;letter-spacing: -0.5px;font-size: 16px">Our tours facilitate Community Service programs and Volunteering Activities to disadvantaged communities in some of the most poverty-stricken regions. In addition, our Field Study Project helps enhance student’s knowledge in a particular subject.</h5>
    <h5 style="font-weight: 400;line-height: 1;letter-spacing: -0.5px;font-size: 16px">These programs include building houses, schoolrooms and kindergartens for poor communities to improve their daily lives. Other activities include visiting orphanages, children’s hospitals and disability/rehabilitation centres.</h5>
    <h5 style="font-weight: 400;line-height: 1;letter-spacing: -0.5px;font-size: 16px">These activities allow students to witness first-hand the human face of poverty and individual hardship rarely witnessed at home. This provides students with a deeper understanding, as well as life-changing opportunities, to make a difference in the lives of these communities.</h5>
  </div>
  <div class="row">

     <?php 
    foreach ($dataview as $keydataview => $valuedataview) {
        $content_show_img = '';
    switch ($valuedataview->name) {
      case 'Community Project':
        $content_show_img = asset('img/ourtrip/community.png');
        break;
      case 'Volunteering':
        $content_show_img =  asset('img/ourtrip/volunteering.png');
        break;
      case 'Field Study Project':
        $content_show_img = asset('img/ourtrip/field-study.png');
        break;  
      default:
        $content_show_img = '';
        break;
    }

                          $data_name = str_replace(" ","-",$valuedataview->name);
                           ?>
    <div class="col-md-4">
    	<div class="card-hv-pj">
      <a href="{{url('/projects/'.$data_name)}}">
        <div class="wr-ct-img">
          <img class="card-img-top" src="https://b2b.tweetworldtravel.com.au/images/categorycover/{{$valuedataview->imagecover}}" alt="{{$valuedataview->name}}">
          <div class="header-pj-t">

            <!-- <i class="far fa-handshake px-2" style="font-size: 14px;"></i> -->
              <img src="{{$content_show_img}}" alt="{{$valuedataview->name}}" style=" width: 40px; height: 30px; ">

            <i class="fas fa-chevron-right" style="position: absolute;right: 5px;font-size: 20px;top: 7px;"></i>
            {{$valuedataview->name}}
          </div>
        </div>
        </a>

         <div class="py-2" style="height: 285px;overflow: hidden;">
          <p class="card-text" style="font-size: 1rem;">
          {!! $valuedataview->description !!}
            </p>
        
        </div>
         <a href="{{url('/projects/'.$data_name)}}" class="under-a-st">FIND OUT MORE</a>


      
        </div>
    </div>
     <?php }?>

  </div>
</div>
</section>

@endsection

@section('jsmain')


@endsection