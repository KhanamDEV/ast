@extends('cruise.layouts.cruise')
@section('title','Mock')
@section('description', 'Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money.')
@section('metatitle', 'Mock')
@section('content')
<style type="text/css" media="screen">
  .list-group-horizontal {
    -ms-flex-direction: row;
    flex-direction: row;
}
.list-group-horizontal li{
  text-align: center;
  border:none;
}
.list-group-horizontal .list-group-item{
 padding: .25rem .75rem;
}
  .span_flag{
    font-size: 0.6875rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  color:#99978a;
  }
  .div_content_flag {
    padding: 0 0 30px 0 !important;
    margin: 0 !important;
    position: relative;
}
.div_content_flag p{
  font-size: 1rem;
    border-top: 1px solid;
    padding: 10px 0 0 0px;
    text-align: left;
    line-height: 1.3rem;
    margin-bottom: 0;
}
.header-pj-t{
  position: unset;
  height: 58px
}
.card-img-top{
  border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.dashed{
      margin-left: 8px;
    list-style-type: none;
    font-size: 1rem;
}
ul.dashed > li {
  text-indent: -5px;
}
ul.dashed > li:before {
  content: "-";
  text-indent: -5px;
}
</style>
<section class="hohohu">
    <div class="parallax-window-53" data-parallax="scroll" data-speed="0.5" data-image-src="{{ asset('img/MS-Loire-Princesse-Loire-profil03-CroisiEurope©CroisiEurope.jpg') }}">

  <div class="first-div" style="height: 53vh;">
    <a href="#">
    <div class="first-inner-div btn-8">
      <p class="m-0" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">School Trip Content here</p>     
    </div>
    </a>
  </div>
</div>
</section>

<section class="content-res login-form-margin" style="background-color: #fff">
<div class="container">
  
  <div class="row">
   
    <div class="col-md-6">
      <div style="border: 5px solid #048068">

          <div style="background: #06af8f;color: #fff;text-align: center;padding: 3px;">
           <h3> DESTINATION INFORMATION</h3>
          </div>

          <div style="padding: 10px">
            <h4>ITINERARY OPTIONS</h4>
            <div class="row">
              <div class="col">
                <img src="" alt="">
              </div>
              <div class="col">
                <img src="" alt="">
              </div>
              <div class="col">
                <img src="" alt="">
              </div>
            </div>
          </div>

          <div style="padding: 10px">
            <h4>PROJECT TYPES</h4>
            <div class="">
             <ul class="dashed">
               <li> Community</li>
               <li> Field Study</li>
             </ul>
            </div>
          </div>
          <div style="padding: 10px">
            <h4>ACCOMMODATION</h4>
            <div class="">
             <ul class="dashed">
               <li> Hotel</li>
             </ul>
            </div>
          </div>
          <div style="padding: 10px">
            <h4>LEARNING OBJECTIVES</h4>
            <div class="">
             <ul class="dashed">
               <li> Learn about the MYANMAR history, culture & traditions</li>
               <li> To take part in a community project</li>
               <li> Studies of Society and Environment</li>
             </ul>
            </div>
          </div>
          <div style="padding: 10px">
            <h4>HIGHLIGHTS</h4>
            <div class="">
             <ul class="dashed">
               <li> Community project</li>
               <li> Visit the worlds largest bell in the ancuent city of Mingun</li>
               <li> Engage with local community</li>
               <li> Explore the mysterious 5hwe U Min cave, home to thousands of Buddha images</li>
             </ul>
            </div>
          </div>
      </div>  
    </div>

    <div class="col-md-6">
      <div>
         <div style="background: #fff;color: #f37c20;padding: 3px;font-weight: bold;font-size: 2rem;">
           <span> Suggested Itineraries</span>
          </div>
          <div >
                    <div class="clearfix">
          <div style="background: #06af8f;text-align: center;padding: 10px;color: #fff;">
            <h2 style="font-size: 1.4rem;"> MYANMAR ADVENTURE, FIELD-TREK TOUR</h2>
          </div>
     

      
        </div>

        <div id="accordion" style="padding: 10px;border: 1px solid #048068;">
          <div style="width: 100%;    float: none !important;    display: inline-block;">
              <div class="btn-group float-right" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary mr-1 btn-sty-dt" onclick="myfunction()"><i class="fas fa-arrow-down"></i></button>
                <button type="button" class="btn btn-secondary btn-sty-dt" onclick="myfunction2()"><i class="fas fa-arrow-up"></i></button>
              </div>
          </div>
          <?php 
          $dataviewdetails = 'eyIxIjp7IlVFRlNTVk1nTFNCRlVFVlNUa0ZaSUMwZ1FrOUJVa1FnVTBoSlVBPT0iOiJWSEpoYm5ObVpYSWdabkp2YlNCUVlYSnBjeUJpZVNCamIyRmphQ0IwYnlCcWIybHVJRzkxY2lCemFHbHdJR2x1SUVWd1pYSnVZWGt1SUZCaGMzTmxibWRsY25NZ1lYSmxJSGRsYkdOdmJXVWdkRzhnWW05aGNtUWdiM1Z5SUhOb2FYQWdZWFFnTmpvd01DQndMbTB1SUVGbWRHVnlJR052YldadmNuUmhZbXg1SUhObGRIUnNhVzVuSUdsdWRHOGdlVzkxY2lCallXSnBibk1zSUhkbEoyeHNJR2x1ZEhKdlpIVmpaU0J2ZFhJZ1kzSmxkeUJoZENCaElIZGxiR052YldVZ1kyOWphM1JoYVd3Z1ltVm1iM0psSUdScGJtNWxjaTQ9In0sIjIiOnsiUlZCRlVrNUJXU0F0SUVSUFVrMUJUbE09IjoiVjJVbmJHd2djMlYwSUc5bVppQmllU0JqYjJGamFDQm1iM0lnYjNWeUlHVjRZM1Z5YzJsdmJpQjBieUJTWldsdGN5NGdWMlVuYkd3Z2FHRjJaU0JoSUdkMWFXUmxaQ0IwYjNWeUlHOW1JSFJvWlNCb2FYTjBiM0pwWXlCalpXNTBjbVVnWVc1a0lHbDBjeUJqWVhSb1pXUnlZV3d1SUZkbEoyeHNJSEpsZEhWeWJpQnZiaUJpYjJGeVpDNGdWR2hsSUdGbWRHVnlibTl2YmlCM2FXeHNJR0psSUhOd1pXNTBJSE5oYVd4cGJtY2dkRzhnUkc5eWJXRnVjeXdnY21WaFkyaHBibWNnYVhRZ2FXNGdkR2hsSUdWMlpXNXBibWN1In0sIjMiOnsiUkU5U1RVRk9VeUF0SUVOSVZFVkJWU0JVU0VsRlVsSloiOiJTbTlwYmlCMWN5Qm1iM0lnWVc0Z1pYaGpkWEp6YVc5dUlHRnNiMjVuSUhSb1pTQm1ZVzF2ZFhNZ1EyaGhiWEJoWjI1bElISnZkWFJsTGlCWFpTZHNiQ0J6WlhRZ2IzVjBJRzl1SUdFZ1pHbHpZMjkyWlhKNUlIUnZkWElnYjJZZ2RHaGxJSFpwYkd4aFoyVWdiMllnU0dGMWRIWnBiR3hwWlhKekxDQmlhWEowYUhCc1lXTmxJRzltSUVOb1lXMXdZV2R1WlM0Z1YyVW5iR3dnZG1semFYUWdZU0J0WVdwdmNpQkRhR0Z0Y0dGbmJtVWdhRzkxYzJVZ1ptOXNiRzkzWldRZ1lua2dZU0IwWVhOMGFXNW5LaUJ2WmlCamFHRnRjR0ZuYm1VdUlGZGxKMnhzSUhKbGRIVnliaUJ2YmlCaWIyRnlaQ0JoYm1RZ1kzSjFhWE5sSUhSdklFTm93NkowWldGMUlGUm9hV1Z5Y25rc0lIUm9jbTkxWjJnZ2RHaGxJR0psWVhWMGFXWjFiQ0JOWVhKdVpTQmpZVzVoYkNCc1lXNWtjMk5oY0dWekxpQlhaU2RzYkNCeVpXRmphQ0J2ZFhJZ1pHVnpkR2x1WVhScGIyNGdhVzRnZEdobElHSmxaMmx1Ym1sdVp5QnZaaUIwYUdVZ1pYWmxibWx1Wnk0PSJ9LCI0Ijp7IlEwaFVSVUZWSUZSSVNVVlNVbGtnTFNCVFFVbE9WQzFLUlVGT0xVeEZVeTFFUlZWWUxVcFZUVVZCVlZnPSI6IlYyVW5iR3dnWkdselkyOTJaWElnZEdobElIUnZkMjRnYjJZZ1EyakRvblJsWVhVZ1ZHaHBaWEp5ZVNCaGJtUWdjR0Z5ZEdsamFYQmhkR1VnYVc0Z1lTQm1ZV3hqYjI1eWVTQnphRzkzSUhkcGRHZ2diR2wyWlNCa1pXMXZibk4wY21GMGFXOXVjeWd4S1M0Z1FXWjBaWEozWVhKa2N5d2dkMlVuYkd3Z2NtVjBkWEp1SUc5dUlHSnZZWEprSUdGdVpDQmpjblZwYzJVZ2RHOGdVMkZwYm5RdFNtVmhiaTFNWlhNdFJHVjFlQzFLZFcxbFlYVjRMQ0J5WldGamFHbHVaeUJwZENCa2RYSnBibWNnZEdobElHVjJaVzVwYm1jdSJ9LCI1Ijp7IlUwRkpUbFF0U2tWQlRpMU1SVk10UkVWVldDMUtWVTFGUVZWWUlDMGdUVVZCVlZnZ0xTQk1RVWRPV1MxVFZWSXRUVUZTVGtVPSI6IlYyVW5iR3dnWTNKMWFYTmxJSFJ2SUUxbFlYVjRMaUJVYUdseklHRm1kR1Z5Ym05dmJpd2dkMlVuYkd3Z2MyVjBJRzkxZENCdmJpQmhJR2QxYVdSbFpDQjBiM1Z5SUc5bUlIUm9hWE1nWTJoaGNtMXBibWNnZEc5M2Jpd2dabTlzYkc5M1pXUWdZbmtnWVNCMFlYTjBhVzVuSUc5bUlIUm9aU0JtWVcxdmRYTWdRbkpwWlNCa1pTQk5aV0YxZUNCamFHVmxjMlV1SUZkbEoyeHNJSEpsZEhWeWJpQnZiaUJpYjJGeVpDQnBiaUJNWVdkdWVTMXpkWEl0VFdGeWJtVXUifSwiNiI6eyJURUZIVGxrdFUxVlNMVTFCVWs1RklDMGdVRUZTU1ZNPSI6IlJXRnliSGtnZEdocGN5QnRiM0p1YVc1bkxDQjNaU2RzYkNCemRHRnlkQ0JqY25WcGMybHVaeUIwYjNkaGNtUnpJRkJoY21sekxpQkpiaUIwYUdVZ1lXWjBaWEp1YjI5dUxDQjNaU2RzYkNCaGNuSnBkbVVnYVc0Z1VHRnlhWE1nWVc1a0lITmxkQ0J2ZFhRZ1ptOXlJR0Z1SUdWNFkzVnljMmx2YmlCMGFISnZkV2RvSUhSb1pTQnRZV3B2Y2lCemFYUmxjeUJ2WmlCMGFHVWdZMkZ3YVhSaGJDNGdTbTlwYmlCMWN5QnZiaUJoYmlCdmNtbG5hVzVoYkNCM1lXeHJJR0ZzYjI1bklIUm9aU0J3Y21WMGRHbGxjM1FnWTI5MlpYSmxaQ0IzWVd4cmQyRjVjeUJwYmlCUVlYSnBjeXdnWVd4c2IzZHBibWNnZVc5MUlIUnZJSFJ5WVhabGJDQmlZV05ySUhSb2NtOTFaMmdnZEdsdFpTQmhibVFnYUdsemRHOXllU0JoY205MWJtUWdkR2hsSUZCaGJHRnBjeUJTYjNsaGJDNGdWMlVuYkd3Z2NtVjBkWEp1SUc5dUlHSnZZWEprTGlCVWIyNXBaMmgwSUdseklHOTFjaUJuWVd4aElHUnBibTVsY2lCaGJtUWdaWFpsYm1sdVp5ND0ifSwiNyI6eyJVRUZTU1ZNZ1JFVlFRVkpVVlZKRiI6IlJXNXFiM2tnYjI1bElHeGhjM1FnWW5WbVptVjBJR0p5WldGclptRnpkQ0J2YmlCaWIyRnlaQ0JpWldadmNtVWdaR2x6WlcxaVlYSnJhVzVuSUdGMElEazZNREFnWVM1dExpQkZibVFnYjJZZ2IzVnlJSE5sY25acFkyVnpMZz09In19';
            if(!empty($dataviewdetails)){
              $dulieu = base64_decode($dataviewdetails);
              $old_itine = json_decode($dulieu,TRUE);
            foreach ($old_itine as $key => $valueold_itine) {
           ?>
            <div class="card" style="margin-bottom: 5px;">
              <div class="card-header p-0">
                <h4 class="panel-title itinerary_box">
                    <div class="day"> 
                      <span>DAY <?php echo $key ?></span>
                    </div>
                      <div class="tieude panel-heading">  
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key ?>" aria-expanded="true" aria-controls="collapseOne" class="card-link"><i class="fas fa-chevron-down float-right"></i><?php echo base64_decode(key($valueold_itine)) ?></a> 
                      </div>
                </h4>
              </div>

              <div id="collapse<?php echo $key ?>" class="collapse" style="">
                <div class="card-body">
                 <?php 
                    $text_itinerary = base64_decode($valueold_itine[key($valueold_itine)]);
                    echo str_replace("<>","<br>", $text_itinerary);
                 ?>
                </div>
              </div>
            </div>
           
          <?php 
            }
            }
          ?>

          </div>
          </div>

      </div>    
        <div style="border: 5px solid #048068;margin-top: 10px">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner">

            <?php 
            $image = '';
           $imageup =  '["fushimi-inari-taisha-shrine-1612656_960_720.jpg","temple-1841296_960_720.jpg","Japan (5).jpg","Japan4.jpg"]';
            if(!empty($imageup)){
               $data_image_slite = json_decode($imageup,TRUE);
                foreach ($data_image_slite as $keyslll => $valueimageslide) {
             ?>
              <div class="carousel-item <?php echo ($keyslll == 0)?'active':'' ?>">
                <div class="wrapper-card-dt">
            <img src="https://b2b.tweetworldtravel.com.au/images/add/{{$valueimageslide}}" class="w-100 img-fluid rounded" style="height: 40vh;">
          <div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated"></span></div>
          </div>
              </div>
                <?php } ?>  
               <?php }else{ ?>
                <?php  if (strpos($image, 'http') !== false) { ?>
                
                    <div class="carousel-item active">
                    <div class="wrapper-card-dt">
                    <img src="{{$dataviewdetails->image}}" class="w-100 img-fluid rounded" style="height: 40vh;">
                  <div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated">F AUD</span></div>
                  </div>
                </div>
                <?php }else{ ?>
                <div class="carousel-item active">
                    <div class="wrapper-card-dt">
                    <img src="https://b2b.tweetworldtravel.com.au/images/{{$dataviewdetails->image}}" class="w-100 img-fluid rounded" style="height: 40vh;">
                  <div class="overlay fadeInUp animated"><span class="zoomIn delay-1s animated">From AUD</span></div>
                  </div>
                </div>
                <?php } ?>
               <?php } ?>  
            

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
    </div>
     
    
    
  </div>
  <div class="row">
    <div style="padding: 10px;border: 1px solid #048068;margin-top: 10px">
        <div style="background: #fff;color: #f37c20;padding: 3px;font-weight: bold;font-size: 2rem;">
           <span> Visa Information</span>
        </div> 
        <div>
           <p>You must have a valid passport and a&nbsp;visa&nbsp;(or pre-approval for a&nbsp;visa&nbsp;on arrival or a visa exemption certificate) to enter&nbsp;Vietnam. Your passport must be valid for six months beyond your planned stay, and you must have at least one blank&nbsp;visa&nbsp;page.</p>

            <p>Some travellers with e-visas have reported having to pay a second visa fee on arrival because of differences between their passport and e-visa application. Make sure you correctly enter your details when applying. Print a copy of your application and carry it with you.</p>

            <p>If you're planning to stay longer than 30 days or require multiple entries, you'll need to&nbsp;apply for a visa directly from the nearest Embassy or Consulate of Vietnam. Complete the&nbsp;<a href="http://visa.mofa.gov.vn/Homepage.aspx">visa application form</a>&nbsp;online, then print it and take it to the nearest&nbsp;<a href="https://protocol.dfat.gov.au/Public/Missions/217">Embassy or Consulate of Vietnam</a>. If you arrive in Vietnam with a written approval letter for a visa to be issued on arrival, you'll need to pay the fee in cash, either in US dollar or Vietnamese dong. Check whether you will require a single entry or multiple entry visa.</p>

            <p>If your spouse or parent is a national of Vietnam, you can apply for a visa exemption certificate. The certificate is valid for&nbsp;five years and allows multiple entries into Vietnam for up to&nbsp;six months.</p>

            <p>If your visa expires or is otherwise no longer valid, you will face delays and fines when leaving.</p>

            <p>You cannot change the status of&nbsp;your entry visa (such as tourist visa or spouse visa) to any other visa type (such as a working visa) in-country.</p>

            <p>To obtain a visa extension from the Vietnamese immigration authorities (including for overstaying your visa), your passport must have at least six months validity remaining at the time of application.</p>

            <p>There are value and quantity restrictions on the import and export of prescription medicines.</p>

            <p>And 'addictive medicine' (used for the treatment of addiction). Prescriptions and medicines must be shown to customs.</p>

            <p>Vietnam has health screening for all inbound travellers. All foreigners must register their place of residence with the local police within 24 hours of arrival. The Australian Embassy and Consulate-General can't provide translation services to assist with registration.</p>

            <p>If you stay at a hotel, confirm you'll be registered as part of the normal check-in process. They'll need your passport details.</p>

            <p>Many hotels ask foreigners to leave their passport with hotel staff for registration purposes. It isn't a legal requirement for hotels to retain your passport for the duration of your stay.</p>

            <p>If you stay with family, friends or in another private residence, you'll need to register at the local police station, with a translator if needed.</p>

            <p>Local hosts need to pre-register foreign guests – if you stay in a private residence, make sure your host has satisfied this legal requirement.</p>

            <p>By law, you must use only one passport for your entry, exit, transit and residence in Vietnam.</p>

            <p>Make sure your passport is valid for at least six months after the date you intend to return to Australia.&nbsp;If your passport has less than six months, validity, you could be refused, or may not be permitted to board your flight.</p>

            <p>Your passport is a valuable document and attractive to criminals who may try to use your identity to commit crimes. Always keep it in a safe place.<o:p></o:p></p>
        </div>  
    </div>
        <div style="padding: 10px;border: 1px solid #048068;margin-top: 10px">
        <div style="background: #fff;color: #f37c20;padding: 3px;font-weight: bold;font-size: 2rem;">
           <span> Terms & Conditions</span>
        </div> 
        <div>
            <p align="center" style="margin-left:54.0pt;"><strong>BOOKING TERMS &amp; CONDITIONS</strong></p>

            <p><strong>1. BOOKING</strong></p>

            <p>Passenger names must be provided exactly as per passport at the time of booking. Any spelling corrections made after a deposit is paid must be sent in writing and will incur additional fees, including local suppliers’ fees, admin fees, any ticket/voucher re‐issue fees, etc.</p>

            <p>Tweet World Travel reserves the right to correct any errors in rates quoted/invoice or calculated, or any omissions made at any time during your booking. Any verbal quote given is an indication only of the final price and is subject to confirmation in writing. Even once payment has been paid in full but an error in price has been found, Tweet World Travel reserve the right to correct any error of outstanding amount.</p>

            <p>Any booking valued at or less than $1,000 must be paid in full amount after booking confirmation. Some airfares or services must be paid in full at the time of booking.</p>

            <p><strong><u>1.1 Deposit</u></strong></p>

            <p>You will be required to pay deposit after booking confirmation:</p>

            <ul>
              <li>Private Tours or small Group Tours is $500 Per Person</li>
              <li>Large Groups (more than 15 people) / School Tours is $700 Per Person</li>
              <li>Short packages, shore excursion, hotel etc. is $250 Per Person</li>
            </ul>

            <p style="margin-left:2.0cm;">If you cancel your booking at any time, your deposit is non-refundable, <em>or depend on each package's terms &amp; conditions.</em></p>

            <p><strong><u>Receipt of Deposit</u></strong></p>

            <p><strong><u><em>By sending/paid a deposit the client agrees to be bound by the terms, conditions and responsibilities set forth in this booking. The client also agrees that:</em></u></strong></p>

            <ul>
              <li>All persons are fit and physically able to partake unaided in their chosen activities/packages/tours /cruise etc. as outlined in the itinerary.</li>
              <li>All parties acknowledge the physical demands and hazards involved in the tour or cruise they will be undertaking and have chosen to participate at their own risk.</li>
              <li>All parties understand that any medical or dietary information provided to us does not, under any circumstances, make Tweet World Travel liable if a particular condition exacerbates while on tour or cruise which might affect their ability to participate in any portion of the tour or cruise</li>
            </ul>

            <p><strong><u>1.2 Final balance</u></strong></p>

            <p>Outstanding balance depends on the type of service you are undertaking:</p>

            <ul>
              <li>For private tours/packages or other products, outstanding balance is due 65 days before departure. If the outstanding payment is not received by day 65, your booking will automatically be cancelled.</li>
              <li>For large group tours and school tours, outstanding balance is due 90 days before departure. If the outstanding payment is not received by day 90, your booking will automatically be cancelled.</li>
            </ul>

            <p><strong>2. PAYMENT</strong></p>

            <ul>
              <li>All airfares must be paid in full at the time of booking confirmation</li>
              <li>Deposit will due <strong>immediately</strong> or <strong>within three day</strong> of your booking confirmed. It will be applied based on the specific product</li>
              <li>Final balance will be due before 65 days or 90 days before departure date
              <ul>
                <li>You can make a payment by &nbsp;<em>Enett,</em> <em>Bank Transfer</em>, Cheque or <em>Credit Card</em></li>
              </ul>
              </li>
            </ul>

            <p><em><strong><u>Credit Card Fee</u></strong></em></p>

            <ul>
              <li>The following Card Fees apply:</li>
              <li>Visa Credit Card - 1.8% fee and MasterCard Credit Card ‐ 1.76% fee applies.</li>
              <li>American Express (Amex) ‐ 2.8% fee applies.</li>
              <li>For late payment or urgent bookings, please notify us via email at <a href="mailto:payments@tweetworldtravel.com.au">payments@tweetworldtravel.com.au</a></li>
            </ul>

            <p><strong>3. LATE BOOKING</strong></p>

            <p>Any booking made within 110 days before departure will require payment in full when the booking is confirmed.</p>

            <p>Bookings made less than 60 days prior to departure for Group Tours or Escorted Tours will incur a late booking fee of $120 per person and must be paid in full at the time of booking.</p>

            <p><strong>4. AMENDMENTS FEES</strong></p>

            <p>After bookings are deposited, any amendment has to be requested in writing and incurs $69 fee per person, plus any additional costs and administrative expenses incurred in arranging the alteration.Alterations will be made at our discretion and may not always be possible.</p>

            <p><strong>5. SAFETY NET PROTECTION</strong></p>

            <ul>
              <li>Safety Net Protection is not included in our tour/cruise packages. If you wish to purchase safety net protection, an additional fee of $95 per person will occur. This is only valid for one-time use (claim).</li>
            </ul>

            <p style="margin-left:99.8pt;">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Safety Net Protection enables passengers to amend their tour and/or river cruise 15 days prior to departure, to another tour/cruise on the same destination departing in the same year (once only) without any applicable cancellation charges or penalties. The new tour must be at the same cost or higher, but cannot be at lower cost than the initial tour booked. If the passengers choose the higher cost option, then the additional difference amount must be paid. <strong><em>However, no modifications shall be accepted less than 15 days prior to departure.</em></strong></p>

            <p style="margin-left:99.8pt;">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Safety Net Protection is payable immediately at the time of making deposit payment. Once purchased, Safety Net Protection is not refundable&nbsp;&nbsp;</p>

            <p style="margin-left:99.8pt;">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Safety Net Protection does not apply for airfares, or third-party fees and charges.</p>

            <p style="margin-left:99.8pt;">·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Safety Net Protection allows for amendment ONLY, not cancellation.</p>

            <p style="margin-left:99.8pt;">&nbsp;</p>

            <p><strong>6. TRAVEL VOUCHER</strong></p>

            <p>Your travel voucher will be issue and send that to you or your travel agent from 15 -30 days before your departure. Make sure you have your travel voucher before you travel.</p>

            <p><strong>7. CANCELLATION</strong></p>

            <p>Please check with your consultant, your travel insurance provider or read our cancellation policy carefully before cancelling or amending your booking. For a specific tour / cruise package, a separate cancellation policy might be set out and applied to your booking.</p>

            <p>Please see the below for our general cancellation policy.</p>

            <p><strong><u>7.1 Cancellation by customer </u></strong></p>

            <p>Before the travel date the following fees will be apply:</p>

            <table border="1" cellpadding="0" cellspacing="0" style="width:605px;" width="605">
              <tbody>
                <tr>
                  <td style="width:283px;">
                  <p><strong>Private Tours or Group Tours/ Packages</strong></p>
                  </td>
                  <td style="width:321px;">
                  <p><strong>Large Group Tours &amp; School Tours</strong></p>

                  <p><strong>(More than 15 people)</strong></p>
                  </td>
                </tr>
                <tr>
                  <td style="width:283px;">
                  <p><em>65 days or more before departure – loss of deposit</em></p>
                  </td>
                  <td style="width:321px;">
                  <p><em>90 days or more before departure – loss of deposit</em></p>
                  </td>
                </tr>
                <tr>
                  <td style="width:283px;">
                  <p><em>64‐40 days before departure – 55%</em></p>
                  </td>
                  <td style="width:321px;">
                  <p><em>89‐79 days before departure – 65%</em></p>
                  </td>
                </tr>
                <tr>
                  <td style="width:283px;">
                  <p><em>39‐31 days before departure – 75%</em></p>
                  </td>
                  <td style="width:321px;">
                  <p><em>78‐61 days before departure – 85%</em></p>
                  </td>
                </tr>
                <tr>
                  <td style="width:283px;">
                  <p><em>Within 30 days of departure – 100%</em></p>
                  </td>
                  <td style="width:321px;">
                  <p><em>Within 60 days of departure – 100%</em></p>
                  </td>
                </tr>
                <tr>
                  <td style="width:283px;">
                  <p><em>Any 'no show' – 100%</em></p>
                  </td>
                  <td style="width:321px;">
                  <p><em>Any 'no show' – 100%</em></p>
                  </td>
                </tr>
              </tbody>
            </table>

            <p style="margin-left:17.0pt;">After the trip has commenced, we are unable to refund any amount for unused services due to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your unwillingness, early departure, late arrival, or missed days on tours.</p>

            <p style="margin-left:17.0pt;">If your tour/package includes international/domestic flights the airlines cancellation policies will &nbsp;&nbsp;be apply.</p>

            <p><strong><u>7.2 Cancellation by Tweet World Travel</u></strong></p>

            <p style="margin-left:14.0pt;">For group set departure date tour, if the minimum number of the group is not reached, we reserve the right to cancel or vary the tour 30 days prior to departure. If this event occurs, an alternative guaranteed travel date will be offered. Should these options not be acceptable Tweet World Travel will refund the full price paid, less visa cost.</p>

            <p style="margin-left:14.0pt;">If a tour is cancelled or varied prior to departure due to unforeseeable circumstances such as, but not restricted to, severe weather conditions or force&nbsp; majeure, Tweet World Travel will refund all monies prior to departure less visa cost, fuel surcharge and any other cancellation fees levied by airlines and other third parties.</p>

            <p style="margin-left:14.0pt;">&nbsp;</p>

            <p><strong><u>7.3 Cancellation by Local Supplier or Third-Party Travel Provider</u></strong></p>

            <p style="margin-left:18.0pt;">If the Local Supplier or Third Party Travel Provider changes any part of your booking for reasons beyond its control, for example, if a Local Supplier or Third Party Travel Provider changes its schedules, overbooks, or if there are any changes in applicable surcharges, fees or taxes, we will use our reasonable endeavors to notify you. If any such changes result in your Travel Product costing more or otherwise being materially different, then you may cancel the Travel Product and we will refund any monies already paid less any fees charged by us under these terms and conditions and by the Local Supplier or Third Party Travel Providers under the terms and conditions you agreed with them.</p>

            <p><strong>8. PUBLICITY</strong></p>

            <p>When you book with Tweet World Travel, you agree that we may use images of you taken during the trip and any comments made in writing by you regarding the trip, without recourse to you and without compensation to you, for publicity and promotion purposes only through whatever medium we choose.</p>

            <p>If you do not want your images to be displayed, you have to advise us in writing at the time of booking, or when you collect your travel documents.</p>

            <p><strong>9. PRIVACY</strong></p>

            <p>Tweet World Travel collects information about you (including health information where necessary) to process your travel arrangements, facilitate your participation in loyalty programs and conduct marketing activities and market research. If the information is not provided, we may not be able to make travel arrangements for you. We may disclose your personal information to our related companies, carriers, travel service providers, organisations which provide services to you.</p>

            <p>For our full Privacy Policy, see enclosed <a href="/privacy-policy">LINK</a></p>
                      </div>
    </div>
    <div class="col-md-6">
      
    </div> 
    <div class="col-md-6">
      
    </div> 
  </div>
</div>
</section>

@endsection

@section('jsmain')
<script type="text/javascript">
function myfunction(){
   $('#accordion .collapse').collapse('show');
}
function myfunction2(){
  $('#accordion .collapse').collapse('hide');
}

</script>

@endsection