<!DOCTYPE html>
<html lang="en" class="full-height">
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
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('icons/Source_favicon_144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('icons/Source_favicon_114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('icons/Source_favicon_72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('icons/Source_favicon_57.png') }}">
    <link rel="shortcut icon" href="{{ asset('icons/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('icons/Source_favicon_32.png') }}">
  </head>
  <body data-spy="scroll" data-target="#nav" data-offset="200" class="full-height">

    <nav id="nav" class="navbar navbar-inverse navbar-default" role="navigation">
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
              <a href="{{asset('/')}}#about" data-scroll="true">about</a>
            </li>
            <li>
              <a href="{{asset('/')}}#contact" data-scroll="true">contact</a>
            </li>
            <li>
              <a href="{{asset('/')}}#events" data-scroll="true">events</a>
            </li>
            <li class="active">
              <a href="{{asset('/')}}#tenants" data-scroll="true" data-toggle="tenant-page-off">vendors</a>
            </li>
            <li>
              <a href="{{asset('/')}}#faq" data-scroll="true">faq</a>
            </li>
            <li>
              <a href="{{asset('/')}}#social" data-scroll="true">social</a>
            </li>
            <li id="active-slider"></li>
          </ul>
        </div>
      </div>
    </nav>

    {{$content}}

    <a href="http://www.cssdesignawards.com/sites/the-source-denver/24043" id="cssda-award" target="_blank"></a>
    <div id="awwwards" class="right white">
      <a href="http://www.awwwards.com/best-websites/the-source-denver?subsection=all" target="_blank">best websites of the world</a>
    </div>

    <script>
      document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><\/script>');
    </script>
    <script>
      if(!window.jQuery) {
        document.write('<script src="{{ asset('js/jquery.js') }}"><\/script>');
      }
    </script>

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