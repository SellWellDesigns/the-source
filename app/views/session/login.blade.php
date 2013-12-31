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
    <style>
    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 50px auto 0;
      background: #fff;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }
    .form-signin .checkbox {
      font-weight: normal;
    }
    .form-signin .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    </style>

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
              <a href="{{asset('/')}}#tenants" data-scroll="true" data-toggle="tenant-page-off">tenants</a>
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

    <div class="container">
        {{ Session::get('message') }}

        <form class="form-signin" action="{{route('login')}}" method="post" role="form">
            <h2 class="form-signin-heading">Please Login</h2>

            <input class="form-control" type="text" name="username" placeholder="Username" required autofocus />
            <input class="form-control" type="password" name="password" placeholder="Password" required />
            <input class="btn btn-block btn-primary" type="submit" value="Sign in" />
        </form>
    </div>

  </body>
</html>