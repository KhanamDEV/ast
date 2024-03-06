
@extends('cruise.layouts.cruise')
@section('title','Project Destination '.$dataviewcategory->name .' - Asia School Tours')
@section('description', htmlspecialchars($dataviewcategory->description))
@section('metatitle','Project Destination '.$dataviewcategory->name .' - Asia School Tours')


@section('content')
<?php 
  $countries = array(
  'af' => 'Afghanistan',
  'ax' => 'Åland Islands',
  'al' => 'Albania',
  'dz' => 'Algeria',
  'as' => 'American Samoa',
  'ad' => 'Andorra',
  'ao' => 'Angola',
  'ai' => 'Anguilla',
  'aq' => 'Antarctica',
  'ag' => 'Antigua & Barbuda',
  'ar' => 'Argentina',
  'am' => 'Armenia',
  'aw' => 'Aruba',
  'ac' => 'Ascension Island',
  'au' => 'Australia',
  'at' => 'Austria',
  'az' => 'Azerbaijan',
  'bs' => 'Bahamas',
  'bh' => 'Bahrain',
  'bd' => 'Bangladesh',
  'bb' => 'Barbados',
  'by' => 'Belarus',
  'be' => 'Belgium',
  'bz' => 'Belize',
  'bj' => 'Benin',
  'bm' => 'Bermuda',
  'bt' => 'Bhutan',
  'bo' => 'Bolivia',
  'ba' => 'Bosnia & Herzegovina',
  'bw' => 'Botswana',
  'br' => 'Brazil',
  'io' => 'British Indian Ocean Territory',
  'vg' => 'British Virgin Islands',
  'bn' => 'Brunei',
  'bg' => 'Bulgaria',
  'bf' => 'Burkina Faso',
  'bi' => 'Burundi',
  'kh' => 'Cambodia',
  'cm' => 'Cameroon',
  'ca' => 'Canada',
  'ic' => 'Canary Islands',
  'cv' => 'Cape Verde',
  'bq' => 'Caribbean Netherlands',
  'ky' => 'Cayman Islands',
  'cf' => 'Central African Republic',
  'ea' => 'Ceuta & Melilla',
  'td' => 'Chad',
  'cl' => 'Chile',
  'cn' => 'China',
  'cx' => 'Christmas Island',
  'cc' => 'Cocos (Keeling) Islands',
  'co' => 'Colombia',
  'km' => 'Comoros',
  'cg' => 'Congo - Brazzaville',
  'cd' => 'Congo - Kinshasa',
  'ck' => 'Cook Islands',
  'cr' => 'Costa Rica',
  'ci' => 'Côte d’Ivoire',
  'hr' => 'Croatia',
  'cu' => 'Cuba',
  'cw' => 'Curaçao',
  'cy' => 'Cyprus',
  'cz' => 'Czechia',
  'dk' => 'Denmark',
  'dg' => 'Diego Garcia',
  'dj' => 'Djibouti',
  'dm' => 'Dominica',
  'do' => 'Dominican Republic',
  'ec' => 'Ecuador',
  'eg' => 'Egypt',
  'sv' => 'El Salvador',
  'gq' => 'Equatorial Guinea',
  'er' => 'Eritrea',
  'ee' => 'Estonia',
  'sz' => 'Eswatini',
  'et' => 'Ethiopia',
  'fk' => 'Falkland Islands',
  'fo' => 'Faroe Islands',
  'fj' => 'Fiji',
  'fi' => 'Finland',
  'fr' => 'France',
  'gf' => 'French Guiana',
  'pf' => 'French Polynesia',
  'tf' => 'French Southern Territories',
  'ga' => 'Gabon',
  'gm' => 'Gambia',
  'ge' => 'Georgia',
  'de' => 'Germany',
  'gh' => 'Ghana',
  'gi' => 'Gibraltar',
  'gr' => 'Greece',
  'gl' => 'Greenland',
  'gd' => 'Grenada',
  'gp' => 'Guadeloupe',
  'gu' => 'Guam',
  'gt' => 'Guatemala',
  'gg' => 'Guernsey',
  'gn' => 'Guinea',
  'gw' => 'Guinea-Bissau',
  'gy' => 'Guyana',
  'ht' => 'Haiti',
  'hn' => 'Honduras',
  'hk' => 'Hong Kong SAR China',
  'hu' => 'Hungary',
  'is' => 'Iceland',
  'in' => 'India',
  'id' => 'Indonesia',
  'ir' => 'Iran',
  'iq' => 'Iraq',
  'ie' => 'Ireland',
  'im' => 'Isle of Man',
  'il' => 'Israel',
  'it' => 'Italy',
  'jm' => 'Jamaica',
  'jp' => 'Japan',
  'je' => 'Jersey',
  'jo' => 'Jordan',
  'kz' => 'Kazakhstan',
  'ke' => 'Kenya',
  'ki' => 'Kiribati',
  'xk' => 'Kosovo',
  'kw' => 'Kuwait',
  'kg' => 'Kyrgyzstan',
  'la' => 'Laos',
  'lv' => 'Latvia',
  'lb' => 'Lebanon',
  'ls' => 'Lesotho',
  'lr' => 'Liberia',
  'ly' => 'Libya',
  'li' => 'Liechtenstein',
  'lt' => 'Lithuania',
  'lu' => 'Luxembourg',
  'mo' => 'Macao SAR China',
  'mg' => 'Madagascar',
  'mw' => 'Malawi',
  'my' => 'Malaysia',
  'mv' => 'Maldives',
  'ml' => 'Mali',
  'mt' => 'Malta',
  'mh' => 'Marshall Islands',
  'mq' => 'Martinique',
  'mr' => 'Mauritania',
  'mu' => 'Mauritius',
  'yt' => 'Mayotte',
  'mx' => 'Mexico',
  'fm' => 'Micronesia',
  'md' => 'Moldova',
  'mc' => 'Monaco',
  'mn' => 'Mongolia',
  'me' => 'Montenegro',
  'ms' => 'Montserrat',
  'ma' => 'Morocco',
  'mz' => 'Mozambique',
  'mm' => 'Myanmar',
  'na' => 'Namibia',
  'nr' => 'Nauru',
  'np' => 'Nepal',
  'nl' => 'Netherlands',
  'nc' => 'New Caledonia',
  'nz' => 'New Zealand',
  'ni' => 'Nicaragua',
  'ne' => 'Niger',
  'ng' => 'Nigeria',
  'nu' => 'Niue',
  'nf' => 'Norfolk Island',
  'kp' => 'North Korea',
  'mk' => 'North Macedonia',
  'mp' => 'Northern Mariana Islands',
  'no' => 'Norway',
  'om' => 'Oman',
  'pk' => 'Pakistan',
  'pw' => 'Palau',
  'ps' => 'Palestinian Territories',
  'pa' => 'Panama',
  'pg' => 'Papua New Guinea',
  'py' => 'Paraguay',
  'pe' => 'Peru',
  'ph' => 'Philippines',
  'pn' => 'Pitcairn Islands',
  'pl' => 'Poland',
  'pt' => 'Portugal',
  'xa' => 'Pseudo-Accents',
  'xb' => 'Pseudo-Bidi',
  'pr' => 'Puerto Rico',
  'qa' => 'Qatar',
  're' => 'Réunion',
  'ro' => 'Romania',
  'ru' => 'Russia',
  'rw' => 'Rwanda',
  'ws' => 'Samoa',
  'sm' => 'San Marino',
  'st' => 'São Tomé & Príncipe',
  'sa' => 'Saudi Arabia',
  'sn' => 'Senegal',
  'rs' => 'Serbia',
  'sc' => 'Seychelles',
  'sl' => 'Sierra Leone',
  'sg' => 'Singapore',
  'sx' => 'Sint Maarten',
  'sk' => 'Slovakia',
  'si' => 'Slovenia',
  'sb' => 'Solomon Islands',
  'so' => 'Somalia',
  'za' => 'South Africa',
  'gs' => 'South Georgia & South Sandwich Islands',
  'kr' => 'South Korea',
  'ss' => 'South Sudan',
  'es' => 'Spain',
  'lk' => 'Sri Lanka',
  'bl' => 'St Barthélemy',
  'sh' => 'St Helena',
  'kn' => 'St Kitts & Nevis',
  'lc' => 'St Lucia',
  'mf' => 'St Martin',
  'pm' => 'St Pierre & Miquelon',
  'vc' => 'St Vincent & Grenadines',
  'sd' => 'Sudan',
  'sr' => 'Suriname',
  'sj' => 'Svalbard & Jan Mayen',
  'se' => 'Sweden',
  'ch' => 'Switzerland',
  'sy' => 'Syria',
  'tw' => 'Taiwan',
  'tj' => 'Tajikistan',
  'tz' => 'Tanzania',
  'th' => 'Thailand',
  'tl' => 'Timor-Leste',
  'tg' => 'Togo',
  'tk' => 'Tokelau',
  'to' => 'Tonga',
  'tt' => 'Trinidad & Tobago',
  'ta' => 'Tristan da Cunha',
  'tn' => 'Tunisia',
  'tr' => 'Turkey',
  'tm' => 'Turkmenistan',
  'tc' => 'Turks & Caicos Islands',
  'tv' => 'Tuvalu',
  'ug' => 'Uganda',
  'ua' => 'Ukraine',
  'ae' => 'United Arab Emirates',
  'gb' => 'United Kingdom',
  'us' => 'United States',
  'uy' => 'Uruguay',
  'um' => 'US Outlying Islands',
  'vi' => 'US Virgin Islands',
  'uz' => 'Uzbekistan',
  'vu' => 'Vanuatu',
  'va' => 'Vatican City',
  've' => 'Venezuela',
  'vn' => 'Vietnam',
  'wf' => 'Wallis & Futuna',
  'eh' => 'Western Sahara',
  'ye' => 'Yemen',
  'zm' => 'Zambia',
  'zw' => 'Zimbabwe',
  );
