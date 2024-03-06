@extends('cruise.layouts.cruisepayment')

@section('content') 

<?php 
$status_list = array(
	 	''=>'Select ',
      '1'=>'Quote',
      '2'=>'Instant Purchase (Booking Unconfirmed)',
      '3'=>'Amendment Request',
      '4'=>'Amendment Declined',
      '5'=>'Cancellation Request',
      '6'=>'Confirmed Unpaid',
      '7'=>'Payment Due In 48 Hours',
      '8'=>'Payment Due In 7 Days',
      '9'=>'Payment Due In 30 Days',
      '10'=>'Booking Confirmed (Full Paid)',
      '11'=>'Booking Confirmed (Deposit Paid)',
      '12'=>'Refund Pending',
      '13'=>'Commission Paid',
      '14'=>'Commission Unpaid',
       '15'=>'Migrated',
       '16'=>'Quote Accepted',
       '18'=>'Booking request'
    );

$order_cart = json_decode($data['cartbooking'],TRUE);
$userlists = json_decode($data['userlists'],TRUE);
 $data_deposit = json_decode($data['Deposit'],TRUE);
 $data_DepositPaid = json_decode($data['DepositPaid'],TRUE);
  $data_BalancePaid = json_decode($data['BalancePaid'],TRUE);
//print_r($userlists);
 ?>
<section class="py-3" style="background: rgb(239, 239, 239);">
<div class="container shadow-sm rounded bg-white py-3 my-3">
<ul class="nav pb-2">
  <li class="font-weight-bold" style="color: #337ab7;">Reference Number</li>
  <div class=" ml-auto"></div>
  <li class="px-2 font-weight-b600">Client's Documents</li>
  <li class="px-2 font-weight-b600">Itinerary 
    <a class="#" data-target="#itineraryemail123" data-toggle="modal" href="#itineraryemail"><i class="fa fa-envelope chutwt"></i></a>
    <?php 
               if(!empty($data['filesitinerary'])){
                    ?>
               <a href="https://b2b.tweetworldtravel.com.au/download/{{$data['filesitinerary']}}/booking"> <i class="fa fa-print chutwt"></i></a>
                    <?
               }else{
                ?>
               <a href="https://b2b.tweetworldtravel.com.au/printItinerarySumary/{{$data['ordercode']}}"> <i class="fa fa-print chutwt"></i></a>
              <?php
               }
                ?>
  </li>
  <li class="px-2 font-weight-b600">Invoice 
    <a  href="#" data-target="#divShowInvoice" data-toggle="modal"><i class="fas fa-download chutwt"></i></a>
    <a class="" data-target="#invoice" data-toggle="modal" href="#invoice123"><i class="fa fa-print chutwt"></i></a>
  </li>
  <li class="px-2 font-weight-b600">Voucher 
    <a class="" data-target="#divShowVoucher" data-toggle="modal" href="#divShowVoucher"><i class="fas fa-download chutwt"></i></a>
  </li>
</ul>

<p class="font-weight-b600">{{$data['ordercode']}} <!-- - {{$status_list[$data['status']]}} --></p>
 <span class="font-weight-b600 pb-2" style="color: #337ab7;">Customer Name</span>
<?php foreach ($order_cart as $keyorder_cart => $valueorder_cart) { ?>
            <p class="pb-2 font-weight-b600">
              <?php 
              foreach ($userlists[$keyorder_cart] as $keyuserlists => $valueuserlists) {
                //print_r($keyuserlists);
                foreach ($valueuserlists as $keychild => $valuechild) {
            
               ?>
                {{$valuechild['sur']}}. {{$valuechild['name']}} {{$valuechild['lastname']}} <br>
            <?php } ?>
                <?php } ?>
            </p>
        <?php  } ?>

