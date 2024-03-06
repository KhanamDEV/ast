@extends('cruise.layouts.cruise')

@section('content')

<style type="text/css">
  .table-hover tbody tr:hover{
    cursor: pointer;
  }
</style>
<section class="content-res login-form-margin">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/contactstore') }}">
               
  <div class="container">
<div class="row">
  <div class="col-lg-12 mx-auto box-login-twt">
              <div class="wrapper-box p-3 pb-4 mt-3" style="background-color: #ebf2f4;display: none">
   
                <h5 class="text-center">BOOKING SEARCH</h5>
                <div class="row justify-content-center" style="background: url(img/shadow-2.png) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row pt-4">
                          <div class="col-md-3 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Booking ID
                              </label>
                              <input class="form-control" type="text" required="" name="bookingID" id="bookingID" placeholder="">
                            </div>
                          </div>                          
                          <div class="col-md-3 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Your Reference
                              </label>
                              <input class="form-control" type="text" required="" name="yourreference" id="yourreference" placeholder="">
                            </div>
                          </div>
                         <div class="col-md-3 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic"></label>
                              <select name="title" id="title" class="form-control mt-2" required="">
                                <option value="">---</option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                              </select>
                            </div>
                          </div>
                         <div class="col-md-3 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic"></label>
                              <select name="title" id="title" class="form-control mt-2" required="">
                                <option value="">---</option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Destination Name
                              </label>
                              <input class="form-control" type="text" name="destination" required="" id="destination" placeholder="">
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic"></label>
                              <select name="title" id="title" class="form-control mt-2" required="">
                                <option value="">123123</option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                              </select>
                            </div>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="col-md-3 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Traveller First Name
                              </label>
                              <input class="form-control" type="text" required="" name="firstname" id="firstname" placeholder="">
                            </div>
                          </div>  
                          <div class="col-md-3 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Last Name
                              </label>
                              <input class="form-control" type="text" required="" name="lastname" id="lastname" placeholder="">
                            </div>
                          </div>  
                          <div class="col-md-6 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Departure Within (days)
                              </label>
                              <input class="form-control" type="text" required="" name="Departure" id="Departure" placeholder="">
                            </div>
                          </div>                                                                                 
                        </div>
                        <div class="row">
                          <div class="col-md-3 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Created From
                              </label>
                              <input class="form-control" type="text" required="" name="CreatedFrom" id="CreatedFrom" placeholder="">
                            </div>
                          </div>  
                          <div class="col-md-3 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Created To
                              </label>
                              <input class="form-control" type="text" required="" name="CreatedTo" id="CreatedTo" placeholder="">
                            </div>
                          </div>  
                          <div class="col-md-6 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Payment Due Within (days)
                              </label>
                              <input class="form-control" type="text" required="" name="Payment" id="Payment" placeholder="">
                            </div>
                          </div>                                                                                 
                        </div>
                        <div style="position: absolute;left: 50%;bottom: -75px;transform: translate(-50%, -50%);">
                        <button class="btn btn-xanh-twt font-weight-b500 px-5 text-white" id="btn_submit" type="submit" style="border-radius:50px;height: 50px;">Search</button>                              
                        </div>
                    
                      </div>
                    </div>
                  </div>
                </div>


              </div>

              <div class="wrapper-box p-3 mt-5" style="background-color: #ebf2f4;display: none">
                <h5 class="text-center">REFINED BOOKING SEARCH FILTERS</h5>
                               <?php 
                                   $array_count_booking =  App::make("App\Http\Controllers\CartController")->countbooking();
                                  
                                      $array_count_booking[1] = isset($array_count_booking[1])?$array_count_booking[1]:'0';
                                      $array_count_booking[2] = isset($array_count_booking[2])?$array_count_booking[2]:'0';
                                      $array_count_booking[3] = isset($array_count_booking[3])?$array_count_booking[3]:'0';
                                      $array_count_booking[4] = isset($array_count_booking[4])?$array_count_booking[4]:'0';
                                      $array_count_booking[5] = isset($array_count_booking[5])?$array_count_booking[5]:'0';
                                      $array_count_booking[6] = isset($array_count_booking[6])?$array_count_booking[6]:'0';
                                      $array_count_booking[7] = isset($array_count_booking[7])?$array_count_booking[7]:'0';
                                      $array_count_booking[8] = isset($array_count_booking[8])?$array_count_booking[8]:'0';
                                      $array_count_booking[9] = isset($array_count_booking[9])?$array_count_booking[9]:'0';
                                      $array_count_booking[10] = isset($array_count_booking[10])?$array_count_booking[10]:'0';
                                      $array_count_booking[11] = isset($array_count_booking[11])?$array_count_booking[11]:'0';
                                      $array_count_booking[12] = isset($array_count_booking[12])?$array_count_booking[12]:'0';
                                      $array_count_booking[13] = isset($array_count_booking[13])?$array_count_booking[13]:'0';
                                      $array_count_booking[14] = isset($array_count_booking[14])?$array_count_booking[14]:'0';
                                       $array_count_booking[16] = isset($array_count_booking[16])?$array_count_booking[16]:'0';
                                ?>
                        <div class="bb_content row pt-3" style="background: url(img/shadow-2.png) 50% 0 no-repeat;">
                  <div class="table-display col-md-6">
                                      <div class="cell-display div2" style="background: #E8E8E8;">
                        <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_paid_twt.png" alt="" style="width:40px;"></div> PENDING </div>
                     <div class="cell-display">
                        <div class="div3 {{ ($array_count_booking[1] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 1]) }}">Quote <span class="bb_right">{{ isset($array_count_booking[1])?$array_count_booking[1]:'0' }}</span></a></div>
                        <div class="div4 {{ ($array_count_booking[2] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 2]) }}">Instant Purchase (Booking Unconfirmed) <span class="bb_right">{{ isset($array_count_booking[2])?$array_count_booking[2]:'0' }}</span></a></div>
                        <div class="div5 {{ ($array_count_booking[3] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 3]) }}">Amendment Request <span class="bb_right">{{ isset($array_count_booking[3])?$array_count_booking[3]:'0' }}</span></a></div>
                        <div class="div6 {{ ($array_count_booking[4] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 4]) }}">Amendment Declined <span class="bb_right">{{ isset($array_count_booking[4])?$array_count_booking[4]:'0' }}</span></a></div>
                        <div class="div6 {{ ($array_count_booking[5] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 5]) }}">Cancellation Request <span class="bb_right">{{ isset($array_count_booking[5])?$array_count_booking[5]:'0' }}</span></a></div>
                      </div>
                </div>
                <div class="table-display col-md-6">
                    <div class="cell-display div2" style="background: #E8E8E8;"> <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_unpaid_twt.png" alt="" style="width:40px;"></div> UNPAID </div>
                     <div class="cell-display">
                        <div class="div3 {{ ($array_count_booking[6] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 6]) }}">Confirmed Unpaid <span class="bb_right">{{ isset($array_count_booking[6])?$array_count_booking[6]:'0' }}</span></a></div>
                        <div class="div4 {{ ($array_count_booking[7] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 7]) }}">Payment Due In 48 Hours <span class="bb_right">{{ isset($array_count_booking[7])?$array_count_booking[7]:'0' }}</span></a></div>
                        <div class="div4 {{ ($array_count_booking[8] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 8]) }}">Payment Due In 7 Days <span class="bb_right">{{ isset($array_count_booking[8])?$array_count_booking[8]:'0' }}</span></a></div>
                        <div class="div4 {{ ($array_count_booking[9] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 9]) }}">Payment Due In 30 Days <span class="bb_right">{{ isset($array_count_booking[9])?$array_count_booking[9]:'0' }}</span></a></div>
                           <div class="div4 {{ ($array_count_booking[16] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 16]) }}">Quote Accepted <span class="bb_right">{{ isset($array_count_booking[16])?$array_count_booking[16]:'0' }}</span></a></div>
                      </div>
                </div>
                <div class="table-display col-md-6">
                    <div class="cell-display div2" style="background: #E8E8E8;"> <div><img src="https://b2b.tweetworldtravel.com.au/image/icon_check_twt.png" alt="" style="width:40px;"></div> PAID </div>
                   <div class="cell-display">
                        <div class="div3 {{ ($array_count_booking[10] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 10]) }}">Booking Confirmed (Full Paid) <span class="bb_right">{{ isset($array_count_booking[10])?$array_count_booking[10]:'0' }}</span></a></div>
                        <div class="div3 {{ ($array_count_booking[11] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 11]) }}">Booking Confirmed (Deposit Paid) <span class="bb_right">{{ isset($array_count_booking[11])?$array_count_booking[11]:'0' }}</span></a></div>
                        <div class="div4 {{ ($array_count_booking[12] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 12]) }}">Refund Pending <span class="bb_right">{{ isset($array_count_booking[12])?$array_count_booking[12]:'0' }}</span></a></div>
                        <div class="div5 {{ ($array_count_booking[13] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 13]) }}">Commission Paid <span class="bb_right">{{ isset($array_count_booking[13])?$array_count_booking[13]:'0' }}</span></a></div>
                        <div class="div5 {{ ($array_count_booking[14] != 0)?'bold':'' }}"><a href="{{ route('mybooking', ['status' => 14]) }}">Commission Unpaid <span class="bb_right">{{ isset($array_count_booking[14])?$array_count_booking[14]:'0' }}</span></a></div>
                      </div>
                </div>
