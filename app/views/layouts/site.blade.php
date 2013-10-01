<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>The Source</title>

    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">

      <div class="container">
        <div class="navbar-header pull-right">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img class="logo" src="{{ asset('img/logo-primary.jpg') }}" />
          </a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="#about">About</a>
            </li>
            <li class="dropdown">
              <a href="#vendors" class="dropdown-toggle" data-toggle="dropdown">Vendors <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Crooked Stave</a></li>
                <li><a href="#">Oak</a></li>
                <li><a href="#">Mondo</a></li>
              </ul>
            </li>
            <li>
              <a href="#events">Events</a>
            </li>
            
            <li>
              <a href="#">
                <i class="icon-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="icon-google-plus"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="icon-twitter"></i>
              </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

    </nav>


    
    @yield('content')



    <footer id="footer">
      <div class="container">
        &copy; {{ date('Y') }} The Source
      </div>
    </footer>
    

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>