<table class="table table-responsive-sm mb-0" style="border-bottom: 1px solid #dee2e6;">
    <tbody>
    	<?php 
      $Deposita = 0;
    	foreach ($order_cart as $keyorder_cart => $valueorder_cart) {
      //  print_r($valueorder_cart);
        //print_r($valueorder_cart['options']['product_price_all']);
    	  $Deposita = !empty($data_deposit[$keyorder_cart])?(float)$data_deposit[$keyorder_cart]:0; 
        $BalancePaid = !empty($data_DepositPaid[$keyorder_cart])?(float)$data_DepositPaid[$keyorder_cart]:0; 
        $DepositPaid = !empty($data_BalancePaid[$keyorder_cart])?(float)$data_BalancePaid[$keyorder_cart]:0; 
    	 ?>
    	<tr>
        <th scope="row" style="width: 5%;vertical-align: middle;">
            <div class="dropdown">
                <i style="font-size: 1.5rem" class="fas fa-cog chutwt dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Download Invoice</a>
                    <a class="dropdown-item" href="#">Amend</a>
                    <a class="dropdown-item" href="#">Cancel</a>
                </div>
            </div>
        </th>
        <td style="width: 10%;vertical-align: middle;" class="text-center font-weight-b600"><i class="fas fa-ship pb-2" style="font-size: 23px;color: #6c757d;"></i> CRUISE</td>

        <td style="width: 40%;font-size: 11px" class="date text-uppercase text-left">
            <dl class="m-0 clearfix">
                <dt class="text-secondary font-weight-b600 float-left pr-3">from:</dt>
                <dd class="font-weight-b600">{{$valueorder_cart['options']['daystart']}} </dd>
            </dl>
            <dl class="m-0 clearfix">
                <dt class="text-secondary font-weight-b600 float-left pr-3">to:</dt>
                <dd class="font-weight-b600">{{$valueorder_cart['options']['endstart']}}</dd>
            </dl>
            <dl class="m-0 clearfix">
                <dt class="text-secondary font-weight-b600 float-left pr-3">nights:</dt>
                <dd class="font-weight-b600">&nbsp; </dd>
            </dl>
                        <dl class="m-0 clearfix">
                <dt class="text-secondary font-weight-b600 float-left pr-3">tripcode :</dt>
                <dd class="font-weight-b600">{{$valueorder_cart['options']['tripcode']}} </dd>
            </dl>
            <dl class="m-0 clearfix">
                <dt class="text-secondary font-weight-b600 float-left pr-3">Excursion :</dt>
                <dd class="font-weight-b600">&nbsp;{{$valueorder_cart['options']['excursion']}} </dd>
            </dl>
            <dl class="m-0 clearfix">
                <dt class="text-secondary font-weight-b600 float-left pr-3">CABIN TYPE :</dt>
                <dd class="font-weight-b600">{{$valueorder_cart['options']['product_cabintype']}}</dd>
            </dl>
        </td>

        <td style="width: 15%;font-size: 0.8rem;" class="date text-center">
            <dt class=" pb-1" style="text-align: left;"><span class="bmb_title">Payment details</span></dt>
            <dt class=" pb-1" style="text-align: left;">Deposit: <span class="price-currency">$ <?php
             echo number_format($Deposita,2);
             $all_deposit[] = $DepositPaid;
              ?></span></dt>
            <dt class=" pb-1" style="text-align: left;">Balance: <span class="price-currency">$ <?php  $balance_show = $valueorder_cart['options']['product_price_all'] - $Deposita; echo number_format($balance_show,2);  ?></span></dt>
        </td>
        <td style="width: 10%;font-size: 0.8rem;" class="date text-center" style="position: relative;">
            <dt class=" pb-1" style="text-align: left;"><span class="bmb_title">DUE DATE</span></dt>
            <dt class=" pb-1" style="text-align: left;font-size: 12px;font-weight: 400;">
              <?php 
               $date_create_deposit = \Carbon\Carbon::parse($data['created_at'])->addDays(0)->format('d/m/Y');
               echo $date_create_deposit;
               ?>&nbsp;
            </dt>
            <dt class=" pb-1" style="text-align: left;font-size: 12px;font-weight: 400;">
                <?php 

                 $day_start_booking_parse = explode("/",$valueorder_cart['options']['daystart']);
                  $day_start_booking = $day_start_booking_parse[1].'/'.$day_start_booking_parse[0].'/'.$day_start_booking_parse[2];    
                 $date_create_balance = \Carbon\Carbon::parse($day_start_booking)->subDay(110)->format('d/m/Y');
                   echo $date_create_balance;
                 ?>
                &nbsp;
            </dt>
        </td>
        <td style="width: 10%;font-size: 0.8rem;" class="text-center" style="position: relative;">
            <dt class=" pb-1" style="text-align: left;white-space: nowrap;"><span class="bmb_title">PAYMENT STATUS</span></dt>
            <dt class=" pb-1" style="font-size: 11px;font-weight: bold;">
               <?php 
                                      if($DepositPaid != ''){
                                       ?>
                                       PAID
                                     <?php }else{ ?>
                                      UNPAID
                                     <?php } ?>
                &nbsp;
            </dt>
            <dt class=" pb-1" style="font-size: 11px;font-weight: bold;">
                 <?php 
                                      if($BalancePaid != ''){
                                       ?>
                                       PAID
                                     <?php }else{ ?>
                                      UNPAID
                                     <?php } ?>
                &nbsp;
            </dt>
        </td>

        </tr>
        <?php 
        } ?>
        <tr class="even">
            <td></td>
            <td colspan="3">
            </td>
            <td colspan="3">
                <dt style="text-align: left;">Total: <span class="price-currency">${{$data['price_order']}} </span></dt>
            </td>
        </tr>



    </tbody>