$array_id = [
              '210'=>'Community',
              '211'=>'Volunteering',
              '212'=>'Field-Study',
             ];
 ?>

<style type="text/css" media="screen">
    .st-card-comu .header-pj-t {
    position: absolute !important;
     height:auto !important; 
}
.header-pj-t{
font-size: 15px;
  }
.enquirebook{
  background: #06af8f;
    border: 0;
    border-radius: 0;
    color: #fff;
}  
.article {
    /* border-bottom: 1px dotted grey; */
    padding: 3px;
    margin: 2px;
}
.article .text {
    /* font-size: 12px; */
    /* line-height: 17px; */
    /* font-family: arial; */
}
.article li{
  font-size: 0.9rem;
}
.article .text.short {
    height: 150px;
    overflow: hidden;
}
.article .text.full {
    
}
.read-more {
  cursor: pointer;
    display: inline-block;
    padding: 3px;
    background-color: #06af8f;
    color: white;
    margin: 2px;
    float: right;
}
.form-group {
    margin-bottom: 0px;
}
</style>
<section class="hohohu st-header-pj height-53vh" style="overflow: hidden;">
<img src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/school-project-01.jpg') }}" class="img-fluid w-100 " alt="Responsive image" style="position: relative;">
    <div class="container">
      <div style="position: absolute;bottom: 0;margin-bottom: 30px;">
        <h1 class="text-white mb-4">Project Destination {{$dataviewcategory->name}}</h1>
      </div>
    </div>
