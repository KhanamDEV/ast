@extends('cruise.layouts.cruisepayment')

@section('content') 
<form id="regForm" action="#" method="post">
{{ csrf_field() }}
 <?php 
            	 // print_r($cart);
            	   ?>
<div class="next-table-twt">
    <div class="container nextstep1">
        <div class="card-mk-book my-3">
            <div class="card p-4">
            	  @foreach($cart as $item)        

            	 
                <div class="table-responsive">
                    <h4>Participants</h4>
                    <h5 class="font-weight-b500 pb-3" style="text-transform: uppercase">CRUISE - {{ $item->name }}</h5>
                    <?php 
                             
                              if($item->qty == 1){
                                 $soluong = $item->options->product_numroom;
                              }else{
                                $soluong = $item->qty;
                              }
                               ?>
                    <table class="table table-bordered table-hover">
                    	  @for ($jj = 1; $jj <= $soluong; $jj++)    
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Cabin {{$jj}}</th>
                            </tr>
                        </thead>
                        <tbody>

                        	  @for ($i = 0; $i < $item->options->product_adult; $i++)
                            
                            <?php 
                            if($i == 0){
                                $email_login = Auth::user();
                               // print_r($email_login);
                             ?>
                            <tr id='addr{{$i}}'>
                                <td scope="row">
                                    <select id="selectbasic" name="selectbasic[{{ $item->rowId }}][]" class="form-control">
                                        <option value="Mr" <?php echo ($email_login['title'] == 'Mr'?'selected':'') ?> >Mr</option>
                                        <option value="Mrs" <?php echo ($email_login['title'] == 'Mrs'?'selected':'') ?>>Mrs</option>
                                        <option value="Ms" <?php echo ($email_login['title'] == 'Ms'?'selected':'') ?>>Ms</option>
                                        <option value="Mstr" <?php echo ($email_login['title'] == 'Mstr'?'selected':'') ?>>Mstr</option>
                                        <option value="Miss" <?php echo ($email_login['title'] == 'Miss'?'selected':'') ?>>Miss</option>
                                        <option value="Dr" <?php echo ($email_login['title'] == 'Dr'?'selected':'') ?>>Dr</option>
                                        <option value="Prof" <?php echo ($email_login['title'] == 'Prof'?'selected':'') ?>>Prof</option>
                                        <option value="Sir" <?php echo ($email_login['title'] == 'Sir'?'selected':'') ?>>Sir</option>
                                        <option value="Lady" <?php echo ($email_login['title'] == 'Lady'?'selected':'') ?>>Lady</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="First name" aria-label="First Name" name="name[{{ $item->rowId }}][]" value="{{$email_login['firstname']}}">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name='lasname[{{ $item->rowId }}][]' value="{{$email_login['lastname']}}"> 
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Date Of Birth* - DD/MM/YYYY" aria-label="Date Of Birth" name='birthday[{{ $item->rowId }}][]' required="" value="{{$email_login['birthday']}}">
                                    </div>
                                </td>
                            </tr>
                            
                            <?php }else{ ?>
                            <tr id='addr{{$i}}'>
                                <td scope="row">
                                    <select id="selectbasic" name="selectbasic[{{ $item->rowId }}][]" class="form-control">
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Mstr">Mstr</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Prof">Prof</option>
                                        <option value="Sir">Sir</option>
                                        <option value="Lady">Lady</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="First name" aria-label="First Name" name="name[{{ $item->rowId }}][]">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name='lasname[{{ $item->rowId }}][]'> 
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Date Of Birth* - DD/MM/YYYY" aria-label="Date Of Birth" name='birthday[{{ $item->rowId }}][]' required="">
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                            @endfor

                            @for ($i = 0; $i < $item->options->product_child; $i++)
                            <tr id='addr{{$i}}'>
                                     <td scope="row">
                                        <select id="selectbasic" name="selectbasicchild[{{ $item->rowId }}][]" class="form-control">
                                            <option value="Child">Child</option>
                                          
                                        </select>
                                    </td>
                                    <td>
                                    	 <div class="input-group">
                                        <input type="text" class="form-control" placeholder="First name" aria-label="First Name" name="namechild[{{ $item->rowId }}][]">
                                    </div>
                                   
                                    </td>
                                    <td>
                                    	 <div class="input-group">
                                        <input type="text" class="form-control" placeholder="First name" aria-label="First Name" name="lasnamechild[{{ $item->rowId }}][]">
                                    </div>
                                
                                    </td>
                                    <td>
                                     <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Date Of Birth* - DD/MM/YYYY" aria-label="Date Of Birth" name='birthdaychild[{{ $item->rowId }}][]' required="">
                                    </div>

                                      
                                  
                                    </td>
                            </tr>
                            @endfor


                        </tbody>
                            @endfor   
                    </table>
                </div>
                  @endforeach
            
            </div>
        </div>
    </div>
    <div class="container nextstep1 my-3">
        <div class="card p-3">
          <h4 class="pb-2">Booking Summary</h4> 
          <!-- <div class="card p-4"> -->
            <div class="table-responsive ct-table" >
            	 @if(count($cart))
 <table class="table table-bordered mb-0">
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
      <th scope="col">Total</th>
     
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
                             <a href="#" class="font-weight-b500" style="height: 40px;overflow: hidden;text-overflow: ellipsis;display: inline-block;width: 500px;"  >{{$item->name}}</a><br>
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
<div class="pt-3">
     <div class="form-group">
    <label for="exampleFormControlTextarea1" class="font-weight-b500">Note from Customer:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="notesagent"></textarea>
  </div>
</div>



                    <div class="chiller_cb py-4" style="align-self: center;">
    <input id="mkcbok" type="checkbox">
    <label for="mkcbok">I understand and accept the Booking <a href="#" class="maucam">Terms &amp; Conditions*</a></label>
    <span></span>
  </div>
<div class="d-flex justify-content-between card-mk-book">
    <a href="/cart" class="btn btn-secondary float-left maunentwt text-white">Back to cart</a>
<!--                     <div class="chiller_cb" style="align-self: center;">
    <input id="mkcbok" type="checkbox">
    <label for="mkcbok">I understand and accept the Booking <a href="#" class="maucam">Terms &amp; Conditions*</a></label>
    <span></span>
  </div> -->
        <button type="submit" class="btn btn-secondary float-right maunentwt text-white" name="checkboxok" disabled href="#">Confirm</button>
</div>

          <!-- </div> -->
        </div>
    </div>
</div>

</form>

<style>
.next-table-twt input.form-control,.next-table-twt select.form-control {
  width: auto;
}
</style>

@endsection