</table>
<div class="block-content-bs content-payment rounded" style="background: rgb(243, 243, 243);">

  <div class="container py-3">
    <div class=" bg-white rounded">
  <h3 class="text-center">Booking Conditions</h3>
  <div class="row p-2" style="font-size: 0.8rem;">


    <div class="col-md-6">
      <ul class="list">
                    <li>A Booking will be cancelled if deposit/balance is not received by the due date stated on the invoice</li>
                    <li>Late payment will result in cancellation of booking without notice</li>
                    <li>Please ensure your clients are fit and physically able to partake unaided in their chosen activities as per the itinerary outlined in the trip</li>
                    <li>Passenger names must be provided exactly as per passport at the time of booking. Any spelling corrections made after a deposit is paid must be sent in writing and will incur additional fees, including any ticket/voucher re-issue fee</li>
                    <p>&nbsp;</p>
                </ul>
    </div>
    <div class="col-md-6">
<ul class="list">
                    <li>All the deposits are non-refundable. By paying a deposit, you agree to be bound by <a href="/terms-conditions-agents" target="_blank" class="btn-more">Tweet World Travel Terms and Conditions</a></li>
                    <li>Service vouchers are released 30 days prior to the departure dates</li>
                    <li>All medical or dietary information must be provided prior to departure dates. These information will be submitted to relevant service providers related to your trips. If Tweet World Travel do not receive these information, Tweet World Travel will not be held liable for any particular condition exacerbates while on the trip or affects their ability to participate in any proportion of the trip. Tweet World Travel will also not be held liable if the service providers fail to accommodate these information correctly</li>
                </ul>
    </div>
  </div>
  <a href="/terms-conditions-agents" target="_blank" class="btn-more">Read full Tweet World Travel booking Terms and Conditions</a>
</div>

      <div class="gross-net pt-3">
        <div class="row">
          <div class="col-md-6 mb-2">
            <a href="#" class="btn btn-bk-tn btn-lg btn-block" onclick="gross()">${{number_format(array_sum($all_deposit),2)}}<span style="font-size: .9rem"> Paid Amount</span></a>
<div class="p-3 text-center" id="div_pay_type_gross" style="display: none;">
<div class="custom-control custom-radio custom-control-inline bk-pick">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1"><p>923.10 AUD</p><span class="spanbk font-weight-b500"> Deposit</span></label>
</div>
<div class="custom-control custom-radio custom-control-inline bk-pick">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2"><p>923.10 AUD</p><span class="spanbk font-weight-b500"> Deposit</span></label>
</div>
 </div>
          </div>
          <div class="col-md-6 mb-2">
            <a href="#" class="btn btn-bk-tn btn-lg btn-block" onclick="net()">${{$data['price_order']}} <span style="font-size: .9rem">Balance due</span></a>
            <div class="p-3 text-center" id="div_pay_type_net" style="display: none;">
<div class="custom-control custom-radio custom-control-inline bk-pick">
  <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline3"><p>923.10 AUD</p><span class="spanbk font-weight-b500"> Deposit</span></label>
</div>
<div class="custom-control custom-radio custom-control-inline bk-pick">
  <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline4"><p>923.10 AUD</p><span class="spanbk font-weight-b500"> Deposit</span></label>
</div>
 </div>
          </div>
        </div>
      </div>


</div>
</div>

<div class="pay-now-bs">
<div class="container pt-3">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="modal" data-target="#eNett" href="#">Credit Card</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bank Transfer</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent" style="border-bottom: 1px solid #dee2e6;">
  <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <p>&nbsp;</p>
                            <p>Please make payments to the below Commonwealth Bank Account</p>
                            <p><strong>Account Name:</strong>Tweet World Travel </p>
                            <p><strong>BSB :</strong> 065-145</p>
                            <p><strong>Account No :</strong> 10458191</p> 
                            <p>Please advise payment to: <a href="mailto:payments@tweetworldtravel.com.au"> payments@tweetworldtravel.com.au</a></p>
  </div>
