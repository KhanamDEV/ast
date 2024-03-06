
@extends('cruise.layouts.cruise')
@section('title', 'Asia School Tours - Educational Tours for schools and students')
@section('description', 'Asia School Tours - We specialise in customising Asisan School Tours with teaching projects and pride ourselves in offering fully personalised service for each school we work with')
@section('metatitle', 'Asia School Tours - We specialise in customising School Tours and pride ourselves in offering fully personalised service for each school we work with, ensuring that we meet each school learning objectives')
@section('content')
	<section class="slide-banner" style="border-bottom: 3px solid #fff;">
  <div id="carouselExampleIndicators" class="carousel slide sty-tn-ca carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
    	<?php
shuffle($slide);
    	foreach ($slide as $keyslide => $valueslide) { ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $keyslide }}" class="{{ $keyslide == 0 ? ' active' : '' }}"></li>
        <?php } ?>
    </ol>

    <div class="carousel-inner" role="listbox">
		<?php foreach ($slide as $keyslide => $valueslide) { ?>

        <div class="carousel-item {{ $keyslide == 0 ? ' active' : '' }} rp-mb-hi-{{ $keyslide }}" style="background-image: url('{{asset('img/slide/'.$valueslide['image'])}}')">
          <?php
          //if(!empty($valueslide['detail'])){
           ?>

        <div class="carousel-caption-sc">
    <!-- <h2 class="font-size-3rem">{{ $valueslide['detail'] }}</h2> -->
        <h3 class="text-center">OUR MISSION</h3>

<p class="font-14rem">Our mission is to help students gain new perspectives and build skills for their future through meaningful experiences. </p>

<p class="font-14rem">Our aim is to provide your students with a unique, inspirational and meaningful life changing educational experience through in-depth exploration, authentic connections and hands on experiences.  </p>
  </div>
<?php //} ?>

		@if($valueslide['showpack'] == 1)
      <div class="carousel-caption-circle circle-slide animated fadeInRight">
  	<p class="text-center">{{ $valueslide['contentpack'] }}</p>

  </div>
		@endif
<!--     <div class="carousel-caption-tn-r">
  	<p style="font-weight: 400;font-size: 1.75rem;">FROM</p>
  	<p><span class="sty-span-slide">${{ number_format($valueslide['price']) }}</span><span style="font-size: 1.5rem;">pp</span></p><a href="<?php echo $valueslide['url'] ?>">
  	<button type="button" class="btn btn-banner-tn btn-lg btn-block">BOOK NOW!</button> </a>
  </div> -->
      </div>

<style>
@media all and (max-width: 600px) {
    .rp-mb-hi-{{ $keyslide }} {
        background-image:url('{{asset('img/slide/'.$valueslide['imagemobile'])}}') !important;
    }
}
</style>

   <?php } ?>

    </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </section>

<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=9127f262-a682-4613-b4eb-3987bafdb59a"> </script>


<section>
<div class="parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="img/home-section-1.jpg">
    <div class="first-div" style="height: 80vh">
    <div class="first-inner-div fix-hv-section btn-8">
      <a href="{{ url('/trip-types/Adventure-Trips') }}">
        <!-- <div class="container"> -->
        <div class="row dsec m-0 width-40rem">
          <div class="col-md-3" style="display: flex;align-items: center;">
            <img class="w-100" src="{{ asset('img/ourtrip/adventure.png') }}" alt="">
          </div>
          <div class="col-md-9 d-none d-lg-block" style="display: flex;align-items: center;">
            <div class="m-0">
              <h3>ADVENTURE:  </h3>
              <p style="font-size: 1.2rem;font-weight: 400;">Introduce your group to outdoor wilderness adventures, its people, their culture, and their way of life. Our itineraries include: trekking, kayaking, hiking, home stay or stay in a camp etc.</p>
            </div>
          </div>
        </div>
        <!-- </div> -->
      <!-- <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">&nbsp &nbsp Europe Cruises &nbsp &nbsp</p>      -->
      </a>
    </div>
  </div>
