@extends('cruise.layouts.cruise')
@section('title', 'About Us - Tweet World Tours')
@section('description', 'Tweet Tours operate luxury guided small group tours in Asia (2-16 pax). Embark on an unforgettable journey with premium services in 4-5 star hotels.')
@section('metatitle','About Us - Tweet World Tours')
@section('content')


 <style type="text/css" media="screen">
.elementor-image-box-content {
    height: 200px;
}

p.elementor-image-box-description {
    font-size: 14px !important;
}   
.card-our-value {
    transition: 0.3s;
    box-shadow: 0px 0px 0px grey;
    -webkit-transition: box-shadow .3s ease-out;
    box-shadow: 0.8px 0.9px 3px #adb5bd;
    background: #fff;
    border-radius: 5px;
}
 </style>

<section style="background-image: url({{url('img/about1.jpg')}});
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;padding: 126px 0px 50px 0px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="wr-img-1" style="position: relative;">
          <img src="{{url('img/about2.png')}}" alt="">
           <div class="wwwaa" style="position: absolute;top: -75px;right: 0px;">
              <img src="{{url('img/about3.png')}}" alt="">
           </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="pt-3" style="text-align: right;">
        <h3 class="font-weight-bold pb-3"><blockquote class="quote__body" style="font-family: 'Dancing Script', cursive;    padding: 0;
    margin: 0;">" Travel is Learning, Experience is Knowledge "</blockquote> <em style="font-family: 'Dancing Script', cursive;">Thuy Carroll</em></h3>
        <p style="text-align: left;font-size: 14px;"><b>Travel</b> is an excellent <b>learning</b> experience for students; it highlights both the aspects of learning and traveling. Participation in an overseas learning experience enables students to build their personal and social competence and intercultural understanding, including language skills. International School tours makes the world your classroom as they bring students together to interact with different culture, expand their horizons and worldview, while enhancing the bond between teachers and students.</p>
      </div>
      </div>
    </div>
  </div>
</section>

<section class="accordion-sc-ab">
  <div class="container">
  <div id="accordion">
<!--   <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link mauxanh font-weight-bold w-100 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          “Travel is Learning, experience is knowledge” - Thuy Carroll
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Travel is an excellent learning experience for students; it highlights both the aspects of learning and traveling. Participation in an overseas learning experience enables students to build their personal and social competence and intercultural understanding, including language skills. International School tours makes the world your classroom as they bring students together to interact with different culture, expand their horizons and worldview, while enhancing the bond between teachers and students.
      </div>
    </div>
  </div> -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0"> 
        <button class="btn btn-link collapsed mauxanh font-weight-bold w-100 text-left text-uppercase" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Who are we ?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
            <blockquote class="blockquote">
            <p class="mb-0" style="font-size: 1rem;">
                    Asia School Tours is a one of Tweet World Travel’s branches. Tweet World Travel was founded in 2012 by our Managing Director, Thuy Carroll. Our company is wholly Australian owned and is one of Australia’s leading travel wholesalers for Worldwide River Cruises and Asia Tour Operators. Our head office is in Adelaide, South Australia.
            </p>
            <br>
                 <p class="mb-0" style="font-size: 1rem;">We have local operation offices in Asia. This means that we have direct control over all of our tours allowing us to have the highest level of control over tour quality and features.  We are also able to be flexible and alter our tours at the last minute to best suit our clients.</p>
                  <br>
            <p class="mb-0" style="font-size: 1rem;">Tweet World Travel are proud to be an accredited AFTA and ATAS travel agency having met the national accreditation scheme criteria of strict financial and customer service. This national accreditation scheme means that you can have complete confidence and peace of mind when booking travel with us. You can trust that we are dependable, well trained, experienced destination and travel professionals, which is extremely important for your peace of mind when booking travel, especially if you should need personal assistance while you are away.</p>
             <br>
            <p class="mb-0" style="font-size: 1rem;">Tweet World Travel are also a full member of Council of Australia Tour Operators (CATO) ensuring that you are dealing with a specialist tour operator that maintains a high level of service excellence within the travel industries. Also, as a proud member of International Air Transport Association (IATA), Tweet World Travel are dedicated to training and high-quality service within the current airline and cruise ship travel industries.</p>
             <br>
            <p class="mb-0" style="font-size: 1rem;">Our professional travel experts are highly trained, experienced and passionate travelers. All of our tours are guided by Local Guides.</p>
            </blockquote>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed mauxanh font-weight-bold w-100 text-left text-uppercase" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          What is Our Specialty ?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <blockquote class="blockquote">
        <p style="font-size: 1rem;">We specialise in professionally designing and customising <b>School Tours.</b> We pride ourselves in offering fully personalised service for each school we work with, ensuring that we meet your learning objectives. Our tours allow students to have a memorable educational experience of a lifetime and the opportunity to witness first-hand the human face of poverty and hardship rarely seen at home.</p>
        <br>
        <p style="font-size: 1rem;">We are flexible with our itineraries and each of our school tours are specifically tailored to your school learning requirements, whether your students are travelling for a specific topic or looking for something with cross curricula value.</p>
      </blockquote>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed mauxanh font-weight-bold w-100 text-left text-uppercase" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          Where do we do it?
        </button>
      </h5>
    </div>
    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
      <div class="card-body">
      <section class="st-about-us2" style="background-image: url('{{url('https://images.wallpaperscraft.com/image/lines_spots_light_30501_1920x1080.jpg')}}');
    background-position: center right;
    background-repeat: no-repeat;
    background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-12" data-aos="fade-left">
        <h4 class="text-center font-weight-b600 text-white pb-3 text-uppercase" style="text-decoration: underline;"></h4>
     
      </div>
                  <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>vietnam</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/vietnam.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>laos</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Laos.jpg')}}" alt="">
        </div>
      </div>
            <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>cambodia</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Cambodia.jpg')}}" alt="">
        </div>
      </div>
            <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>japan</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/japan.jpg')}}" alt="">
        </div>
      </div>
            <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>china</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/China1.jpg')}}" alt="">
        </div>
      </div>
            <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>myanmar</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Myanmar.jpg')}}" alt="">
        </div>
      </div>

                  <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>malaysia</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/india.jpeg')}}" alt="">
        </div>
      </div>
            <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>sri lanka</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Sri Lanka.jpg')}}" alt="">
        </div>
      </div>
            <div class="col-lg-4 col-md-4 col-6 pb-3">
        <div class="card-operate-tour">
          <h4>mongolia</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Mongolia.jpg')}}" alt="">
        </div>
      </div>
    </div>
