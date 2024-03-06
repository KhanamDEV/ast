@extends('cruise.layouts.cruise')
@section('title', 'Asia School Tours - User Login Page')
@section('description', 'Asia School Tours - User Login Page')
@section('metatitle', 'Asia School Tours - User Login Page')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
              <div class="card card-signin my-5 ">
          <div class="card-body">
            <h5 class="card-title text-center text-dark">Existing Customer? Please Sign In</h5>
          
              <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                 {{ csrf_field() }}
              <div class="form-label-group mb-3">
              
                <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus style="height: 50px;border-radius: 20px;">
                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>
              <div class="form-label-group mb-3">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required style="height: 50px;border-radius: 20px;">
                  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember"  {{ old('remember') ? 'checked' : ''}}>

                <label class="custom-control-label text-dark" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-block text-uppercase mauvang maunentwtx" type="submit">Sign in</button>
<div class="clearfix pt-3">
  <a href="{{ url('/password/reset') }}" class="float-left font-weight-b600 chutwt">Forgot your password ?</a>
  <span class="float-right">Don't have an account? <a href="{{ url('/register') }}" class="font-weight-b600 chutwt">Registration</a></span>
</div>
            </form>
          </div>
        </div>
    </div>
  </div>

</div>




@endsection
