@extends('cruise.layouts.cruise')
@section('title','Ask for Brochure')
@section('description', 'Brochure page where you can ask for more product and tour information')
@section('metatitle','Ask for Brochure - Asia School Tours')
@section('content')



<section class="content-res login-form-margin">



   @if (\Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('message') !!}</li>
        </ul>
    </div>
@endif

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/askforbrochurestore') }}">
                        {{ csrf_field() }}
 <div class="container">
<div class="row">
  <div class="col-lg-12 mx-auto box-login-twt">
              <div class="wrapper-box p-3">
          @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block" style="color: red">
                                        <strong>Capcha </strong>
                                    </span>
                                @endif
                <h4 class="">PLEASE PROVIDE YOUR DETAILS</h4>
                <div class="row justify-content-center pt-3" style="background: url({{ asset('img/shadow-2.png')}}) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row pt-4">
                          <div class="col-md-2 col-sm-12">                
                            <div class="form-group">
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic">Title*
                              </label>
                              <select name="title" id="title" class="form-control" required="">
                                <option value="">---</option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                              </select>
                            </div>
                            </div>
                          </div>                          
                          <div class="col-md-2 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">First Name*
                              </label>
                              <input class="form-control" type="text" required="" name="firstname" id="firstname" placeholder="First Name">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Surname*
                              </label>
                              <input class="form-control" type="text" required="" name="surname" id="surname" placeholder="Surname">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">E-Mail*
                              </label>
                              <input class="form-control" type="text" name="email" id="email" placeholder="E-Mail">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                         <div class="col-md-4 col-sm-12">              
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Street address*
                              </label>
                              <input class="form-control" type="text" required="" placeholder="Street address" name="street" id="street">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Postcode*
                              </label>
                              <input class="form-control" type="text" required="" placeholder="Postcode" name="postcode" id="postcode">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">City*
                              </label>
                              <input class="form-control" type="text" required="" placeholder="City" name="city" id="city">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                          <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic">Country*
                              </label>
                              <select name="country" id="country" class="form-control" required="">
                                <option value="">---</option>
                                <option value="Au">Australia</option>
                                <option value="Gr">Greece</option>
                                <option value="Ne">New Zealand</option>
                                <option value="Si">Singapore</option>
                                <option value="Th">Thailand</option>
                                <option value="Uk">United Kingdom</option>
                                <option value="Us">United States</option>
                                <option value="Ot">Other</option>
                              </select>
                            </div> 
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">State/Region*
                              </label>
                              <input class="form-control" type="text" name="state" required="" id="state" placeholder="State/Region">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Phone
                              </label>
                              <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
                            </div>
                          </div>                           
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
<div class="row pt-4">
                          <div class="col-md-12 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Customer Message
                              </label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Please enter your detailed requirements for the brochures..." name="message"></textarea>
                            </div>
                          </div>
                        </div>

              </div>
            </div>
</div>
<div class="row pt-4">
          <div class="col-lg-6 box-login-twt">
            <div class="wrapper-box p-3">
              <div class="checkbox text-center font-weight-600">
    <div class="chiller_cb">
    <input id="myCheckbox" type="checkbox" required="">
    <label for="myCheckbox">I have read and agree to the <a href="#" class="maucam" >Terms &amp; Conditions*</a></label>
    <span></span>
  </div>


              </div>
            </div>
          </div>
        </div>
        <div class="row p-0 mt-4">
  <div id="html_element"></div>
    </div>
<div class="row p-0 mt-4">
  <div class="col-md-2 p-0">
      <button class="btn-block border-0 nen-maucam p-0 font-weight-b500" id="btn_submit" type="submit" style="border-radius:5px;height: 40px;color: #fff;">SUBMIT</button>
  </div>
</div>        
  </div>

</form>
</section>

@endsection

@section('jsmain')

<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LeLN6kUAAAAAMcr9THgpbLQ-XskkLOae4W5vMPE'
        });
      };
    </script>

    @endsection