<!--     <div class="row">
      <div class="col-lg-8 col-md-6">
        <div class="row pt-2">
          
        
                    <div class="col-lg-3 col-md-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>china</h4>
          <img class="w-100 height-100px" src="{{url('img/China1.jpg')}}" alt="">
        </div>
      </div>
                  <div class="col-lg-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>laos</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Laos.jpg')}}" alt="">
        </div>
      </div>
                  <div class="col-lg-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>myanmar</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Myanmar.jpg')}}" alt="">
        </div>
      </div>
                  <div class="col-lg-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>nepal</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/nepal.jpg')}}" alt="">
        </div>
      </div>
      </div>
              <div class="row pt-2">
          
        
                    <div class="col-md-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>korea</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Korea.jpg')}}" alt="">
        </div>
      </div>
                  <div class="col-md-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>borneo</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Borneo.jpg')}}" alt="">
        </div>
      </div>
                  <div class="col-md-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>cambodia</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Cambodia.jpg')}}" alt="">
        </div>
      </div>
                  <div class="col-md-3 col-6 pb-2">
        <div class="card-operate-tour">
          <h4>bhutan</h4>
          <img class="w-100 height-100px" src="{{url('img/tour/Bhutan.jpg')}}" alt="">
        </div>
      </div>
      </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-2">
        <div class="card-operate-tour">
          <h4 style="padding: 9px 0;">mekong river cruises</h4>
          <img class="w-100" style="height: 250px;" src="{{url('img/tour/landiep1.jpg')}}" alt="">
        </div>
      </div>
    </div> -->
  </div>   
</section>
      </div>
    </div>
  </div>
<!--       <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed mauxanh font-weight-bold w-100 text-left" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          Why Choose us for your international school tour?
        </button>
      </h5>
    </div>
    <div id="collapse5" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
      <div class="card-body">
        Use the icon on the home page
      </div>
    </div>
  </div> -->
</div>
</div>
</section>

