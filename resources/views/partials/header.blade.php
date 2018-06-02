{{-- header --}}
<div class="container-fluid headnav ">
 <nav class="navbar navbar-inverse navbar-default navbar-fixed-top nb-s shadow" role="navigation">
   <div class="" style="height:5px;background-color:#329e8b"></div>
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="{{ asset('sitefront/logo01.png') }}" style="height:43px;width:121px;margin-top:9px ;" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">HOME</a></li>
        <li><a href="">ABOUT US</a></li>
        <li><a href="/workshop">WORKSHOPS</a></li>
        <li><a href="">CONTACT US</a></li>
        <li><a class='signup-btn' href="{{ route('login') }}">SIGN UP</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div><!-- end header -->