</section>


<div class="container st-header-pj" style="margin-top: -40px;">
<ul class="nav nav-pills" style="font-size: 1rem;position: relative;">
  <li class="nav-item pr-1">
    <a class="nav-link {{ ($menu_view1 == 'destination')?'active':' '}}" href="{{url('/destination/'.$dataviewcategory->name)}}">Trips</a>
  </li>
  <li class="nav-item pr-1">
    <a class="nav-link {{ ($menu_view1 == 'destination1')?'active':' '}}" href="{{url('/destination/Projects/'.$dataviewcategory->name)}}">Project</a>
  </li>
 

</ul>
</div>

<section class="content-res login-form-margin-20 st-card-comu" style="background-color: #fff">
<div class="container">
  <div class="title-hd-sc pb-5">


    <?php 
    $content_show = '';
    switch ($dataviewcategory->name) {
      case 'Community Project':
        $content_show = 'Community Project';
        break;
      case 'Volunteering Activities':
        $content_show = 'Volunteering Activities';
        break;
      case 'Field Study Project':
        $content_show = 'Field Study Project';
        break;  
      default:
        $content_show = '';
        break;
    }

     ?>
    <h4 style="font-size: 14px">{!! $dataviewcategory->note !!}</h4>
   
  </div>
  <div class="row">
   <?php 
   $key_country = '';
    foreach ($dataview as $keydataview => $valuedataview) {
     ?>
    <div class="col-md-6 col-lg-4 pb-3">
       <?php 
                          $data_name = str_replace(" ","-",$valuedataview->slug);
                           ?>
    
         <a href="#<?php // url('/projects',[$valuedataview->tripcode,$data_name]) ?>">
        <div class="wr-ct-img" style="position: relative;">
         
          <div class="header-pj-t"> {{ucwords(mb_strtolower($valuedataview->title, 'UTF-8'))}}</div>
         <?php if (strpos($valuedataview->image, 'http') !== false) { ?>
                              <img class="card-img-top"  src="<?php echo $valuedataview->image ?>" alt="<?php echo $valuedataview->title ?>" />
                            <?php }else{?>
                               <?php 
                if(!empty($valuedataview->imageup)){
                    $data_image_slite = json_decode($valuedataview->imageup,TRUE);
                 ?>
   <img class="card-img-top"  src="https://b2b.tweetworldtravel.com.au/images/add/<?php echo str_replace('cruise','',str_replace('undefined','',end($data_image_slite)))?>" />

                 <?php }else{ ?>
   <img class="card-img-top"  src="https://b2b.tweetworldtravel.com.au/images/<?php echo $valuedataview->image ?>" alt="<?php echo $valuedataview->title ?>" />
                    <?php } ?>
                            <?php } ?>
                          </div>
                          <a class="btn btn-block enquirebook booking_cruise_request" data-target="#onrequest" data-toggle="modal" href="#onrequest" data-title="{{$valuedataview->title}}">Enquire now</a>
    </a>
        <ul class="list-group list-group-horizontal mt-1 justify-content-center">
          <li class="list-group-item">
               <?php 
            $key_country = array_search($valuedataview->destination, $countries);
             ?>
              <span class="flag-icon flag-icon-{{$key_country}} icon-sz-commu d-flex"></span>
            <span class="span_flag">{{$valuedataview->destination}}</span>
          </li>
          <li class="list-group-item">
              <div class="when-t"> 
                <p class="m-0">{{$valuedataview->traveldates}}</p>       
              </div>
            <span class="span_flag">When</span>
          </li>
          <li class="list-group-item">
              <div class="day-t">     
                <p  class="m-0 mx-auto">{{$valuedataview->duration}}</p>
              </div>
            <span class="span_flag">days</span>
          </li>
          <li class="list-group-item">
               <?php 
               $datap = array();
foreach ($valuedataview->newtrip as $keynewtrip => $valuenewtrip) {
  if($valuenewtrip->category_id != '199'){
      $datap[] = $valuenewtrip->category_id;
    }
}
$datafter =  reset($datap);
$data_view_name = isset($array_id[$datafter])?$array_id[$datafter]:'';
$content_show_img = '';
  $content_show_text = '';
    switch ($data_view_name) {
      case 'Community':
        $content_show_img = asset('img/ourtrip/community.png');
        $content_show_text = 'Community';
        break;
      case 'Volunteering':
        $content_show_img =  asset('img/ourtrip/volunteering.png');
        $content_show_text = 'Volunteering';
        break;
      case 'Field-Study':
        $content_show_img = asset('img/ourtrip/field-study.png');
        $content_show_text = 'Field-Study';
        break;  
      default:
        $content_show_img = '';
        $content_show_text = '';
        break;
    }


               ?>
              <div class="icon-t">
              <img src="{{$content_show_img}}" alt="{{$valuedataview->title}}" style="width: 45px;height: 35px;margin: auto;background: #06af8f;padding: 2px;">     
              </div>
              
                <span class="span_flag">{{$content_show_text}}</span>
                
          </li>
        </ul>
       
        <div class="py-2 div_content_flag " style="">
          <div class="article">
          <div class="card-text pb-3 fix-p text short">{!!$valuedataview->body!!}</div>
          <span class="read-more">Read More</span>
              </div>
              
          {{-- <a style="position: absolute;bottom: 0"  data-target="#onrequest" data-toggle="modal" href="#onrequest" data-title="{{$valuedataview->title}}" class="under-a-st booking_cruise_request">Enquire This Project</a> --}}
        </div>
    </div>
  <?php } ?>
  
    
    
  </div>
