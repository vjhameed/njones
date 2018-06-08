@extends('layouts.app-layout')


@section('title')

@endsection


@section('style')
@endsection

@section('body')


  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <div class="row">
            <div class="main-text text-left col-lg-offset-1 col-lg-8">
              <div style='line-height:55px'>
                <span style='font-family:unisansboldbold'>Welcome to ION <br></span>
                <span style='color:#33a58e; font-family:unisansboldbold'>by Business Development Experts</span>
              </div>
              <a href='/register' class="product-show-button">
                    <button>Sign Up</button>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container about-invest-out">

    <div class="col-lg-offset-2 col-lg-8 col-sm-12">
      <h1 class='text-center'>Writing assistance whenever you need it., <br> How Can We Help?</h1>
    </div>

    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 " id="ab-wrap">
      <div class="col-lg-12 about-invest-text col-sm-6 col-xs-6 text-center" id="ab-text"><span style='color:#2f9784'>About ION</span>
        <p>
          ION is an online training system developed by N. Jones Enterprise for clients seeking real writing assistance at any time of the day. We understand innovation can come when help is not available. So, aligned with our supportive nature, we’ve built a supportive
          platform that allows members to learn as well as create and develop their content along the way whenever they need it.
        </p>
      </div>
      </h1>
    </div>

  </div>

@endsection


@section('template_script')
  <script src="{{ asset('js/parallax.min.js') }}"></script>
  <script type="text/javascript">
    $('.home-rev').parallax({imageSrc: "{{ asset('sitefront/home-rev1.jpg') }}"});
  </script>
@endsection
