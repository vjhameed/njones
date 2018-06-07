@extends('layouts.app-layout')


@section('title')
  Workshop
@endsection


@section('style')
  <style>
    .container  h3{
        font-family: unisansregularregular;
      }
    .container h2{
      font-family: unisanssemiboldbold;
      font-size: 2em;
    }

    .card{
        margin: 15em 0px;
    }

    .card-header{
      font-size: 2.5em;
      margin-bottom: 1em;
    }

    .card label{
      font-size: 1.4em;
      font-weight: 100;
    }

    .card button{
      padding: .4em 1.3em;
      font-size: 1.2em;
      font-family: unisansboldbold;
      float: right
    }
  </style>
@endsection

@section('body')
  <header id="workshop-head-section">
      <div class="dark-overlay">
          <div class="home-inner">
              <div class="container">
                  <div class="row">
                      <div class="main-text col-lg-offset-6 text-right col-lg-6" style='padding-top: 150px;'>
                          <div style='line-height:55px'>
                              <span style='font-family:unisansboldbold'>Sign Up Right Now<br></span>
                              <span style='color:#33a58e; font-family:unisansboldbold'>To Access Features of Ion</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="/register">
                                Dont have an account ? Sign Up right now
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

      </div>
    </div>
  </div>



@endsection


@section('template_script')
@endsection
