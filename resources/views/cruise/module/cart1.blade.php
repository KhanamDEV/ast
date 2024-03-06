@extends('cruise.layouts.cruisepayment')

@section('content')       

<div class="container">
              <div class="my-3"> 
                <nav class="breadcrumb-tn" aria-label="breadcrumb">
  <ol class="breadcrumb maunentwt d-inline-flex" style="margin-bottom: 5px;">
    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="chutwt font-weight-bold">HOME</a></li>
    <li class="breadcrumb-item chutwt font-weight-bold active" aria-current="page">CART</li>
  </ol>
</nav>
</div>


<div class="table-responsive my-4 pb-5" >

      
     @if(count($cart) > 0)
     <div>
        <a href="{{ url('/') }}" class="btn maunentwtx mauvang font-weight-b500" role="button" aria-pressed="true">Continue Shopping</a>
        <a href="{{ url('/make-book') }}" class="btn maunentwtx mauvang font-weight-b500" role="button" aria-pressed="true">Make Booking</a>
    </div>
    <table class="table table-fix-h table-bordered mt-3">
    
        <colgroup>
            <col width="15%">
            <col width="50%">
            <col width="10%">
            <col width="10%">
            <col width="10%">
            <col width="5%">
        </colgroup>
          <thead>
    <tr class="text-center">
      <th scope="col">Product(s)</th>
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total(AUD )</th>
      <th scope="col"></th>
    </tr>
  </thead>
 <tbody>
        @foreach($cart as $item)
        <?php 
       // print_r($item);
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
                    	 	 <a href="#" class="font-weight-b500" >{{$item->name}}</a><br>
                        {{$item->options->product_cabintype}}
                    </div>
                       
                    <div class="font-weight-b500">
                        <p>Adult (s)</p>
                        <?php if($item->options->product_child  > 0){ ?>
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

						<?php 
						//print_r('ngoc');
						//print_r($item->options->product_excursion_price);
						$item->options->product_excursion_price = str_replace(",","", $item->options->product_excursion_price);
					//die();
						 ?>
                    <p> <?php  echo number_format($item->options->product_excursion_price,2); ?> </p>
                    <?php } ?>
                </td>
                <td class="cart_delete align-middle text-center" style="font-size: 20px; ">
                    <a class="cart_quantity_delete" href='{{url("cart?product_id=$item->id&remove=1")}}'><i class="fa fa-times"></i></a>
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
                <td>
                </td>
            </tr>
        </tbody>
    </table>
   
                    @else
                <p>You have no items in the shopping cart</p>
                @endif
</div>


</div>




@endsection