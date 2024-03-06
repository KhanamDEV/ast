@extends('cruise.layouts.cruise')
@section('title','New teacher registration - Asia School Tours')
@section('description', 'New teacher registration page of Asia School Tours Website')
@section('metatitle','New teacher registration - Asia School Tours')
@section('content')


<section class="content-res login-form-margin">

  @if (\Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('message') !!}</li>
        </ul>
    </div>
@endif


      <form class="form-horizontal" role="form" method="POST" action="{{ url('/newteacherregistrationstore') }}">
                        {{ csrf_field() }}
    <div class="container">

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
                <h4 class="">School Details</h4>
                                <div class="row justify-content-center pt-3" style="background: url(img/shadow-2.png) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row pt-4">
                          <div class="col-md-4 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">School Name*
                              </label>
                              <input class="form-control" type="text" required="" name="SchoolName" value="{{ old('SchoolName') }}" id="SchoolName" placeholder="School Name">
                            </div>
                          </div>                  
                      
                         <div class="col-md-4 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Phone Number
                              </label>
                              <input class="form-control" type="text" name="PhoneNumber" value="{{ old('PhoneNumber') }}" id="PhoneNumber" placeholder="Phone number">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">School Web
                              </label>
                              <input class="form-control" type="text" name="SchoolWeb" id="SchoolWeb" placeholder="School Web" value="{{ old('SchoolWeb') }}">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                         <div class="col-md-4 col-sm-12">              
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Street Address
                              </label>
                              <input class="form-control" type="text"  placeholder="Street Address" name="StreetAddress" id="StreetAddress" value="{{ old('StreetAddress') }}">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Postcode
                              </label>
                              <input class="form-control" type="text" value="{{ old('Postcode') }}" placeholder="Postcode" name="Postcode" id="postcode">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">City
                              </label>
                              <input class="form-control" type="text" value="{{ old('City') }}" placeholder="City" name="City" id="City">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                          <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic">Country
                              </label>
                              <select name="Country" id="Country" class="form-control" >
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
                              <label class="form-control-label font-weight-600">If Other
                              </label>
                              <input class="form-control" type="text" name="IfOther" value="{{ old('IfOther') }}"  id="IfOther" placeholder="If Other Country">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">State/Region*
                              </label>
                              <input class="form-control" type="text" name="State" value="{{ old('State') }}" required="" id="State" placeholder="State/Region">
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
                  <div class="col-lg-12 box-login-twt">
                    <div class="wrapper-box p-3">
                           <h4 class="">Teacher's Details</h4>
                <div class="row justify-content-center pt-3" style="background: url(img/shadow-2.png) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row pt-4">
                                                
                          <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">First Name*
                              </label>
                              <input class="form-control" type="text" required="" name="FirstName" id="FirstName" value="{{ old('FirstName') }}" placeholder="First Name">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Surname*
                              </label>
                              <input class="form-control" type="text" required="" name="Surname" value="{{ old('Surname') }}" id="Surname" placeholder="Surname">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Job Title
                              </label>
                              <input class="form-control" type="text" name="jobtitle" id="jobtitle" placeholder="Job Title" value="{{ old('jobtitle') }}">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                         <div class="col-md-4 col-sm-12">              
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Teaching Subjects
                              </label>
                              <input class="form-control" type="text"  placeholder="Teaching Subjects" name="TeachingSubjects" id="teachingsubjects" value="{{ old('teachingsubjects') }}">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Years of Exprerience
                              </label>
                              <input class="form-control" type="text"  value="{{ old('YearsofExprerience') }}" placeholder="Years of Exprerience" name="YearsofExprerience" id="YearsofExprerience">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label font-weight-600" for="selectbasic">Police Clearance (Y/N)
                              </label>
                              <select name="PoliceClearance" id="PoliceClearance" class="form-control">
                                <option value="">---</option>
                                <option value="Y">Y</option>
                                <option value="N">N</option>
                               
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                         
                       
                          <div class="col-md-12 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">You brief motivation on our activities
                              </label>
                              <input class="form-control" type="text" name="BriefMotivation" id="BriefMotivation" value="{{ old('BriefMotivation') }}" placeholder="Brief Motivation">
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
          'sitekey' : '6LctkrgUAAAAAFR_lCL7GtOJP9eMXhcFEOQveeHa'
        });
      };
    </script>

    @endsection