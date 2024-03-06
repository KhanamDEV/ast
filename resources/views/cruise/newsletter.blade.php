@extends('cruise.layouts.cruise')
@section('title','News Letter')
@section('description', 'Worldwide River Cruises features one of the largest selections of river cruises options, from standard to premium ships, to suit all budget and provide the absolute best value for your money.')
@section('metatitle','News Letter - Worldwide River Cruises')
@section('content')



<section class="content-res login-form-margin">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/newsletterstore') }}">
                        {{ csrf_field() }}
<div class="container">
<div class="row">
  <div class="col-lg-12 mx-auto box-login-twt">
              <div class="wrapper-box p-3">
   
                <h4 class="">SUBSCRIBE FOR NEWSLETTER</h4>
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
<!--                                                   <label class="pl-1 pr-1 pt-1">
                                        <input type="checkbox" value="check" name="checkboxform" class="checkboxform">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>I have read and agree to the <a href="#" class="maucam">Terms &amp; Conditions*</a>
                                    </label> -->
    <div class="chiller_cb">
    <input id="myCheckbox" type="checkbox">
    <label for="myCheckbox">I have read and agree to the <a href="#" class="maucam">Terms &amp; Conditions*</a></label>
    <span></span>
  </div>


              </div>
            </div>
          </div>
        </div>

<div class="row p-0 mt-4">
  <div class="col-md-2 p-0">
      <button class="btn-block border-0 nen-maucam p-0 font-weight-b500" id="btn_submit" type="submit" style="border-radius:5px;height: 40px;color: #fff;">SUBSCRIBE NOW</button>
  </div>
</div>        
  </div>
</form>
</section>

@endsection

@section('jsmain')    

@endsection