</div>
</section>
<section>
<div class="parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="img/home-section-2.jpg">
      <div class="first-div" style="height: 80vh">
    <div class="first-inner-div fix-hv-section btn-8">
      <a href="{{ url('/trip-types/Explorer-Trips') }}">
        <!-- <div class="container"> -->
        <div class="row dsec m-0 width-40rem">
          <div class="col-md-3" style="display: flex;align-items: center;">
            <img class="w-100" src="{{ asset('img/ourtrip/explorer.png') }}" alt="">
          </div>
          <div class="col-md-9 d-none d-lg-block" style="display: flex;align-items: center;">
            <div class="m-0">
              <h3>EXPLORER:  </h3>
              <p style="font-size: 1.2rem;font-weight: 400;">Take your group on a fun and relaxed overseas trip to witness the local culture and history rarely see at home. Including a little adventure or meaningful community projects. Our itineraries include: cooking classes, war history, museums, nature experience etc.</p>
            </div>
          </div>
        </div>
        <!-- </div> -->
      <!-- <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">&nbsp &nbsp Europe Cruises &nbsp &nbsp</p>      -->
      </a>
    </div>
  </div>
</div>
</section>
<section>
<div class="parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="img/home-section-4.jpg">
      <div class="first-div" style="height: 80vh">
    <div class="first-inner-div fix-hv-section btn-8">
      <a href="{{ url('/trip-types/Field-trek-Trips') }}">
        <!-- <div class="container"> -->
        <div class="row dsec m-0 width-40rem">
          <div class="col-md-3" style="display: flex;align-items: center;">
            <img class="w-100" src="{{ asset('img/ourtrip/field-trek.png') }}" alt="">
          </div>
          <div class="col-md-9 d-none d-lg-block" style="display: flex;align-items: center;">
            <div class="m-0">
              <h3>FIELD-TREK:  </h3>
              <p style="font-size: 1.2rem;font-weight: 400;">Take your group closer to a range of specific subjects in a nature environment and create an adventurous, study-based experience that combines elements of our Adventure and Explorer trip. Our itinerary includes: tree planting, jungle treks, wildlife safaris etc.</p>
            </div>
          </div>
        </div>
        <!-- </div> -->
      <!-- <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">&nbsp &nbsp Europe Cruises &nbsp &nbsp</p>      -->
      </a>
    </div>
  </div>
</div>
</section>



<section class="news-twt py-3" style="border-bottom: 3px solid #fff;">
	<div class="container-fluid text-white">
		<div class="col-md-10 mx-auto">
		<div class="row">
      <div class="col-md-4">
        <div class="warpper-ct text-center p-3">
          <a href="#" class="sty-sc-form" data-toggle="modal" data-target="#myModalsuvfi" >
          <p class="font-italic" style="font-size: 1.3rem" data-aos="fade-up" data-aos-duration="1000">Subscribe For Newsletter</p>
          <img src="{{ asset('img/icon-homepage/subscribe-for-newsletter.png') }}" class="img-fluid" style="width: 14%" alt="Subscribe for newsletter"></a>
        </div>
      </div>

			<div class="col-md-4">
				<div class="warpper-ct text-center p-3">
          <a href="{{ url('/askforbrochure') }}" class="sty-sc-form">
					<p class="font-italic" style="font-size: 1.3rem;" data-aos="fade-down" data-aos-duration="1000">Ask For Brochures</p>
          <img src="{{ asset('img/icon-homepage/ask-for-brochure.png') }}" class="img-fluid" style="width: 15%" alt="ask for brochure"></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="warpper-ct text-center p-3">
           <a href="{{ url('/contactform') }}" class="sty-sc-form">
					<p class="font-italic" style="font-size: 1.3rem;" data-aos="fade-up" data-aos-duration="1000">Contact Form</p>
          <img src="{{ asset('img/icon-homepage/contact-form.png') }}" class="img-fluid" style="width: 11%" alt="contact form"></a>
  				</div>
			</div>
		</div>
		</div>
	</div>
</section>


