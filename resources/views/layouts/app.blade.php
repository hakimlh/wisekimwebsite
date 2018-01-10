<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Abdelhakim Lahlou">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif] -->
</head>
<body>
  <!-- Navigation
      ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index">Wisekim</a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index#home" class="page-scroll">Home</a></li>
          <li><a href="index#works-section" class="page-scroll">Our Products</a></li>
          <li><a href="index#services-section" class="page-scroll">Services</a></li>
          <li><a href="index#team-section" class="page-scroll">Team</a></li>
          <li><a href="index#about-section" class="page-scroll">About</a></li>
          <li><a href="index#contact-section" class="page-scroll">Contact</a></li>
          <!-- Authentication Links -->
          @guest
              <li><a href="{{ route('login') }}">Login</a></li>
          @else
                  <!-- <ul class="mydropdown "> -->
                      <li class="dropdown"  >
                          <a onclick="myFunction()" class="dropbtn"> {{ Auth::user()->name }} <span class="caret"> </span></a>
                          <ul id="myDropdown" class="dropdown-content">
                            <li>
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                          </ul>
                      </li>
          @endguest
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!-- Header -->
    <div id="app">

        @yield('content')

    </div>

    <div id="social-section">
      <div class="container">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-github"></i></a></li> -->
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="footer">
      <div class="container">
        <p>Copyright &copy; Wisekim. Designed by <a href="http://www.facebook.com/wise.hakim" rel="nofollow">Wisekim</a></p>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.1.11.1.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script> -->
    <script type="text/javascript" src="{{ asset('js/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jqBootstrapValidation.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/contact_me.js')}}"></script>

    <!-- Javascripts
        ================================================== -->
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/dropdownlist.js')}}"></script>
</body>
</html>
