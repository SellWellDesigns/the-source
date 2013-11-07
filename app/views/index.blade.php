@extends('layouts.site')

@section('header')
  <header id="header" class="text-center">
    <div id="logo"></div>
  </header>
@stop

@section('content')

  <section id="about" class="page brand1-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p class="lead text-justify">
            The Source - (sôrs, srs) , n
-an artisan food market that occupies a former 1880‘s brick foundry building in Denver’s River North  District. 
- a collective of food artisans offering visitors everything from freshly baked bread to craft cocktails, from street tacos to contemporary flower arrangements.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-offset-4 col-lg-8">
          <p class="text-justify">
            Among The Source’s 15 tenants are Acorn, a wood-fired restaurant and cocktail bar owned by the team behind Oak at Fourteenth; Comida, a modern Mexican taqueria; CapRock Farm Bar, a crafted cocktail and juice bar; and Babette’s Artisan Breads, a traditional French bakery. In the Commissary Space of the building are MeatHead, a butcher; Americanum Provisions, a specialty produce market; and floral shop Beet & Yarrow. Tenants also include Super Ordinary Gallery, a design store and exhibit space; the Proper Pour, an independent wine and spirits bottle shop, and Crooked Stave Artisan Beer Project, a cultish brewery specializing in funky and sour beers. Also setting up shop at The Source are Boulder-based Boxcar Coffee Roasters and Mondo Market, a cheese, spice, and specialty food store.
          </p>
          <p class="text-justify">
            The Source offers a one-stop shopping experience for the food-obsessed while also providing some of Denver’s best artisans with an outlet for their crafts. The openness of the building speaks to its community-oriented philosophy. It was repurposed under the guidance of architect Stephen Dynia with a strong commitment to preserving its industrial identity while adapting it for its current use. The industrial design with clear layers of new materials complementing the original shell conveys the integrity and edginess both of the tenants themselves and of this new marketplace. 
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
          <h3>hours</h3>

          <p class="lead">
            Monday - Friday 8:00am - 11:00pm<br />
            Saturday - Sunday 9:00am - 12:00am
          </p>

          <p class="lead">
            3350 Brighton Blvd<br />
            Denver, CO 80216
          </p>

          <p class="lead">(720) 443-1135</p>

          <p>
            <a class="btn btn-info" href="mailto:info@thesourcedenver.com">
              Contact
            </a>
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

        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c1e">
            What is The Source?
            <b class="toggler">+</b>
          </a>
          <div id="c1e" class="accordion-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
        </div>

        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c2e">
            What is The Source?
            <b class="toggler">+</b>
          </a>
          <div id="c2e" class="accordion-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
        </div>

        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c3e">
            What is The Source?
            <b class="toggler">+</b>
          </a>
          <div id="c3e" class="accordion-content collapse">
            <p>
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div id="pageFold">

    <section id="tenants" class="page text-center brand2-bg">
      <div class="container">
        <h1>
          <a href="#tenant-properPour" data-toggle="tenant-page">proper pour</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">acorn</a>
        </h1>
        <h1>
          <a href="#tenant-boxcar" data-toggle="tenant-page">boxcar coffee</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">zeppelin development</a>
        </h1>
        <h1>
          <a href="#tenant-properPour" data-toggle="tenant-page">proper pour</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">acorn</a>
        </h1>
        <h1>
          <a href="#tenant-boxcar" data-toggle="tenant-page">boxcar coffee</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">zeppelin development</a>
        </h1>
        <h1>
          <a href="#tenant-properPour" data-toggle="tenant-page">proper pour</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">acorn</a>
        </h1>
        <h1>
          <a href="#tenant-boxcar" data-toggle="tenant-page">boxcar coffee</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">zeppelin development</a>
        </h1>
        <h1>
          <a href="#tenant-properPour" data-toggle="tenant-page">proper pour</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">acorn</a>
        </h1>
        <h1>
          <a href="#tenant-boxcar" data-toggle="tenant-page">boxcar coffee</a>
        </h1>
        <h1>
          <a href="#" data-toggle="tenant-page">zeppelin development</a>
        </h1>
      </div>
      
      <div id="tenant-boxcar" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>boxcar coffee</h1>
          </div>
        </div>
      </div>

    </section>
    

    <section id="faq" class="page brand1-bg">
      <div class="container">
        <h1>faq</h1>

        <div id="faq-accordion" class="accordion">

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c1f">
              What is The Source?
              <b class="toggler">+</b>
            </a>
            <div id="c1f" class="accordion-content collapse">
              <p>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c2f">
              What is The Source?
              <b class="toggler">+</b>
            </a>
            <div id="c2f" class="accordion-content collapse">
              <p>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c3f">
              What is The Source?
              <b class="toggler">+</b>
            </a>
            <div id="c3f" class="accordion-content collapse">
              <p>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div>
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






    $('#faq').affix({
      offset: {
        top: function(){
          return ( this.top = ($('#pageFold').offset().top - ($('#nav').outerHeight(true) * 2) + 20) );
        },
        bottom: function () {
          return (this.bottom = $('#footer').outerHeight(true) + 100)
        }
      }
    });



    $('[data-toggle="tenant-page"]').on('click', function(e){
      e.preventDefault();

      var
        self    = $(this),
        target  = self.attr('href'),
        $target = $(target)
      ;

      $('html, body').scrollTop( $('#tenants').offset().top - 77 );
      $target.addClass('active');
      $('#tenants').css({
        height: '1400px',
        overflow: 'hidden'
      });
      $('#faq').addClass('affix-bottom-important');
      $(window).trigger('scroll');

      return false;
    });

    $('[data-toggle="tenant-page-off"]').on('click', function(e){
      $('.tenant-sub-page', '#tenants').removeClass('active');
      $('#faq').removeClass('affix-bottom-important affix affix-bottom');
      $('#tenants').removeAttr('style');
      $(window).trigger('scroll');
    });

    // $('[data-toggle="tenant-page"]').on('click', function(e){
    //   e.preventDefault();

    //   var
    //     self    = $(this),
    //     target  = self.attr('href'),
    //     $target = $(target)
    //   ;

    //   $target.addClass('active');
    //   // $('html, body').scrollTop( $('#tenants').offset().top - 77 );
    //   $('.container', '#tenants').hide();
    //   // $('#faq').addClass('affix-bottom-important');
    //   // $(window).trigger('scroll');

    //   return false;
    // });

    // $('[data-toggle="tenant-page-off"]').on('click', function(e){
    //   $('.tenant-sub-page', '#tenants').removeClass('active');
    //   // $('#faq').removeClass('affix-bottom-important');
    //   $('.container', '#tenants').show();
    // });







    /**
     * Animate Scrolling
     */
    $('[data-scroll]').on('click', function(){
        var $target = $( $(this).data('target') || $(this).attr('href') );
        if(!$target) return;
        $('html, body').animate({ 'scrollTop': $target.offset().top - 75 });
    });

    $('[data-spy="scroll"]').on('activate.bs.scrollspy', function(){
      var
        self   = $(this),
        target = $( self.data('target') ),
        slider = $('#active-slider')
      ;
      
      slider.stop().animate({
        left: $('.active', target).position().left
      })
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

      var image = '{{ asset("img/the-source-map-icon.png") }}';
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