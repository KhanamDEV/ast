@extends('cruise.layouts.cruisepayment')

@section('content') 
<?php 

//print_r($order_session);
$userlists = json_decode($order_session['userlists'],TRUE);
    $totale_cart_v = str_replace(",","",Cart::total());
              $deposit_show = ($totale_cart_v * 0.3);
 ?>

<div class="container">
  <div class="content-payment my-4">
    <div class="card p-4">
      <h3 class="text-center font-weight-b500">Booking Payment</h3>
      <div class="gross-net">
        <h6 class="mb-3"> </h6>
        <div class="row">
          <div class="col-md-6 mb-2">
            <a href="#" class="btn btn-bk-tn btn-lg btn-block" onclick="gros1s()"><?php echo Cart::total() ?> AUD <span style="font-size: .9rem"></span></a>
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
          <div class="col-md-6 mb-2" style="display: none">
          	 <label>DISSCOUNT</label>	
          	<div class="input-group">
          
           <input type="text" class="form-control" >
           <button class="btn btn-bk-tn-1" type="submit">Submit</button>
           </div>
          </div>
        </div>
      </div>

 <div class="p-3" style="background-color: #f5f5f5;border-radius: 3px;">


      <div class="row">
        <div class="col-md-3 p-0 mb-3">
<ul class="nav nav-pills flex-column">
  <li class="nav-item">
    <a class="nav-link active" id="pill-A1" data-toggle="pill" aria-controls="tab-A1"  href="#tab-A1">With Bank Transfer</a>
  </li>
  <li class="nav-item bg-white">
    <a class="nav-link" id="pill-B1" data-toggle="modal" data-target="#modalcrc" href="#tab-B1">With Credit Card</a>
  </li>    
</ul>  
</div>

        <div id="tab-content" class="col-md-9 tab-content">
            <div id="tab-A1" class="tab-pane fade show active p-3 bg-white" role="tabpanel" aria-labelledby="pill-A1">
                                <p class="mb-0">Please make payments to the below Commonwealth Bank Account</p>
                                <p class="mb-0"><strong>Account Name:</strong>Tweet World Travel </p>
                                <p class="mb-0"><strong>BSB:</strong> 065-145</p>
                                <p class="mb-0"><strong>Account No.:</strong> 10458191</p>
                                <p class="mb-0">Please advise payment to: <a href="mailto:payments@tweetworldtravel.com.au"> payments@tweetworldtravel.com.au</a></p>
            </div>
<div class="modal fade" id="modalcrc" tabindex="-1" role="dialog" aria-labelledby="modalcrc" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        This function is coming soon !!!
      </div>
    </div>
  </div>
</div>          
        </div>


      </div>


 </div>    
<form id="regForm" action="#" method="post">
{{ csrf_field() }}
<div class="d-flex justify-content-center pt-3">
  <input type="hidden" name="deposit" value="{{$deposit_show}}">
       <button id="" class="btn btn-primary btn-md mr-2" type="submit" name="book_button" value="pay" >BOOK &amp; PAY NOW</button>
       <button id="" class="btn btn-primary btn-md" name="book_button" value="request">BOOKING REQUEST ONLY</button>             

</div>
</form>
    </div>   

<div class="card-bk-sm px-5 py-3 border">
  <div class="row">
   
  <div class="col-md-6 ">
     <h6>Customer details</h6>
 <?php 
    $userlists = json_decode($order_session['userlists'],TRUE);
//    print_r($userlists);
   ?>
   <table class="table table-bordered">
     <thead class="thead-dark">
     <tr>
       <th>Title</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Birthday</th>
     </tr>
    </thead>
   <?php 
   foreach ($userlists as $keyuserlists => $valueuserlists) {
      foreach ($valueuserlists as $keylistuserview => $valuelistuserview) {
        foreach ($valuelistuserview as $keyviewuser => $valuekeyviewuser) {
          ?>

          <tr>
            <td><?php echo isset($valuekeyviewuser['sur'])? $valuekeyviewuser['sur'] :''; ?></td>
            <td><?php echo isset($valuekeyviewuser['name'])? $valuekeyviewuser['name'] :''; ?></td>
            <td><?php echo isset($valuekeyviewuser['lastname'])? $valuekeyviewuser['lastname'] :''; ?></td>
            <td><?php echo isset($valuekeyviewuser['birthday'])? $valuekeyviewuser['birthday'] :''; ?></td>
          </tr>
            
              <?php
        }

      }
   }
