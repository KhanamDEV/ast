@extends('cruise.layouts.cruise')

@section('content')
<?php 
$user_data = Auth::user();
//print_r($user_data);
 ?>
<section class="content-res login-form-margin">
  <div class="container">
<div class="row">

  <div class="col-lg-12 mx-auto box-login-twt">
        <div class="box_body clearfix" id="message">
            @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif   
    </div>
      <form action="/my-profile" method="POST" >
       {{ csrf_field() }}
              <div class="wrapper-box p-3 pb-5">
   
                <h4 class="">MY PROFILE</h4>
                <div class="row justify-content-center pt-3" style="background: url(img/shadow-2.png) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row pt-4">
                         <div class="col-md-6 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">User Name:
                              </label>
                              <input class="form-control" type="text" placeholder="" disabled value="{{$user_data['email']}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">First Name:
                              </label>
                              <input class="form-control" type="text" name="firstname" required="" id="firstname" placeholder="" value="{{$user_data['firstname']}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Last Name:
                              </label>
                              <input class="form-control" type="text" name="lastname" required="" id="lastname" placeholder="" value="{{$user_data['lastname']}}">
                            </div>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="col-md-5 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Preferred Email Address:
                              </label>
                              <input class="form-control" type="text"  id="email" placeholder="" value="{{$user_data['email']}}" disabled>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Phone Number:
                              </label>
                              <input class="form-control" type="text" name="phone" required="" id="phone" placeholder="" value="{{$user_data['phone']}}">
                            </div>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="col-md-3 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Date of birth: (dd/mm/yyyy)
                              </label>
                              <input class="form-control" type="text" name="birthday" required="" id="birthday" placeholder="" value="{{$user_data['birthday']}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Gender: 
                              </label>
                              <?php 
                              $gender = array('male' => 'Male', 'female' => 'Female','other'=>'Others');
                               ?>
                              <select name="gender" id="gender" class="form-control" required="">
                                <?php 
                                foreach ($gender as $genderid => $gendername) {
                                ?>
                                <option value="<?php echo $genderid ?>" <?php echo ($genderid == $user_data['title'])?'selected':'' ?>><?php echo $gendername ?></option>
                                <?php
                                }
                                 ?>
                              </select>
                            </div>
                          </div>                          
                        </div> 
                        <div class="row pb-3">
                          <div class="col-md-12">

                            <?php 
          $interests = '';
          // print_r($user_data['interests']);
          if(!empty($user_data['interests'])){
            //$interests = json_decode($myprofile->interests,TRUE);
            $interests = $user_data['interests'];
            //print_r($interests);

          }
           ?>


<?php 
          if (strpos($interests, 'Arts') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Arts" checked>Arts</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Arts" >Arts</label>';
          }
           ?>
          <?php 
          if (strpos($interests, 'Family') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Family" checked>Family</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Family" >Family</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'Food') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Food" checked>Food</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Food" >Food</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'Literature') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Literature" checked>Literature</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Literature" >Literature</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'Music') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Music" checked>Music</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Music" >Music</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'Photography') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Photography" checked>Photography</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Photography" >Photography</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'Sport') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Sport" checked>Sport</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Sport" >Sport</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'Technology') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Technology" checked>Technology</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Technology" >Technology</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'Travel') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Travel" checked>Travel</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="Travel" >Travel</label>';
          }
          ?>
          <?php 
          if (strpos($interests, 'TV') !== false) {
               echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="TV" checked>TV/Movies</label>';
          }else{
            echo '<label class="checkbox-inline"><input type="checkbox" name="interests[]" value="TV" >TV/Movies</label>';
          }
          ?>

</div>
                     </div>

                        <div class="row">
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">Current Password:
                              </label>
                              <input class="form-control" type="password" name="current-password" id="currentp" placeholder="">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">New Password:
                              </label>
                              <input class="form-control" type="password" name="new-password" id="newp" placeholder="">
                            </div>
                          </div>   
                          <div class="col-md-4 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label font-weight-600">New Password Confirm:
                              </label>
                              <input class="form-control" type="password" name="new-password-confirm" id="newpcf" placeholder="">
                            </div>
                          </div>                                                  
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
<!--                 <div class="row p-0 mt-4">
  <div class="col-md-2 p-0">
      <button class="btn-block border-0 nen-maucam p-0 font-weight-b500" id="btn_submit" style="border-radius:5px;height: 40px;color: #fff;">SEND</button>
  </div>
</div> -->

                        <div style="position: absolute;left: 50%;bottom: -50px;transform: translate(-50%, -50%);">
                        <button class="btn btn-xanh-twt font-weight-b500 px-5 text-white" id="btn_submit" type="submit" style="border-radius:50px;height: 50px">Update</button>                              
                        </div>
              </div>
            </div>
            </form>
</div>

  </div>
</section>
<style type="text/css">
  label.checkbox-inline{
    margin-left: 12px;
}
.checkbox-inline input{
    width:20px;
    height:20px;
}
</style>
@endsection