<!-- <section class="ourteam py-5" style="background-image: url(https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/bg-2-about.png);
    background-position: center right;
    background-repeat: no-repeat;
    background-size: cover;">

  <div class="container">
      <h2 class="pb-3 font-weight-bold">OUR DEDICATED TEAM</h2>
    <div class="row">
        <div class="col-sm-12">
          <div id="customers-abus" class="owl-carousel"> 
            <div class="item card-1tt">
              <div class="shadow-effect">
                <img class="img-responsive" src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/team-2.jpg" alt="#">
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section> -->
<div class="container pb-3">
  <h3 class="font-weight-bold">OUR DEDICATED TEAM</h3>
</div>
<section class="ourteam" style="background-image: url('https://www.tweettours.com/img/bg-ourteam-about.png');
    background-position: center right;
    background-repeat: no-repeat;
    background-size: cover;">

  <div class="container">
  
    <div class="row">
        <div class="col-sm-12">
<img class="w-100" src="https://www.tweettours.com/img/TEAMGOOD.jpg" alt="">

        </div>
    </div>
  </div>
</section>

<section class="pt-4" style="background: #f8f9fa;">
  <div class="container">
    <!-- <h3 class="font-weight-bold pb-3">OUR VALUES</h3> -->
    <h3 class="font-weight-bold" style="/* position: absolute; */top: 15px;left: 30px;">OUR VALUES</h3>
    <div class="row">
      <div class="col-md-3 mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3" data-aos="fade-down"  data-aos-duration="1000">
          <!--  <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a> -->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Relationship</a></div>
                <p class="elementor-image-box-description">We value all our relationships – relationships with our customers, Travel Agents and relationships with our partners</p>
              </div>
        </div>
      </div>
            <div class="col-lg-3 col-md-4 mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3" data-aos="fade-down" data-aos-duration="1000">
           <!-- <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a> -->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Loyalty</a></div>
                <p class="elementor-image-box-description">We are reliable and trustworthy in all our relationship with our customers, travel agents and preferred partners.</p>
              </div>
        </div>
      </div>
            <div class="col-lg-3 col-md-4  mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3" data-aos="fade-down"  data-aos-duration="1000"> 
          <!--  <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a> -->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Commitment</a></div>
                <p class="elementor-image-box-description">We are committed to provide an excellence level of service and value for our customers, travel agents and preferred partners. </p>
              </div>
        </div>
      </div>
            <div class="col-lg-3 col-md-4  mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3" data-aos="fade-down"data-aos-duration="1000">
        <!--    <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a> -->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Teamwork</a></div>
                <p class="elementor-image-box-description">We always aim to produce extraordinary results and achieve our best through working together with our clients, colleagues and our community as natural partners. </p>
              </div>
        </div>
      </div>
            <div class="col-lg-3 col-md-4  mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3"  data-aos="flip-right" data-aos-duration="1000">
          <!--  <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a> -->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Service</a></div>
                <p class="elementor-image-box-description">At Tweet World Travel isn’t just about technology and systems. It’s what we do for people with them that counts. We like helping people whether they’re colleagues, clients or partners</p>
              </div>
        </div>
      </div>
            <div class="col-lg-3 col-md-4  mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3" data-aos="flip-right" data-aos-duration="1000">
          <!--  <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a> -->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Integrity</a></div>
                <p class="elementor-image-box-description">We deliver what we promise, and only promise what we can deliver. We do what we say with warmth, humour, and a great deal of thought. (That’s why people enjoy working with us!)</p>
              </div>
        </div>
      </div>
            <div class="col-lg-3 col-md-4  mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3" data-aos="flip-right" data-aos-duration="1000">
          <!--  <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a> -->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Strength</a></div>
                <p class="elementor-image-box-description">We aim to always exceed the expectations of our clients, our colleagues and our partners. We’re committed to growing our global footprint together with our customers, travel Agent and partners.</p>
              </div>
        </div>
      </div>

            <div class="col-lg-3 col-md-4  mb-3">
        <div class="elementor-image-box-wrapper card-our-value p-3" data-aos="flip-right" data-aos-duration="1000">
         <!--   <a href="#">
              <img src="https://ld-wp73.template-help.com/wordpress/prod_19731/v1/wp-content/uploads/2018/07/umbrella2.svg" alt="">
            </a>-->
            <div class="elementor-image-box-content">
              <div class="elementor-image-box-title">
                <a class="font-weight-bold" href="#">Responsible</a></div>
                <p class="elementor-image-box-description">We commit to true sustainability through responsible travel practice. We support the local economy while valuing the environment and do our best to minimise the impacts of tourism in both environmental and cultural sense.</p>
              </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
