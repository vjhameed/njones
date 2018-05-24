@extends('layouts.auth-layout')


@section('title')

@endsection


@section('style')

  <style media="screen">
  @media (min-width: 992px){
  .auth-right {
      width: 57.6%;
  }
  .auth-left{
    width: 40.6%;
  }
  .auth-right > div:first-child{
        width: 51.0%;
  }
  .inside-right-container{
    width: 47.333333%
  }
  .card {
      width: 92.5%;
      margin-left: 4.5%;
  }
}
  .auth-right {
    padding: 2em 0em;
    margin-left: 1.8%;
  }

  .auth-right h4{
    margin-bottom: .5em;
  }

  .auth-right form .col-md-12{
    padding:0px;
  }

  .auth-right input:last-of-type{
    margin-bottom: .8em;
  }
  .auth-left img{
    height: 807px;
  }

  .auth-left,.inside-right-container{
    padding-top: 29%;
  }

  .auth-left img{
    position: absolute;
    top: -4px;
    left: -4px;
    z-index: 1;
    width: 100%;
  }

  .inside-right-container{
    padding:3.5em;
    padding-top: 41%;
  }
  .inside-right-container img{
    width: 100%;
  }

  .auth-right .dont-have-account{
    font-size: 1.1em;
    width: 100%;
    padding:0px;
    padding-top: 1em;
    text-align: center
  }
      .outer {
      width: 4px;
      height: 808px;
      margin: auto;
      position: absolute;
      overflow: hidden;
      top: 10%;
      left: 6%;
      }
    .inner {
      position: absolute;
      width: 100%;
      height: 33.5%;
      background: #e6e7e8;
    }
    .inner1{
      position: absolute;
      width: 100%;
      top: 41%;
      height: 37.5%;
      background: #e6e7e8;
    }

    .invalid-feedback{
      color: red
    }
  </style>

@endsection

@section('body')
<main class=''>
  <div class="container ">
    <div class="row">
      <div class="card col-md-8 col-md-offset-2">
        <div class="col-md-5 auth-left text-center">
          <img src="{{ asset('sitefront/auth-back.png') }}" alt="">
          <div class="">
            <h3 style='letter-spacing:3px;margin-bottom:0px'>WELCOME TO</h3>
            <h1 style='margin:6px;'>INVESTOUT</h1>
            <h3>For yourself dosen't <br> mean BY youself </h3>
          </div>
        </div>

        <div class="col-md-7 auth-right">
          <div class="col-md-8" style='padding-left:0px'>
            <div class="row text-left" style='margin:0px'>
              <h4>Sign Up for <br><span class='site-brand'>InvestOut</span> Dashboard</h4>
            </div>
            <div class="row">
              <div class="col-md-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                  <div class="col-md-6" style='padding:0px'>
                    <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-6" style='padding:0px;padding-left:5px'>
                    <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-12">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-12">
                    <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" required autofocus>
                    @if ($errors->has('address'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-6" style='padding:0px'>
                    <input type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" placeholder="City" required autofocus>
                    @if ($errors->has('city'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-6" style='padding:0px;padding-left:5px'>
                    <input type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" placeholder="State" required autofocus>
                    @if ($errors->has('state'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                    @endif                  </div>
                  <div class="col-md-12">
                    <input type="text" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ old('zipcode') }}" placeholder="Zip Code" required autofocus>
                    @if ($errors->has('zipcode'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('zipcode') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-12">
                    <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autofocus>
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-12">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-12">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirm" required>
                  </div>
                  <div class="col-md-12">
                    <select name="role" class='form-control' value="">
                        <option value="3">Investor</option>
                        <option value="2">Realtor</option>
                        <option value="1">Seller</option>
                    </select>
                    @if ($errors->has('role'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-12">
                    <input type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" placeholder="Company" required autofocus>
                    @if ($errors->has('company'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('company') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="col-md-12 text-right" style='margin-top:.6em'>
                    <button type="submit" name="button">Register</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
          <div class="inside-right-container text-center col-md-4">
            <div class="outer">
              <div class="inner"></div>
              <div class="inner1"></div>
            </div>
            <img src="{{ asset('sitefront/auth-logo.png') }}"  alt="">
            <div class="dont-have-account">
              <span>Already have an account?<a href="{{ route('login') }}" class='signup-link'>Login</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

@endsection


@section('template_script')
@endsection
