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
            <div class="main-text text-left col-lg-offset-1 col-lg-6">
              <div style='line-height:55px'>
                <span style='font-family:unisansboldbold'>Welcome to ION <br></span>
                <span style='color:#33a58e; font-family:unisansboldbold'>by N. Jones Enterprise</span>
              </div>
              <a href='#' class="product-show-button">
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
      <div class="col-lg-6 about-invest-text col-sm-6 col-xs-6" id="ab-text"><span style='color:#2f9784'>About ION</span>
        <p>
          ION is an online training system developed by N. Jones Enterprise for clients seeking real writing assistance at any time of the day. We understand innovation can come when help is not available. So, aligned with our supportive nature, we’ve built a supportive
          platform that allows members to learn as well as create and develop their content along the way whenever they need it.
        </p>
      </div>
      <div class="col-lg-6 col-sm-6 col-xs-6" id="ab-image">
        <img class='img' src="sitefront/about-invest-image.jpg" alt="">
      </div>
      </h1>
    </div>
    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12" id="ab-wrap">
      <div class=" col-lg-6 about-invest-text col-sm-6 col-xs-6" id="ab-text"><span style='color:#2f9784'>Contact Us!</span>
        <p class="lead">
          For more information, Contact Us! Contact us: Email ion@njonesenterprise.org Phone: (703) 589-5700 - M-F 9-5 EST
        </p>
      </div>
    </div>

  </div>

@endsection


@section('template_script')
  <script src="{{ asset('js/parallax.min.js') }}"></script>
  <script type="text/javascript">
    $('.home-rev').parallax({imageSrc: "{{ asset('sitefront/home-rev1.jpg') }}"});
  </script>
@endsection
