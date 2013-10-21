@extends('layouts.site')

@section('content')

  <header id="header" class="text-center">
    <img src="{{ asset('img/logo-lg.png') }}" />
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

          <ul class="nav">
            <li>
              <a href="#">
                <i class="icon-2x icon-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="icon-2x icon-tumblr"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="icon-2x icon-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="icon-2x icon-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div id="map-canvas"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="events" class="page brand1-bg">
    <div class="container">
      <h1>events</h1>

      <div id="events-accordion">

        <div class="toggle">
          <a data-toggle="collapse" data-parent="#events-accordion" href="#collapseOneE">
            What is The Source?
            <i class="icon-2x icon-plus pull-right"></i>
          </a>
          <div id="collapseOneE" class="collapse">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>

        <div class="toggle">
          <a data-toggle="collapse" data-parent="#events-accordion" href="#collapseTwoE">
            How did you choose your tenants?
            <i class="icon-2x icon-plus pull-right"></i>
          </a>
          <div id="collapseTwoE" class="panel-collapse collapse">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>

        <div class="toggle">
          <a data-toggle="collapse" data-parent="#events-accordion" href="#collapseThreeE">
            Can I rent out The Source?
            <i class="icon-2x icon-plus pull-right"></i>
          </a>
          <div id="collapseThreeE" class="panel-collapse collapse">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="tenants" class="page text-center brand2-bg">
    <div class="container">
      <h1>proper pour</h1>
      <h1>acorn</h1>
      <h1>boxcar coffee</h1>
      <h1>zeppelin development</h1>
    </div>
  </section>

  <section id="faq" class="page brand1-bg">
    <div class="container">
      <h1>faq</h1>

      <div id="faq-accordion">

        <div class="toggle">
          <a data-toggle="collapse" data-parent="#faq-accordion" href="#collapseOne">
            What is The Source?
            <i class="icon-2x icon-plus pull-right"></i>
          </a>
          <div id="collapseOne" class="collapse">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>

        <div class="toggle">
          <a data-toggle="collapse" data-parent="#faq-accordion" href="#collapseTwo">
            How did you choose your tenants?
            <i class="icon-2x icon-plus pull-right"></i>
          </a>
          <div id="collapseTwo" class="panel-collapse collapse">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>

        <div class="toggle">
          <a data-toggle="collapse" data-parent="#faq-accordion" href="#collapseThree">
            Can I rent out The Source?
            <i class="icon-2x icon-plus pull-right"></i>
          </a>
          <div id="collapseThree" class="panel-collapse collapse">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>

      </div>
    </div>
  </section>
  
@stop


@section('scripts')
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script>
  $(function(){
    $('[data-scroll]').on('click', function(){
        var $target = $( $(this).data('target') || $(this).attr('href') );
        if(!$target) return;
        $('html, body').animate({ 'scrollTop': $target.offset().top });
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
        zoom: 17,
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