@extends('layouts.app-layout')


@section('title')

@endsection


@section('style')

  <style media="screen">

  .mainpic
  {
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  height: 75%;
  background-image: url({{ asset('sitefront/Cover-inner.jpg') }});
  }
  .overlay{
    height: 75%;
    opacity: .2;
  }

  .about-invest-out h1{
    margin-bottom: .4em;
  }
  .lm-1{
    font-size: 1em;
    font-weight: bold;
    padding: 6px 10px;
    color: #0b2a4a;
    background-color: #2f9784;
  }
  .investor-part-main{
  background-image: url("{{ asset('sitefront/inv-image.jpg') }}");
  }
  .slider-main{
        top: 55%;
  }
  </style>

@endsection

@section('body')


{{-- main front image and call to action --}}
<div class="mainpic">
  <div class="container slider-main">
    <div class="main-text text-right col-lg-offset-6 col-lg-6" style='line-height:54px'>
      <span style='color:#33a58e'>
        Wise <strong>Investments</strong>  <br>
      </span>
        Wise <strong>Profits</strong>
    </div>
  </div>
</div>
<!-- Controls -->


{{-- about invest out  --}}
  <div class="container about-invest-out">

    <div class="col-lg-offset-2 col-lg-8 col-sm-12 text-center" style="margin-bottom: 7em;">
        <h1 class='' style="text-transform:uppercase">Get value for money by investing in homes which can get a much better price with some investments. <span style='color:#48a191'>InvestOUT</span> helps  you maximize value for investments.
        </h1>
        <button type="button" name="button" class='learn-more lm-1'><a href="{{ route('register') }}" style='color:#0b2a4a !important;text-decoration:none'>SIGNUP <span style="color:white;">TO INVEST</span></a></button>
    </div>

    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 " id="ab-wrap">
          <div class="col-lg-6 about-invest-text col-sm-6 col-xs-6" id="ab-text"><span style='color:#2f9784'>The Investment</span>
            <p class="">
              Invest Out believes that home’s have potential value which is just as important as its current value. Each and every house has a significant amount of value which turns it into a home. Investout belives in maximising and getting value for those factors which are overlooked or due to lack of money, are not taken into account. You can bridge the gap as an investor and maximise the value of the home and take a share of the profits.
            </p>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-6" id="ab-image">
            <img class='img' src="{{ asset('sitefront/investor-about-img.jpg') }}" alt="">
          </div>
        </h1>
    </div>

  </div>
{{-- about invest out finish --}}



  <div class="seller-realtor-investor container">
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 text-center center-aligned-pic seller-part-main">
      <div class="">
        <h2>SELLER</h2>
      </div>
      <div class="seller-overlay">
      </div>
      <div class="seller-overlay2">
      </div>
      <div class="">
        <a href="/seller">
          <button type="button" name="button" class='le-more'>Learn More</button>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 text-center center-aligned-pic investor-part-main">
      <div class="">
        {{-- <h2>INVESTOR</h2> --}}
      </div>
      <div class="inv-overlay">
      </div>
      <div class="inv-overlay2">
      </div>
      <div class="">
        <a href="/investor">
          <button type="button" name="button" class='le-more'>Learn More</button>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 text-center center-aligned-pic realtor-part-main">
      <div class="">
        <h2>REALTOR</h2>
      </div>
        <div class="realtor-overlay">
        </div>
        <div class="rea-overlay">
        </div>
        <div class="rea-overlay2">
        </div>
        <div class="">
          <a href="/realtor">
            <button type="button" name="button" class='le-more'>Learn More</button>
          </a>
        </div>
    </div>
  </div>

@endsection


@section('template_script')
  <script src="{{ asset('js/parallax.min.js') }}"></script>
  <script type="text/javascript">

  </script>
@endsection