<section>
  <div style="min-height: 53vh !important;position: relative;background-color: #f8f9f9">
      <div class="carousel-caption-sc-1 shadow-lg">
        <h3 class="text-center">OUR COMMUNITY SCHOOL PROGRAMS</h3>
      <p class="font-size-pcs">Our tours facilitate community service programs and volunteering activities to disadvantaged communities in some of the most poverty-stricken regions. </p>
      <p class="font-size-pcs d-none d-xl-block">These programs include: building houses, school-rooms and kindergartens for communities. Other activities include visiting orphanages, children’s hospitals and disability/rehabilitation centres. These activities provide students with a deeper understanding, allowing them to witness first-hand the human face of poverty and individual hardship rarely witnessed at home, as well as the life-changing opportunities to make a difference in the lives of these communities.</p>
      <p class="font-size-pcs d-none d-xl-block">For the past 5 years through our school community programs, we have successfully completed many school and kindergarten projects and worked alongside the local villages and community groups to improve their daily lives. </p>
  </div>
  </div>
</section>



<div class="modal fade" id="myModalsuvfi" tabindex="-1" role="dialog" aria-labelledby="myModalsuvfi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content card">
      <div class="modal-header">
        <p class="modal-title" id="exampleModalLabel" style=" font-weight: bold; ">SUBSCRIBE FOR NEWSLETTER</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="https://tweetworldtravel.us3.list-manage.com/subscribe/post?u=2a246a10d49750d39c2506d77&amp;id=1cefdfe16f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="modal-body">


<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">Email Address*</label>
      <input class="form-control" type="text" name="EMAIL" id="mce-EMAIL" placeholder="Email Address">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">First Name</label>
      <input class="form-control" type="text" name="FNAME" id="mce-FNAME" placeholder="First Name">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">Last Name</label>
      <input class="form-control" type="text" name="LNAME" id="mce-LNAME" placeholder="Last Name">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">Birthday</label>
      <div class="d-flex">
      <input class="form-control w-25" type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE5[month]" id="mce-MMERGE5-month">
      <span class="px-2" style="align-self: center;">/</span>
      <input class="form-control w-25" type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE5[day]" id="mce-MMERGE5-day">
      </div>
   </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">Address</label>
      <input class="form-control" type="text" maxlength="70" name="MMERGE6[addr1]" id="mce-MMERGE6-addr1" placeholder="Address">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">Address Line 2</label>
      <input class="form-control" type="text" maxlength="70" name="MMERGE6[addr2]" id="mce-MMERGE6-addr2" placeholder="Address Line 2">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">City</label>
      <input class="form-control" type="text" maxlength="70" name="MMERGE6[city]" id="mce-MMERGE6-city" placeholder="City">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">State/Province/Region</label>
      <input class="form-control" type="text" maxlength="20" name="MMERGE6[state]" id="mce-MMERGE6-state" placeholder="State/Province/Region">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="form-control-label font-weight-600">Postal / Zip Code</label>
      <input class="form-control" type="text" maxlength="10" name="MMERGE6[zip]" id="mce-MMERGE6-zip" placeholder="Postal / Zip Code">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Country</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
