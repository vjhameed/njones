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
        <li><a href="/about">ABOUT US</a></li>
        <li><a href="/workshop">WORKSHOPS</a></li>
        <li><a href="/contact">CONTACT US</a></li>
        @guest
            <li><a class="signup-btn" href="{{ route('login') }}">LOGIN</a></li>
            <li><a class="signup-btn" href="{{ route('register') }}">SIGN UP</a></li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        LOGOUT }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div><!-- end header -->