</div>

  <div class="bt-pay-now py-2">
<div class="mbk_btn_search text-center">
                   <button class="border-0 maunentwtx mauvang py-3 px-5 font-weight-b600">Pay now</button>
              </div>
  
  </div>

  <table class="table table-hover table-bordered table-responsive-sm" style="font-size: 0.8rem;display: none">
  <thead>
    <tr>
      <th style="width: 10%" scope="col">Time</th>
      <th style="width: 80%" scope="col">Note</th>
      <th style="width: 10%" scope="col">Operator</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">08-Apr-2019 15:04:34</td>
      <td>$1,074 fees which will incur if your client want to change the travel date. This fees only apply if your client have decided to make a change before 10 April 2019. They must make a decision to cancel or make a change before 10 April 2019. Otherwise, we have to cancel as per our policy.</td>
      <td>Twee Carroll</td>
    </tr>
    <tr>
      <td scope="row">2</td>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <td scope="row">3</td>
      <td>Larry</td>
      <td>the Bird</td>
    </tr>
  </tbody>
</table>

</div>
</div>


</div>

<div class="modal fade" id="itineraryemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Email Itinerary</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">
        <span id="sendokemail"></span>
           <form method="POST" action="https://b2b.tweetworldtravel.com.au/printItineraryEmail/%7Bid%7D/%7Bemail%7D" accept-charset="UTF-8" id="printItineraryEmailBox">
              <input name="email" type="email" value="" id="email" class="form-control" placeholder="Your Email" autocomplete="off">
              <input name="tripcode" type="hidden" value="#">
              <div style="height: 30px"></div>
              <input type="submit" value="Send" class="border-0 maunentwtx mauvang py-3 px-5 font-weight-b600" id="buton_printItineraryEmail" style="float: right;">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="invoice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Invoice</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <span id="sendokemail"></span>
         <form method="POST" action="https://b2b.tweetworldtravel.com.au/printItineraryEmail/%7Bid%7D/%7Bemail%7D" accept-charset="UTF-8" id="printItineraryEmailBox">
          <input name="email" type="email" value="" id="email" class="form-control" placeholder="Your Email" autocomplete="off">
          <input name="tripcode" type="hidden" value="#">
          <div style="height: 30px"></div>
         <input type="submit" value="Send" class="btn btn-booking booking_cruise" id="buton_printItineraryEmail">
        </form>
        </div>
      </div>
    </div>
  </div>

        <div class="modal fade" id="divShowInvoice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top: 10%">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title sidtitle" id="myModalLabel ">Travel Invoice Documents</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                     <?php 
              if(!empty($data['filesbooking'])){
                $daba_documentVoucher = json_decode($data['filesbooking'],TRUE);
                foreach ($daba_documentVoucher as $keydaba_documentfilesitinerary => $valuedaba_documentfilesitinerary) {
                  ?>
                 <p style=" margin: 0; "> <a href="https://b2b.tweetworldtravel.com.au/download/{{$valuedaba_documentfilesitinerary}}/bookinginfomation/">{{$valuedaba_documentfilesitinerary}}</a></p>
                  <?php
                }
              }
             ?>
               
                      <div class="row">
                        <div class="col-md-12" style=" text-align: right; ">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
             
                      </div>
                      
                 
            </div>


          
        </div>
      </div>
    </div>
    <div class="modal fade" id="divShowVoucher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top: 10%">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title sidtitle" id="myModalLabel ">Travel Voucher Documents</h4>
            </div>
            <div class="modal-body">

                     <?php 
              if(!empty($data['Voucher'])){
                $daba_documentVoucher = json_decode($data['Voucher'],TRUE);
                foreach ($daba_documentVoucher as $keydaba_documentVoucher => $valuedaba_documentVoucher) {
                  ?>
                 <p style=" margin: 0; "> <a href="https://b2b.tweetworldtravel.com.au/download/{{$valuedaba_documentVoucher}}/bookinginfomation/">{{$valuedaba_documentVoucher}}</a></p>
                  <?php
                }
              }
             ?>
                      <div class="row">
                        <div class="col-md-12" style=" text-align: right; ">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
            </div>
        </div>
      </div>
    </div>
</section>

@endsection