<option value="164" selected>USA</option><option value="286">Aaland Islands</option><option value="274">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="178">American Samoa</option><option value="4">Andorra</option><option value="5">Angola</option><option value="176">Anguilla</option><option value="175">Antigua And Barbuda</option><option value="6">Argentina</option><option value="7">Armenia</option><option value="179">Aruba</option><option value="8">Australia</option><option value="9">Austria</option><option value="10">Azerbaijan</option><option value="11">Bahamas</option><option value="12">Bahrain</option><option value="13">Bangladesh</option><option value="14">Barbados</option><option value="15">Belarus</option><option value="16">Belgium</option><option value="17">Belize</option><option value="18">Benin</option><option value="19">Bermuda</option><option value="20">Bhutan</option><option value="21">Bolivia</option><option value="325">Bonaire, Saint Eustatius and Saba</option><option value="22">Bosnia and Herzegovina</option><option value="23">Botswana</option><option value="181">Bouvet Island</option><option value="24">Brazil</option><option value="180">Brunei Darussalam</option><option value="25">Bulgaria</option><option value="26">Burkina Faso</option><option value="27">Burundi</option><option value="28">Cambodia</option><option value="29">Cameroon</option><option value="30">Canada</option><option value="31">Cape Verde</option><option value="32">Cayman Islands</option><option value="33">Central African Republic</option><option value="34">Chad</option><option value="35">Chile</option><option value="36">China</option><option value="185">Christmas Island</option><option value="37">Colombia</option><option value="204">Comoros</option><option value="38">Congo</option><option value="183">Cook Islands</option><option value="268">Costa Rica</option><option value="275">Cote D'Ivoire</option><option value="40">Croatia</option><option value="276">Cuba</option><option value="298">Curacao</option><option value="41">Cyprus</option><option value="42">Czech Republic</option><option value="318">Democratic Republic of the Congo</option><option value="43">Denmark</option><option value="44">Djibouti</option><option value="289">Dominica</option><option value="187">Dominican Republic</option><option value="45">Ecuador</option><option value="46">Egypt</option><option value="47">El Salvador</option><option value="48">Equatorial Guinea</option><option value="49">Eritrea</option><option value="50">Estonia</option><option value="51">Ethiopia</option><option value="189">Falkland Islands</option><option value="191">Faroe Islands</option><option value="52">Fiji</option><option value="53">Finland</option><option value="54">France</option><option value="193">French Guiana</option><option value="277">French Polynesia</option><option value="56">Gabon</option><option value="57">Gambia</option><option value="58">Georgia</option><option value="59">Germany</option><option value="60">Ghana</option><option value="194">Gibraltar</option><option value="61">Greece</option><option value="195">Greenland</option><option value="192">Grenada</option><option value="196">Guadeloupe</option><option value="62">Guam</option><option value="198">Guatemala</option><option value="270">Guernsey</option><option value="63">Guinea</option><option value="65">Guyana</option><option value="200">Haiti</option><option value="66">Honduras</option><option value="67">Hong Kong</option><option value="68">Hungary</option><option value="69">Iceland</option><option value="70">India</option><option value="71">Indonesia</option><option value="278">Iran</option><option value="279">Iraq</option><option value="74">Ireland</option><option value="323">Isle of Man</option><option value="75">Israel</option><option value="76">Italy</option><option value="202">Jamaica</option><option value="78">Japan</option><option value="288">Jersey  (Channel Islands)</option><option value="79">Jordan</option><option value="80">Kazakhstan</option><option value="81">Kenya</option><option value="203">Kiribati</option><option value="82">Kuwait</option><option value="83">Kyrgyzstan</option><option value="84">Lao People's Democratic Republic</option><option value="85">Latvia</option><option value="86">Lebanon</option><option value="87">Lesotho</option><option value="88">Liberia</option><option value="281">Libya</option><option value="90">Liechtenstein</option><option value="91">Lithuania</option><option value="92">Luxembourg</option><option value="208">Macau</option><option value="93">Macedonia</option><option value="94">Madagascar</option><option value="95">Malawi</option><option value="96">Malaysia</option><option value="97">Maldives</option><option value="98">Mali</option><option value="99">Malta</option><option value="207">Marshall Islands</option><option value="210">Martinique</option><option value="100">Mauritania</option><option value="212">Mauritius</option><option value="241">Mayotte</option><option value="101">Mexico</option><option value="102">Moldova, Republic of</option><option value="103">Monaco</option><option value="104">Mongolia</option><option value="290">Montenegro</option><option value="294">Montserrat</option><option value="105">Morocco</option><option value="106">Mozambique</option><option value="242">Myanmar</option><option value="107">Namibia</option><option value="108">Nepal</option><option value="109">Netherlands</option><option value="110">Netherlands Antilles</option><option value="213">New Caledonia</option><option value="111">New Zealand</option><option value="112">Nicaragua</option><option value="113">Niger</option><option value="114">Nigeria</option><option value="217">Niue</option><option value="214">Norfolk Island</option><option value="272">North Korea</option><option value="116">Norway</option><option value="117">Oman</option><option value="118">Pakistan</option><option value="222">Palau</option><option value="282">Palestine</option><option value="119">Panama</option><option value="219">Papua New Guinea</option><option value="120">Paraguay</option><option value="121">Peru</option><option value="122">Philippines</option><option value="221">Pitcairn</option><option value="123">Poland</option><option value="124">Portugal</option><option value="126">Qatar</option><option value="315">Republic of Kosovo</option><option value="127">Reunion</option><option value="128">Romania</option><option value="129">Russia</option><option value="130">Rwanda</option><option value="205">Saint Kitts and Nevis</option><option value="206">Saint Lucia</option><option value="324">Saint Martin</option><option value="237">Saint Vincent and the Grenadines</option><option value="132">Samoa (Independent)</option><option value="227">San Marino</option><option value="255">Sao Tome and Principe</option><option value="133">Saudi Arabia</option><option value="134">Senegal</option><option value="326">Serbia</option><option value="135">Seychelles</option><option value="136">Sierra Leone</option><option value="137">Singapore</option><option value="302">Sint Maarten</option><option value="138">Slovakia</option><option value="139">Slovenia</option><option value="223">Solomon Islands</option><option value="140">Somalia</option><option value="141">South Africa</option><option value="257">South Georgia and the South Sandwich Islands</option><option value="142">South Korea</option><option value="311">South Sudan</option><option value="143">Spain</option><option value="144">Sri Lanka</option><option value="293">Sudan</option><option value="146">Suriname</option><option value="225">Svalbard and Jan Mayen Islands</option><option value="147">Swaziland</option><option value="148">Sweden</option><option value="149">Switzerland</option><option value="285">Syria</option><option value="152">Taiwan</option><option value="260">Tajikistan</option><option value="153">Tanzania</option><option value="154">Thailand</option><option value="233">Timor-Leste</option><option value="155">Togo</option><option value="232">Tonga</option><option value="234">Trinidad and Tobago</option><option value="156">Tunisia</option><option value="157">Turkey</option><option value="158">Turkmenistan</option><option value="287">Turks &amp; Caicos Islands</option><option value="159">Uganda</option><option value="161">Ukraine</option><option value="162">United Arab Emirates</option><option value="262">United Kingdom</option><option value="163">Uruguay</option><option value="165">Uzbekistan</option><option value="239">Vanuatu</option><option value="166">Vatican City State (Holy See)</option><option value="167">Venezuela</option><option value="168">Vietnam</option><option value="169">Virgin Islands (British)</option><option value="238">Virgin Islands (U.S.)</option><option value="188">Western Sahara</option><option value="170">Yemen</option><option value="173">Zambia</option><option value="174">Zimbabwe</option>
      </select>
    </div>
  </div>

<div class="p-3">
  <label>Marketing Permissions</label>
  <p>Please select all the ways you would like to hear from Worldwide River Cruises:</p>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="gdpr_11505" name="gdpr[11505]">
  <label class="form-check-label" for="gdpr_11505">Email</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="gdpr_11509" name="gdpr[11509]">
  <label class="form-check-label" for="gdpr_11509">Direct Mail</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="gdpr_11513" name="gdpr[11513]">
  <label class="form-check-label" for="gdpr_11513">Customized Online Advertising</label>
</div>
<p>You can unsubscribe at any time by clicking the link in the footer of our emails. For information about our privacy practices, please visit our website.</p>
        <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing. <a href="https://mailchimp.com/legal/" target="_blank">Learn more about Mailchimp's privacy practices here.</a></p>
</div>

</div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn maunentwt" name="subscribe" id="mc-embedded-subscribe">Subscribe Now</button> -->
        <button  class="btn my-2 my-sm-0 news-twt mauvang" type="submit" name="subscribe" id="mc-embedded-subscribe">Subscribe Now</button>
      </div>
</div>
</form>
</div>


</div>
</div>

@endsection

@section('jsmain')

@endsection