?>
   </table>    

  </div>

    <div class="col-md-4 ">
     <h6>Payment details</h6>

   <table class="table table-bordered">
     <thead class="thead-dark">
          <tr>
            <th>Deposit</th>
            <th>Balance</th>
            
          </tr>
        </thead>
          <tr>
            <td><strong>$ 
              <?php 
          
              echo $deposit_show;
               ?></strong></td>
            <td><strong>$ 
            <?php 
            $balance_show = $totale_cart_v - $deposit_show;
             echo $balance_show;
             ?>
              </strong>
            </td>
          </tr>
   </table>


  </div>
</div>
  <h6>Booking Summary</h6>

               
<div class="table-responsive ct-table" >
  @if(count($cart))
   <table class="table table-bordered mb-0">
        <colgroup>
            <col width="15%">
            <col width="45%">
            <col width="10%">
            <col width="10%">
            <col width="10%">
            <col width="10%">
        </colgroup>
          <thead>
    <tr class="text-center">
      <th scope="col">Product(s)</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
     
    </tr>
  </thead>
 <tbody>
 
        @foreach($cart as $keycart => $item)
        <?php 
     //print_r($order_session['userlists']);

         ?>
              <tr>
                <td class="cart_product" style="text-align: center;">
                    <b>Cruise</b>
                    <br>
                    {{$item->options->product_startdate}} - {{$item->options->product_enddate}}
                    <br>
                    <br> <br> <br>
                    <b>No. of Cabin : {{$item->options->product_numroom}} </b>
                </td>
                <td class="cart_description">
                         <div style="height: 70px">
                             <a href="#" class="font-weight-b500" style="height: 40px;overflow: hidden;text-overflow: ellipsis;display: inline-block;"  >{{$item->name}}</a><br>
                        {{$item->options->product_cabintype}}
                    </div>
                       
                    <div class="font-weight-b500">
                        <p>Adult (s)</p>
                       

                        <?php 
                        if($item->options->product_child  > 0){ ?>
                        <p>Child(ren)</p>
                        <?php } ?>
                        <?php if($item->options->product_excursion_price  > 0){ ?>
                        <p>Excursion</p>
                         <?php } ?>
                        <div>
                        </div>
                    </div>
                </td>
                <td class="cart_price font-weight-b500 text-right">
                    <div style="height: 70px">
                    </div>
                    <p>{{number_format($item->options->product_adult_one,2)}}</p>
                    <?php if($item->options->product_child  > 0){ ?>
                    <p>{{number_format($item->options->product_child_one,2)}}</p>
                    <?php } ?>
                    <?php if($item->options->product_excursion_price  > 0){ ?>
                    <p> </p>
                    <?php } ?>
                </td>
                <td class="cart_quantity font-weight-b500 text-center">
                    <div style="height: 70px">
                    </div>
                    <p>{{$item->options->product_adult}}</p>
                    <?php if($item->options->product_child  > 0){ ?>
                    <p>{{$item->options->product_child}}</p>
                    <?php } ?>
                    <?php if($item->options->product_excursion_price  > 0){ ?>
                    <p> </p>
                    <?php } ?>
                </td>
                <td class="cart_total font-weight-b500 text-right">
                    <div style="height: 70px">
                    </div>
                    <p>
                        <?php 
                        $product_adult_one = $item->options->product_adult_one *  $item->options->product_adult;
                        echo number_format($product_adult_one,2);
                         ?>
                    </p>
                    <?php if($item->options->product_child  > 0){ ?>
                    <p> 
                        <?php 
                        $product_child_one = $item->options->product_child_one *  $item->options->product_child;
                        echo number_format($product_child_one,2);
                         ?>
                    </p>
                    <?php } ?>
                    <?php if($item->options->product_excursion_price  > 0){ ?>
                    <p> <?php  echo number_format($item->options->product_excursion_price,2); ?> </p>
                    <?php } ?>
                </td>
              
            </tr>
              @endforeach
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td colspan="2">
                    <b>Total</b>
                </td>
                <td style="text-align: right;font-weight: bold;">
                    {{Cart::total()}} </td>
               
            </tr>
        </tbody>
    </table>
     @endif
</div>
</div>
  </div>
</div>



<style type="text/css">
.btn-bk-tn-1{
	background: #22374e;
    text-align: center;
    color: #D5B04B;
    border: none;
}
</style>
@endsection


@section('jsmain') 

<script type="text/javascript">

function gross() {
  var x = document.getElementById("div_pay_type_gross");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function net() {
  var x = document.getElementById("div_pay_type_net");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
@endsection