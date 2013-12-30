<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An artisan food market that occupies a former 1880‘s brick foundry building in Denver’s River North  District.">
    <meta name="author" content="Sell Well Designs">
    <meta name="msvalidate.01" content="FB7C9E11A88258519F6340ED52E0945B" />
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>The Source</title>

    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('js/html5shiv.js') }}"></script>
      <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('icns/Source_favicon_144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('icns/Source_favicon_114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('icns/Source_favicon_72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('icns/Source_favicon_57.png') }}">
    <link rel="shortcut icon" href="{{ asset('icns/Source_favicon_32.png') }}">
  </head>
  <body data-spy="scroll" data-target="#nav" data-offset="200">

    @yield('header')

    <nav id="nav" class="navbar navbar-inverse navbar-default" data-spy="affix" data-offset-top="855" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#about" data-scroll="true">about</a>
            </li>
            <li>
              <a href="#contact" data-scroll="true">contact</a>
            </li>
            <li>
              <a href="#events" data-scroll="true">events</a>
            </li>
            <li>
              <a href="#tenants" data-scroll="true" data-toggle="tenant-page-off">tenants</a>
            </li>
            <li>
              <a href="#faq" data-scroll="true">faq</a>
            </li>
            <li>
              <a href="#social" data-scroll="true">social</a>
            </li>
            <li id="active-slider"></li>
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('content')

    <footer id="social" class="brand4-bg text-center">
      <ul class="nav">
        <li>
          <a href="https://www.facebook.com/thesourcedenver" class="brand1">
            <i class="icon-2x icon-facebook"></i>
          </a>
        </li>
        <li>
          <a href="http://thesourcedenver.tumblr.com/" class="brand1">
            <i class="icon-2x icon-tumblr"></i>
          </a>
        </li>
        <li>
          <a href="http://instagram.com/thesourcedenver" class="brand1">
            <i class="icon-2x icon-instagram"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/TheSourceDenver" class="brand1">
            <i class="icon-2x icon-twitter"></i>
          </a>
        </li>
      </ul>
    </footer>

    <footer id="footer">
      <div class="row">
        
        @for($i=0; $i<8; $i++)
          <div class="col-sm-6 col-lg-3">
            <img class="img-responsive" src="{{ $photos->data[$i]->images->standard_resolution->url }}" />
          </div>
        @endfor

      </div>
    </footer>

    <script>
      document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><\/script>');
    </script>
    <script>
      if(!window.jQuery) {
        document.write('<script src="{{ asset('js/jquery.js') }}"><\/script>');
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{ asset('js/actions.min.js') }}"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-41828198-2', 'thesourcedenver.com');
      ga('send', 'pageview');
    </script>
  </body>
</html>