</div>
</section>

<div class="modal fade" id="onrequest" tabindex="-1" role="dialog" aria-labelledby="onrequest" aria-hidden="true">
  <div class="modal-dialog modal-lg-tn" role="document">
    <div class="modal-content modal-content-dt">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Project Enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/contactonrequest') }}">

                  {{ csrf_field() }}
      
      <div class="form-group">
        <label for="name">Your Name (required):</label> 
        <input class="form-control" autofocus="autofocus" required="required" name="name" type="text" id="name"> 
        
      </div>
      <div class="form-group">
        <label for="schoolname">Your School Name: </label> 
        <input class="form-control" autofocus="autofocus" required="required" name="schoolname" type="text" id="schoolname"> 
        
      </div>
      <div class="form-group">
        <label for="schooladdress">Your School Address: </label> 
        <input class="form-control" autofocus="autofocus" required="required" name="schooladdress" type="text" id="schooladdress"> 
        
      </div>
      <div class="row">
    <div class="form-group col-md-6">
        <label for="schoolphone">Your School Phone Number: </label> 
        <input class="form-control" autofocus="autofocus" required="required" name="schoolphone" type="text" id="schoolphone"> 
        
      </div>
      <div class="form-group col-md-6">
        <label for="phone">Your Phone Number</label> 
        <input class="form-control" required="required" name="phone" type="text" id="phone"> 
        
      </div>
    </div>

      <div class="form-group">
        <label for="email">Your Email (required)</label> 
        <input class="form-control" required="required" name="email" type="text" id="email"> 
        
      </div>
      
     

      <div class="form-group">
        <label for="subject">Enquired Project:</label> 
        <input class="form-control" required="required" id="Subject" name="subject" type="text"> 
        
      </div>
      <div class="form-group">
        <label for="duration">Preferred Project Duration (days):</label> 
        <input class="form-control" required="required" id="duration" name="duration" type="text"> 
        
      </div>
      <div class="form-group">
        <label for="message">Brief Message On This Project:</label> 
        <textarea class="form-control" id="ckeditor" required="required" name="message" cols="50" rows="10"></textarea> 
        
      </div>
      <div class="box_body form-group">
      
      
      <div class="box_body form-group"><input class="btn btn-primary btn-lg" id="submitForm" style="width:100%" type="submit" value="Submit">
      </div>
      
       
          </div></form>
          </div>
      </div>
  </div>
</div>


@endsection

@section('jsmain')
<script type="text/javascript">
  $(document).on("click", ".booking_cruise_request", function () {
                    
                    // var product_pricesinge = $(this).data('title');
                     var string_title = $(this).data('title');
                     $('#Subject').val(string_title);

                   });
                   $(".read-more").click(function(){        
        var $elem = $(this).parent().find(".text");
        if($elem.hasClass("short"))
        {
          $(this).text('Show Less');
            $elem.removeClass("short").addClass("full");        
        }
        else
        {
          $(this).text('Read More');
            $elem.removeClass("full").addClass("short");        
        }       
    });
</script>

@endsection