@extends('cruise.layouts.cruise')
@section('title', 'Asia School Tours - User Registration')
@section('description', 'Asia School Tours - User Registration')
@section('metatitle', 'Asia School Tours - User Registration')
@section('content')
<section class="content-res login-form-margin">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
  <div class="container">
<!--     <div class="row">
      <div class="col-md-1">
        1
      </div>
      <div class="col-md-3">
        2
      </div>
      <div class="col-md-4">
        3
      </div>
      <div class="col-md-4">
        4
      </div>
    </div> -->
<div class="row">
  <div class="col-lg-12 mx-auto box-login-twt">
              <div class="wrapper-box p-3">
   @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>Capcha </strong>
                                    </span>
                                @endif
                                   @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>Email already exists  </strong>
                                    </span>
                                @endif
                <h4 class="">CUSTOMER DETAILS</h4>
                <div class="row justify-content-center pt-3" style="background: url(img/shadow-2.png) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row pt-4">
                          <div class="col-md-2 col-sm-12">                
                            <div class="form-group">
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic">Title*
                              </label>
                              <select name="title" id="title" class="form-control" required="" >
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
                              <input class="form-control" type="text" required="" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Surname*
                              </label>
                              <input class="form-control" type="text" required="" name="surname" value="{{ old('surname') }}" id="surname" placeholder="Surname">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Date of Birth*
                              </label>
                              <input class="form-control" type="text" name="birthday" id="birthday" placeholder="DD/MM/YYYY" value="{{ old('birthday') }}">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                         <div class="col-md-4 col-sm-12">              
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Street address*
                              </label>
                              <input class="form-control" type="text" required="" placeholder="Street address" name="street" id="street" value="{{ old('street') }}">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Postcode*
                              </label>
                              <input class="form-control" type="text" required="" value="{{ old('postcode') }}" placeholder="Postcode" name="postcode" id="postcode">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">City*
                              </label>
                              <input class="form-control" type="text" required="" value="{{ old('city') }}" placeholder="City" name="city" id="city">
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
                              <input class="form-control" type="text" name="stage" value="{{ old('stage') }}" required="" id="stage" placeholder="State/Region">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Phone
                              </label>
                              <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Phone">
                            </div>
                          </div>                           
                        </div>
                       
                        <div class="row pt-4">
                          <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">E-Mail*
                              </label>
                              <input class="form-control" type="text" name="email" id="email" placeholder="E-Mail" value="{{ old('email') }}">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Password*(minimum 6 characters)
                              </label>
                              <input class="form-control" type="password" name="password" pattern=".{6,}" required="" id="password" placeholder="Password" title="Minimum 3 characters required">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Confirm Password*(minimum 6 characters)
                              </label>
                              <input class="form-control" type="password" placeholder="Confirm Password" pattern=".{6,}" name="password_confirmation" id="cpassword" title="Minimum 3 characters required">
                            </div>
                          </div>

                        </div>

                      </div>
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
                <input id="myCheckbox" type="checkbox">
                <label for="myCheckbox">I have read and agree to the <a href="#" class="maucam">Terms &amp; Conditions*</a></label>
                <span></span>
              </div>
              </div>
                                    <div class="checkbox text-center font-weight-600">
              <div class="chiller_cb">
                <input id="myCheckbox1" type="checkbox">
                <label for="myCheckbox1">Subscribe to our Newsletter to get the best offers</label>
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
      <button class="btn-block border-0 nen-maucam p-0" id="btn_submit" style="border-radius:5px;height: 40px;color: #fff;">Register Now</button>
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