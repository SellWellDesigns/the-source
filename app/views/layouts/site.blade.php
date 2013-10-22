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
  <body data-spy="scroll" data-target="#nav" data-offset="200">

    <nav id="nav">
      <ul class="nav">
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
          <a href="#tenants" data-scroll="true">tenants</a>
        </li>
        <li>
          <a href="#faq" data-scroll="true">faq</a>
        </li>
        <li>
          <a href="#social" data-scroll="true">social</a>
        </li>
      </ul>
    </nav>


    
    @yield('content')



    <footer id="social" class="brand4-bg text-center">
      <ul class="nav">
        <li>
          <a href="#" class="brand1">
            <i class="icon-2x icon-facebook"></i>
          </a>
        </li>
        <li>
          <a href="#" class="brand1">
            <i class="icon-2x icon-tumblr"></i>
          </a>
        </li>
        <li>
          <a href="#" class="brand1">
            <i class="icon-2x icon-instagram"></i>
          </a>
        </li>
        <li>
          <a href="#" class="brand1">
            <i class="icon-2x icon-twitter"></i>
          </a>
        </li>
      </ul>
    </footer>

    <footer id="footer">
      <div class="row">
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-1.jpg') }}" />
        </div>
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-2.jpg') }}" />
        </div>
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-1.jpg') }}" />
        </div>
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-2.jpg') }}" />
        </div>
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-2.jpg') }}" />
        </div>
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-1.jpg') }}" />
        </div>
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-2.jpg') }}" />
        </div>
        <div class="col-lg-3">
          <img class="img-responsive" src="{{ asset('img/footer-image-1.jpg') }}" />
        </div>
      </div>
    </footer>
    

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>