<div class="table-display col-md-6">
                      <div class="cell-display div2" style="background: #E8E8E8;"><img src="https://b2b.tweetworldtravel.com.au/image/icon_check_twt.png" alt="" style="width:40px;"><br> FYI </div>
                      <div class="cell-display">
                        <div class="div3">Payment Due In 30 Days <span class="bb_right">{{ isset($array_count_booking[15])?$array_count_booking[15]:'0' }}</span></div>
                        <div class="div3">Departure Within 7 Days <span class="bb_right">{{ isset($array_count_booking[16])?$array_count_booking[16]:'0' }}</span></div>
                        <div class="div4">Departure Within 21 Days<span class="bb_right">{{ isset($array_count_booking[17])?$array_count_booking[17]:'0' }}</span></div>
                      </div>
                  </div>                
            </div>
              </div>
<div class="wrapper-box mt-4">
    <h5 class="p-3" style="background-color: #ebf2f4;">BOOKINGS</h5>
<table class="table table-hover table-responsive-sm">
    <tbody>
          <?php 
        //print_r($data['data']);
if(!empty($data['data'])){
           ?>
           <?php 
            foreach ($data['data'] as $keybooking => $valuebooking) {
                    $cart_booking = json_decode($valuebooking['cartbooking'],TRUE);
                    $cart_userlists = json_decode($valuebooking['userlists'],TRUE);

                    $cart_product = '';
                    $cart_namepp = '';
                    $cart_depature = '';
                    foreach ($cart_booking as $keycart_booking => $valuecart_booking) {
                       $cart_product .= $valuecart_booking['options']['type'].",";
                       $cart_namepp .= "-".$valuecart_booking['name']." <br> ";
                       $cart_depature = $valuecart_booking['options']['daystart'];
                       $day_start_booking_parse = explode("/",$cart_depature);
                       $day_start_booking = $day_start_booking_parse[1].'/'.$day_start_booking_parse[0].'/'.$day_start_booking_parse[2];    
                        if ($valuecart_booking['options']['type'] =='cruise') {
                            $date_create_balance = \Carbon\Carbon::parse($day_start_booking)->subDay(110)->format('d-m-Y');
                        }else{
                            $date_create_balance = \Carbon\Carbon::parse($day_start_booking)->subDay(65)->format('d-m-Y');
                        }
                        // if($timesort != 0){
                        //     $data_compare = $timesort." days";
                        //     if (strtotime("now") <= strtotime($date_create_balance) && strtotime($date_create_balance) <= strtotime($data_compare)) {
                        //        $check[] = '1';
                        //     }
                        // }else{
                        //   $check[] = '1';  
                        // }

        
                    
                        
                    }
            ?>
          <tr data-href="/booking/{{$valuebooking['ordercode']}}">
            <td class="mbk_table_id">
                <div>
                   {{$valuebooking['ordercode']}}
                </div>
            </td>
            <td>
                <div class="row">
                    <div class="col-md-5 fnt-11b">CREATED:</div>
                    <div class="col-md-7 fnt-11">{{  date('d/m/Y', strtotime($valuebooking['created_at'])) }}</div>
                </div>
                <div class="row">
                    <div class="col-md-5 fnt-11b">DEPARTURE:</div>
                    <div class="col-md-7 fnt-11">{{$cart_depature}}</div>
                </div>
            </td>
            <td>
                <div class="row">
                    <div class="col-md-5 fnt-11b">PRODUCT:</div>
                    <div class="col-md-7 fnt-11">{{ $cart_product }}</div>
                </div>
                <div class="row">
                    <div class="col-md-5 fnt-11b">USER:</div>
                    <div class="col-md-7 fnt-11"> <span class="mbk_span_owen"> {{ $valuebooking['user_id_book'] }}</span></div>
                </div>
                <div class="row">
                    <div class="col-md-5 fnt-11b">GUEST:</div>
                    <div class="col-md-7">
                         <?php 
                                        if(!empty($cart_userlists)){
                                        foreach ($cart_userlists as $keycart_userlists => $valuecart_userlists) {
                                           foreach ($valuecart_userlists['aud'] as $key_usser => $value_usser) {
                                        ?>
                                            <p class="p-0 m-0 fnt-11b"><?php echo $value_usser['sur']." ".$value_usser['name']." ".$value_usser['lastname'] ?></p>
                                        <?php
                                           }
                                        }
                                        }
                                         ?>
                    </div>
                </div>
            </td>
            <td>
                <div style="text-align: right;">
                    <p class="p-0 m-0 mbk_table_status">{{ isset($status_order_main[$valuebooking['status']])?$status_order_main[$valuebooking['status']]:''}}</p>
                    <p class="p-0 m-0 mbk_table_item"> {!!html_entity_decode($cart_namepp)!!} </p>
                    <!-- <p class="p-0 m-0 mbk_table_destination">Ha Noi</p> -->
                </div>
            </td>
        </tr>
      <?php 
      }
       ?>
    </tbody>
  <?php } ?>
</table>
</div>

            </div>
          </div>        
  </div>

</form>




</section>

@endsection

@section('jsmain')

<script type="text/javascript">
   $('tr[data-href]').on("click", function() {
      document.location = $(this).data('href');
  });
</script>
@endsection