@extends('cruise.layouts.cruise')
@section('title',$dataviewcategory->name)
@section('description', htmlspecialchars($dataviewcategory->description))
@section('metatitle', $dataviewcategory->name)
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
 ?>
 <style type="text/css" media="screen">
   
   .sty-chu-indam {
    font-size: 0.75rem;
    font-weight: bold;
    text-transform: capitalize;
    letter-spacing: 0.05em;
    color: #99978a;
    margin-right: 0.5em;
  }
  .st-card-comu .header-pj-t {
    position: absolute !important;
     height:auto !important; 
}
.header-pj-t{
font-size: 15px;
	}
 </style>

<section class="hohohu st-header-pj">
<img src="{{ asset('https://b2b.tweetworldtravel.com.au/images/imagecover/AngKorCambodia.jpg') }}" class="img-fluid w-100" alt="{{$dataviewcategory->name}}" style="position: relative;">
    <div class="container">
      <div style="position: absolute;bottom: 0;margin-bottom: 30px;">
        <h1 class="text-white mb-4">{{($dataviewcategory->name)?$dataviewcategory->name:'Adventure Trips'}}</h1>
      </div>
    </div>
</section>
<div class="container st-header-pj" style="margin-top: -40px;">
<ul class="nav nav-pills" style="font-size: 1rem;position: relative;">
  <li class="nav-item pr-1">
    <a class="nav-link " href="{{ url('/trip-types') }}">All Trip Types</a>
  </li>

  <li class="nav-item pr-1">
    <a class="nav-link {{ ($dataviewcategory->name == 'Explorer Trips')?'active':' '}}" href="{{ url('/trip-types',['Explorer-Trips']) }}">Explorer</a>
  </li>
  <li class="nav-item pr-1">
    <a class="nav-link {{ ($dataviewcategory->name == 'Adventure Trips')?'active':' '}}" href="{{ url('/trip-types',['Adventure-Trips']) }}">Adventure</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ ($dataviewcategory->name == 'Field-trek Trips')?'active':' '}}" href="{{ url('/trip-types',['Field-trek-Trips']) }}">Field Trek</a>
  </li>

</ul>
</div>
<section class="content-res login-form-margin-20 st-card-comu" style="background-color: #fff">
  <?php 
 $content_show_img = '';
  $content_show_text = '';
    switch ($dataviewcategory->name) {
      case 'Explorer Trips':
        $content_show_img = asset('img/ourtrip/explorer-green.png');
        $content_show_text = 'Explorer';
        break;
      case 'Adventure Trips':
        $content_show_img =  asset('img/ourtrip/adventure-green.png');
        $content_show_text = 'Adventure';
        break;
      case 'Field-trek Trips':
        $content_show_img = asset('img/ourtrip/field-trek-green.png');
        $content_show_text = 'Field-trek';
        break;  
      default:
        $content_show_img = '';
        $content_show_text = '';
        break;
    }
   ?>
<div class="container">
  <div class=" border-bottom">
    <div class="row">
    <div class="col-md-6">
        <div class="title-hd-sc">
          <h4 style="font-size: 14px;">{!!$dataviewcategory->description!!}</h4>
        </div>
    </div>
    <div class="col-md-6">
<ul class="list-group list-group-flush" style="font-size: 14px">
  {!!$dataviewcategory->note!!}
</ul>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 py-3">
  <span style="font-size: 14px;color: #99978a;">Our suggested itineraries are based on personal recommendation and can be <strong>tailored</strong> to suit your school and group.</span>
  </div>
</div>

  <div class="row">
    <?php 
    $key_country = '';
    foreach ($dataview as $keydataview => $valuedataview) {
     ?>
    <div class="col-md-6 col-lg-4">
        <?php 
                          $data_name = str_replace(" ","-",$valuedataview->slug);
                          //url('/trip-types',[$valuedataview->tripcode,$data_name])
                           ?>
    	 <a href="{{ url($data_name) }}">
        <div class="wr-ct-img" style="position: relative;">
         
          <div class="header-pj-t">
           {{ucwords(mb_strtolower($valuedataview->title, 'UTF-8'))}}
          </div>

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
    </a>
        <ul class="list-group list-group-horizontal mt-1 justify-content-center">
          <li class="list-group-item">
            <?php 
            $key_country = array_search($valuedataview->destination, $countries);
             ?>
              <span class="flag-icon flag-icon-{{$key_country}} icon-sz-commu d-flex"></span>
            <span class="span_flag"> {{$valuedataview->destination}}</span>
          </li>
          <li class="list-group-item">
              <div class="when-t"> 
                <p class="m-0 px-1">{{$valuedataview->traveldates}}</p>       
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
              <div class="icon-t">
              <!-- <i class="far fa-handshake mx-auto" style="font-size: 40px;color:#411154;"></i>            -->
              <img src="{{$content_show_img}}" alt="{{$dataviewcategory->name}}" style="width: 35px;height: 40px;margin: auto;padding-bottom: 5px;">
              </div>
            <span class="span_flag">{{$content_show_text}}</span>
          </li>
        </ul>

        <div class="py-2 div_content_flag">
          <p class="card-text text-over-3line pb-3">

            {{ mb_substr(strip_tags($valuedataview->body),0,200,'UTF-8')}}...
          </p>
          <a href="{{ url($data_name) }}" class="under-a-st">FIND OUT MORE</a>
        </div>
    </div>
  <?php } ?>
  
    
    
  </div>
</div>
</section>

@endsection

@section('jsmain')


@endsection