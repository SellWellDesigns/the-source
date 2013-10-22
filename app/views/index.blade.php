@extends('layouts.site')

@section('content')

  <header id="header" class="text-center">
    <div id="logo"></div>
  </header>

  <section id="about" class="page brand1-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p class="lead text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-offset-4 col-lg-8">
          <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="page">
    <div class="container">
      <h1>contact</h1>

      <div class="row">
        <div class="col-lg-6">
          <p class="lead">
            hours<br />
            Monday - Friday 8:00am - 11:00pm<br />
            Saturday - Sunday 9:00am - 12:00am
          </p>

          <p class="lead">
            3350 Brighton Blvd<br />
            Denver, CO 80216
          </p>

          <p class="lead">
            info@thesourcedenver.com
          </p>
        </div>
        <div class="col-lg-6 hidden-xs">
          <div id="map-canvas"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="events" class="page brand1-bg">
    <div class="container">
      <h1>events</h1>

      <div id="events-accordion" class="accordion">

        <div class="toggle">
          <a class="toggle-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c1e">
            <span class="toggle-text">What is The Source?</span>
          </a>
          <div id="c1e" class="toggle-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
          <a data-toggle="collapse" data-parent="#events-accordion" href="#c1e">
            <b class="toggler pull-right">+</b>
          </a>
        </div>

        <div class="toggle">
          <a class="toggle-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c2e">
            <span class="toggle-text">What is The Source?</span>
          </a>
          <div id="c2e" class="toggle-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
          <a data-toggle="collapse" data-parent="#events-accordion" href="#c2e">
            <b class="toggler pull-right">+</b>
          </a>
        </div>

        <div class="toggle">
          <a class="toggle-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c3e">
            <span class="toggle-text">What is The Source?</span>
          </a>
          <div id="c3e" class="toggle-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
          <a data-toggle="collapse" data-parent="#events-accordion" href="#c3e">
            <b class="toggler pull-right">+</b>
          </a>
        </div>
        

      </div>
    </div>
  </section>

  <section id="tenants" class="page text-center brand2-bg">
    <div class="container">
      <h1>
        <a href="#">proper pour</a>
      </h1>
      <h1>
        <a href="#">acorn</a>
      </h1>
      <h1>
        <a href="#">boxcar coffee</a>
      </h1>
      <h1>
        <a href="#">zeppelin development</a>
      </h1>
      <h1>
        <a href="#">proper pour</a>
      </h1>
      <h1>
        <a href="#">acorn</a>
      </h1>
      <h1>
        <a href="#">boxcar coffee</a>
      </h1>
      <h1>
        <a href="#">zeppelin development</a>
      </h1>
      <h1>
        <a href="#">proper pour</a>
      </h1>
      <h1>
        <a href="#">acorn</a>
      </h1>
      <h1>
        <a href="#">boxcar coffee</a>
      </h1>
      <h1>
        <a href="#">zeppelin development</a>
      </h1>
      <h1>
        <a href="#">proper pour</a>
      </h1>
      <h1>
        <a href="#">acorn</a>
      </h1>
      <h1>
        <a href="#">boxcar coffee</a>
      </h1>
      <h1>
        <a href="#">zeppelin development</a>
      </h1>
    </div>
  </section>

  <section id="faq" class="page brand1-bg">
    <div class="container">
      <h1>faq</h1>

      <div id="faq-accordion" class="accordion">

        <div class="toggle">
          <a class="toggle-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c1f">
            <span class="toggle-text">What is The Source?</span>
          </a>
          <div id="c1f" class="toggle-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
          <a data-toggle="collapse" data-parent="#events-accordion" href="#c1f">
            <b class="toggler pull-right">+</b>
          </a>
        </div>

        <div class="toggle">
          <a class="toggle-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c2f">
            <span class="toggle-text">What is The Source?</span>
          </a>
          <div id="c2f" class="toggle-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
          <a data-toggle="collapse" data-parent="#events-accordion" href="#c2f">
            <b class="toggler pull-right">+</b>
          </a>
        </div>

        <div class="toggle">
          <a class="toggle-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c3f">
            <span class="toggle-text">What is The Source?</span>
          </a>
          <div id="c3f" class="toggle-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
          <a data-toggle="collapse" data-parent="#events-accordion" href="#c3f">
            <b class="toggler pull-right">+</b>
          </a>
        </div>

      </div>
    </div>
  </section>
  
@stop


@section('scripts')
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script>
  function calcParallax(tileheight, speedratio, scrollposition) {
    return ((tileheight) - (Math.floor(scrollposition / speedratio) % (tileheight+1)));
  }

  $(function(){

    /**
     * Parallax Effect
     */
    var
      windowHeight = $(window).height(),
      logo         = $('#logo')[0],
      $body        = $('body')
    ;

    $(window).on('scroll', function()
    {
      var
        posY = (document.documentElement.scrollTop)
          ? document.documentElement.scrollTop
          : window.pageYOffset,
        bottomWindowPos = posY + windowHeight
      ;
      
      var logoScroll = calcParallax(299, 8, posY);
      logo.style.backgroundPosition =  "center " + logoScroll + "px"; 
    });

    $(window).on('resize', function()
    {
      windowHeight = $(window).height();
    });






    // var
    //   tenants             = $('#tenants'),
    //   tenantsOffsetTop    = tenants.offset().top,
    //   tenantsHeight       = tenants.height(),
    //   tenantsOffsetBottom = tenantsOffsetTop + tenantsHeight
    // ;

    // tenants.css({
    //   marginBottom: (tenantsHeight - 700) * -1
    // });

    // $(window).on('scroll', function()
    // {
    //   var scrollTop = $body[0].scrollTop;
    //   if( scrollTop >= tenantsOffsetTop && scrollTop < tenantsOffsetBottom )
    //   {
    //     tenants.addClass('fixed');
    //     console.log(scrollTop - tenantsOffsetTop);
    //     tenants.animate({ 'scrollTop': 100 });
    //     // $body.addClass('stop-scrolling');
    //   } else {
    //     tenants.removeClass('fixed');        
    //   }
    // });







    /**
     * Animate Scrolling
     */
    $('[data-scroll]').on('click', function(){
        var $target = $( $(this).data('target') || $(this).attr('href') );
        if(!$target) return;
        $('html, body').animate({ 'scrollTop': $target.offset().top });
    });

    /**
     * Accordions
     */
    $('.accordion')
      .on('show.bs.collapse', function(e){
          var toggle = $(e.target).parent();
          toggle.addClass('in');
      })
      .on('hide.bs.collapse', function(e){
          var toggle = $(e.target).parent();
          toggle.removeClass('in');
      });

    /**
     * Google Map
     */
    var map;
    var theSource = new google.maps.LatLng(39.768756,-104.97973);

    var MY_MAPTYPE_ID = 'custom_style';

    function initialize() {

      var featureOpts = [
        {
          stylers: [
            { hue: 'rgb(201,202,194)' },
            { visibility: 'simplified' },
            { gamma: 0.5 },
            { weight: 0.5 }
          ]
        },
        {
          elementType: 'labels',
          stylers: [
            { visibility: 'on' }
          ]
        },
        {
          featureType: 'water',
          stylers: [
            { color: '#83E5EE' }
          ]
        }
      ];

      var mapOptions = {
        zoom: 15,
        center: theSource,
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
        },
        mapTypeId: MY_MAPTYPE_ID
      };

      map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

      var styledMapOptions = {
        name: 'Custom Style'
      };

      var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

      map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

      var image = '/img/the-source-map-icon.png';
      var myLatLng = theSource;
      var beachMarker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: image
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  });
  </script>
@stop