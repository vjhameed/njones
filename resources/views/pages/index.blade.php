@extends('layouts.app-layout')


@section('title')

@endsection


@section('style')
<style media="screen">

.main-carousel-1{
background-image: url({{ asset('sitefront/Cover3.jpg') }});
}
.main-carousel-2{
background-image: url({{ asset('sitefront/Cover2.jpg') }});
}
.main-carousel-3{
background-image: url({{ asset('sitefront/Cover1.jpg') }});
}

.product-show-button>button{
  margin-left: 0px !important;
  font-family: unisansboldbold;
  font-size: .4em;
  border-radius: 9px;
  border: 1px solid white !important;
  background-color: rgba(43, 61, 81, 0.59) !important;
  padding: .3em 1.7em;
  color: white;
}

.product-show-button>button:hover {
  box-shadow: none !important;
}


</style>
@endsection

@section('body')

<div id="carousel-generic" style='height:100%' class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-generic" data-slide-to="1"></li>
    <li data-target="#carousel-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style='height:100%'>
    <div class="item active" style='height:100%'>
      <div class="mainpic main-carousel-1">
        <div class="container slider-main">
          <div class="main-text text-left col-lg-6">
              <div class="" style='margin-bottom:-10px;line-height:55px'>
                <span style='font-family:unisansboldbold'>Welcome to ION <br>
                </span>
                <span style='color:#33a58e'>
                  by N. Jones Enterprise</span>
              </div>
              <a href='{{ route('register') }}' class="product-show-button">
                  <button>Sign Up</button>
              </a>
          </div>
        </div>
      </div>
    </div>
    <div class="item " style='height:100%'>
      <div class="mainpic main-carousel-3">
        <div class="container slider-main">
          <div class="main-text text-left col-lg-6">
            <div class="" style='margin-bottom:-10px;line-height:55px'>
              <span style='font-family:unisansboldbold'>Welcome to ION <br>
              </span>
              <span style='color:#33a58e'>
                by N. Jones Enterprise</span>
            </div>
            <a href='{{ route('register') }}' style='display:block' class="product-show-button">
                <button>Sign Up</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="item" style='height:100%'>
      <div class="mainpic main-carousel-2">
        <div class="container slider-main">
          <div class="main-text text-right col-lg-offset-6 col-lg-6">
            <div class="" style='margin-bottom:-10px;line-height:55px'>
              <span style='font-family:unisansboldbold'>Welcome to ION <br>
              </span>
              <span style='color:#33a58e'>
                by N. Jones Enterprise</span>
            </div>
             <a href='{{ route('register') }}' style='display:block' class="product-show-button">
                 <button>Sign Up</button>
             </a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Controls -->

</div>

{{-- about invest out  --}}
  <div class="container about-invest-out">

    <div class="col-lg-offset-2 col-lg-8 col-sm-12">
        <h1 class='text-center'>Writing assistance whenever you need it., <br> How Can We Help?
        </h1>
    </div>

    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12 " id="ab-wrap">
          <div class="col-lg-6 about-invest-text col-sm-6 col-xs-6" id="ab-text"><span style='color:#2f9784'>About ION</span>
            <p class="">
              ION is an online training system developed by N. Jones Enterprise for clients seeking real writing assistance at any time of the day.
              We understand innovation can come when help is not available. So, aligned with our supportive nature, we’ve built a supportive platform that allows members to learn as well as create and develop their content along the way whenever they need it.
            </p>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-6" id="ab-image">
            <img class='img' src="{{ asset('sitefront/about-invest-image.jpg') }}" alt="">
          </div>
        </h1>
    </div>
    <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12" id="ab-wrap">
      <div class=" col-lg-6 about-invest-text col-sm-6 col-xs-6" id="ab-text"><span style='color:#2f9784'>Contact Us!</span>
        <p class="">
          For more information, Contact Us!

          Contact us:
          Email ion@njonesenterprise.org
          Phone: (703) 589-5700 - M-F 9-5 EST
        </p>
      </div>
    </div>

  </div>
{{-- about invest out finish --}}

  {{-- <div class="seller-realtor-investor container">
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 text-center center-aligned-pic seller-part-main">
      <div class="">
        <h2>SELLER</h2>
      </div>
      <div class="seller-overlay">
      </div>
      <div class="seller-overlay2">
      </div>
      <div class="">
        <button type="button" name="button" class='le-more'>Learn More</button>
      </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 text-center center-aligned-pic investor-part-main">
      <div class="">
        <h2>INVESTOR</h2>
      </div>
      <div class="inv-overlay">
      </div>
      <div class="inv-overlay2">
      </div>
      <div class="">
        <button type="button" name="button" class='le-more'>Learn More</button>
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
          <button type="button" name="button" class='le-more'>Learn More</button>
        </div>
    </div>
  </div> --}}


  {{-- <div class="container home-rev text-center">
    <span>
      There is no place like home <br>
      Maximize its value!
    </span>
  </div> --}}


@endsection


@section('template_script')
  <script src="{{ asset('js/parallax.min.js') }}"></script>
  <script type="text/javascript">
    $('.home-rev').parallax({imageSrc: "{{ asset('sitefront/home-rev1.jpg') }}"});
  </script>
@endsection
