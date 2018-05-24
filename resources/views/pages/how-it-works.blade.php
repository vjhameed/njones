@extends('layouts.app-layout')


@section('title')

@endsection


@section('style')

  <style media="screen">

  .how-it-works,.h-works{
    display: none;
  }

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
  .main-text{
    margin-top: 4em;
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

  .back-image{
    height: 100%;
    margin-top: 24%;
  }

  .log1{
    left: 19%;
    position: absolute;
    width: 320px;
    top: 2.49%;
  }

  .log2{
    left: 54%;
    position: absolute;
    width: 300px;
    top: .5%;
  }


  .log3{
    left: 19%;
    position: absolute;
    width: 300px;
    top: 24%;
  }

  .log4{
    left: 54%;
    position: absolute;
    width: 300px;
    top: 23.4%;
  }

  .log5{
    left: 19%;
    position: absolute;
    width: 300px;
    top: 44%;
  }

  .log6{
    left: 54%;
    position: absolute;
    width: 300px;
    top: 44%;
  }

  .log7{
    left: 19%;
    position: absolute;
    width: 300px;
    top: 64.5%;
  }

  .log8{
    left: 54%;
    position: absolute;
    width: 300px;
    top: 66.5%;
  }

  .log9{
    left: 38%;
    position: absolute;
    width: 300px;
    top: 85%;
  }

  .flow-parts p{
    opacity: 1;
    transition: all 0.3s ease-in-out;
  }

  .flow-parts:hover p{
    opacity: .7
  }

  .flow-image{
    width: 50%;
  }

  .flow  p{
    font-size: 1.21em;
    font-family: unisansregularregular;
    color: #39556d;
    margin-top: 1em;
  }


@media (max-width:1029px) and (min-width:900px){
  .log1{
      top: 0%;
  }
  .log2{
      top: -1.9%;
  }

  .log3{
    top: 22%;
  }

  .log4{
    top:20.4%
  }
  .log5,.log6{
    top: 42%;
  }
  .log7{
    top:63.5%
  }
  .log8{
    top:65.5%
  }
}

.work-main-small{
  display: none;
}

@media (max-width:899px){
  .work-main-large{
    display: none;
  }
  .work-main-small{
    display: block;
  }

  .wms > div:nth-of-type(2) div{
    padding: 0px;}

  .wms > div:nth-of-type(2) div{
    margin-bottom: 8px;}

  .wms .flow-parts p{
    margin: 0px;
    text-align: left;
    margin-left: 1.3rem;
    margin-top: 1em;
  }
    .wms .flow-parts img{
      width: 100%;
    }

    .p-1 p{
      margin-top: 6px !important;
    }
    .p-2 p{
      margin-top: 2em !important;
    }
    .left-border img {
      width: 100%;
      margin-top: -1em;
    }
    .left-border{
      padding: 5px;
    }
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

    <div class="col-lg-offset-2 col-lg-8 col-sm-12 text-center" style="margin-bottom: 0em;">
        <h1 class='' style="text-transform:uppercase">Get value for money by investing in homes which can get a much better price with some investments. <span style='color:#48a191'>InvestOUT</span> helps  you maximize value for investments.
        </h1>
        <button type="button" name="button" class='learn-more lm-1'><a href="{{ route('register') }}" style='color:#0b2a4a !important;text-decoration:none'>SIGNUP <span style="color:white;">TO INVEST</span></a></button>
    </div>

  </div>
{{-- about invest out finish --}}

    <div class="col-lg-12 work-main-large">
      <div class="col-lg-offset-1 text-center col-lg-10 flow" style='margin-bottom:6em'>
          <img src="{{ asset('sitefront/pa1.png') }}" class='back-image' alt="">
          <div class="col-sm-6 log1 flow-parts">
            <img src="{{ asset('sitefront/log1.png') }}" class='flow-image' alt="">
            <p>Seller creates account which captures  <br> profile information about the account Holder.</p>
          </div>
          <div class="log2 flow-parts">
            <img src="{{ asset('sitefront/log2.png') }}" style='width:40%' class='flow-image' alt="">
            <p>Inspector visits property and performs inspectionto evaluate the property.</p>
          </div>
          <div class="log3 flow-parts">
            <img src="{{ asset('sitefront/log3.png') }}" class='flow-image' alt="">
            <p>Real Estate Agent performs property evaluation and market analysis.</p>
          </div>
          <div class="log4 flow-parts">
            <img src="{{ asset('sitefront/log4.png') }}" class='flow-image' alt="">
            <p>Invest Out Agent performs property Title and Liens Search.</p>
          </div>
          <div class="log5 flow-parts">
            <img src="{{ asset('sitefront/log5.png') }}" class='flow-image' alt="">
            <p>Property is reviewed by Investors and they ask about different listings.</p>
          </div>
          <div class="log6 flow-parts">
            <img src="{{ asset('sitefront/logo6.png') }}" class='flow-image' alt="">
            <p>Renovation is performed & progress updates are made to IO Agent.</p>
          </div>
          <div class="log7 flow-parts">
            <img src="{{ asset('sitefront/logo7.png') }}" class='flow-image' alt="">
            <p>Profits shared between Seller, Investor, IO agent and Realtor.</p>
          </div>
          <div class="log8 flow-parts">
            <img src="{{ asset('sitefront/logo8.png') }}" class='flow-image' alt="">
            <p>Property is handed over to the Real Estate agent for sale.</p>
          </div>
          <div class="log9 flow-parts">
            <img src="{{ asset('sitefront/logo9.png') }}" class='flow-image' alt="">
            <p>Seller submits review of Investor, IO agent and IO Experience.</p>
          </div>
      </div>
    </div>

    <div class="col-lg-12 col-xs-12 work-main-small">
      <div class="col-xs-12 wms text-center flow" style='margin-bottom:6em'>
          <div class="col-sm-1 col-xs-1 left-border">
            <img src="{{ asset('sitefront/path-small.png') }}" class='back-image' alt="">
          </div>
          <div class="col-sm-11 col-xs-11 right-cont">
            <div class="col-xs-12 flow-parts p-1">
              <div class="col-xs-3">
                <img src="{{ asset('sitefront/log1.png') }}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Seller creates account which captures  <br> profile information about the account Holder.</p>
              </div>
            </div>
            <div class="col-xs-12 flow-parts p-2">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/log2.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Inspector visits property and performs inspectionto evaluate the property.</p>
              </div>
            </div>
            <div class="col-xs-12 flow-parts">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/log3.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Real Estate Agent performs property evaluation and market analysis.</p>
              </div>
            </div>
            <div class="col-xs-12 flow-parts">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/log4.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Invest Out Agent performs property Title and Liens Search.</p>
            </div>
            </div>
            <div class="col-xs-12 flow-parts">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/log5.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Property is reviewed by Investors and they ask about different listings.</p>
              </div>
            </div>
            <div class="col-xs-12 flow-parts">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/logo6.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Renovation is performed & progress updates are made to IO Agent.</p>
              </div>
            </div>
            <div class="col-xs-12 flow-parts p-7">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/logo7.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Profits shared between Seller, Investor, IO agent and Realtor.</p>
              </div>
            </div>
            <div class="col-xs-12 flow-parts">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/logo8.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Property is handed over to the Real Estate agent for sale.</p>
              </div>
            </div>
            <div class="col-xs-12 flow-parts">
              <div class="col-xs-3">
                <img src="{{asset('sitefront/logo9.png')}}" class='flow-image-small' alt="">
              </div>
              <div class="col-xs-9">
                <p>Seller submits review of Investor, IO agent and IO Experience.</p>
              </div>
            </div>
          </div>
      </div>
    </div>




@endsection


@section('template_script')
  <script src="{{ asset('js/parallax.min.js') }}"></script>
  <script type="text/javascript">
  function mediaSize() {
		/* Set the matchMedia */
		if (window.matchMedia('(max-width: 899px)').matches) {
      var he = $('.right-cont').css('height');
      $('.left-border').css('height',he);
		} else {
		}
	};

  mediaSize();
	window.addEventListener('resize', mediaSize, false);
  </script>
@endsection
