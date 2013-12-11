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
        <div class="col-md-6">
          <p class="lead text-justify">
            The Source - (sôrs, srs) , n
-an artisan food market that occupies a former 1880‘s brick foundry building in Denver’s River North  District. 
- a collective of food artisans and retailers offering visitors everything from freshly baked bread to craft cocktails, from street tacos to contemporary flower arrangements.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-4 col-md-8">
          <p class="text-justify">
            Among The Source’s 15 tenants are Acorn, a wood-fired restaurant and cocktail bar owned by the team behind Oak at Fourteenth; Comida, a modern Mexican taqueria; CapRock Farm Bar, a crafted cocktail and juice bar; and Babettes Artisan Breads, a traditional French bakery. In the Commissary Space of the building are Meathead, a butcher; Americanum Provisions, a specialty produce market; and floral shop Beet & Yarrow. Tenants also include SVPER ORDINARY, a design store and exhibit space; The Proper Pour, an independent wine and spirits bottle shop, and Crooked Stave Artisan Beer Project, a cultish brewery specializing in funky and sour beers. Also setting up shop at The Source are Boulder-based Boxcar Coffee Roasters and Mondo Market, a cheese, spice, and specialty food store.
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
        <div class="col-sm-6">
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
            <a class="btn btn-info btn-lg" href="mailto:info@thesourcedenver.com">
              Contact
            </a>
          </p>

        </div>
        <div class="col-sm-6 hidden-xs">
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
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c3e">
            <span class="date">December 13-15</span>
            The Source - 
            Colorado Makers Market
            <b class="toggler">+</b>
          </a>
          <div id="c3e" class="accordion-content collapse">
            <h4>The Source</h4>
            <p>
              The first annual Colorado Makers Holiday Market will be at the Source in Denver December 13th - 15th. Friday, December 13th we will be hosting Happy Hour at the Caprock Farm Bar. Tickets are $20 and includes two cocktails and raffle entry. For every ticket purchased is a chance to win a basket of Colorado made goods. Saturday & Sunday are free to attend all day.
            </p>
          </div>
        </div>

        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c4e">
            <span class="date">December 14th</span>
            Svper Ordinary - 
            Still Winter
            <b class="toggler">+</b>
          </a>
          <div id="c4e" class="accordion-content collapse">
            <h4>Svper Ordinary</h4>
            <p>
              The Svper Ordinary family is getting excited and starting to prep for our next show Still Winter featuring new works by Paul Michel. Join us second Saturday in December for the opening reception from 6 -10 pm.
            </p>
          </div>
        </div>
        
        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c5e">
            <span class="date">Wednesday December 18th</span>
            CapRock - 
            Choreography and Cocktails
            <b class="toggler">+</b>
          </a>
          <div id="c5e" class="accordion-content collapse">
            <h4>CapRock Farm Bar</h4>
            <p>
              AN INVITATION TO A SHOWING PRESENTATION BY INTERNATIONAL CHOREOGRAPHER ROBERT SHER-MACHHERNDL.  EXPERIENCE WORLDCLASS PERFORMANCE AT THE SOURCE, A HIP REPURPOSED FOUNDRY IN DENVER.
            </p>
            <p>
              AWARD-WINNING EUROPEAN DANCERS SANDRINE CASSINI, FORMERLY OF PARIS OPERA BALLET,  
              MONTE-CARLO BALLET AND ROBERT SHER-MACHHERNDL CREATE AN EVENING OF 
              EUROPEAN SOPHISTICATION. 
            </p>
          </div>
        </div>

        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c6e">
            <span class="date">December 31st</span>
            The Source - 
            New Years Eve
            <b class="toggler">+</b>
          </a>
          <div id="c6e" class="accordion-content collapse">
            <h4>The Source</h4>
            <p>
              Count down the new year at The Source. With New Year's specials from many of our tenants and a Cocktails and Caviar event hosted at Caprock Farm Bar's central bar, you'll be starting out your 2014 right.
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
          <a href="{{ route('tenant.acorn') }}">acorn</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.american-provisions') }}">americanum provisions</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.babettes') }}">babettes</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.beet-yarrow') }}">beet & yarrow</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.boxcar') }}">boxcar coffee roasters</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.caprock') }}">caprock farm bar</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.collegiate-peaks-bank') }}">collegiate peaks bank</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.comida') }}">comida</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.crooked-stave') }}">crooked stave</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.meathead') }}">meathead</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.mondo-market') }}">mondo market</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.proper-pour') }}">the proper pour</a>
        </h1>
        <h1>
          <a href="{{ route('tenant.svperordinary') }}">svper ordinary</a>
        </h1>
      </div>{{--/container--}}

    </section>
    

    <section id="faq" class="page brand1-bg">
      <div class="container">
        <h1>faq</h1>

        <div id="faq-accordion" class="accordion">

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c1f">
              What is The Source?
              <b class="toggler">+</b>
            </a>
            <div id="c1f" class="accordion-content collapse">
              <p>
                The Source is a new generation urban market set in a former iron foundry that now houses a curated group of the most accomplished culinary tenants in the region. It aims to be a draw for the local community as well as out-of-town visitors who can experience the best of what this region has to offer in an elevated environment. The Source is where guests get a great cup of coffee in the morning, buy all the necessities for creating a meal- a great bread, specialty foods and cheeses, outstanding produce, the highest quality meat, and have the best dining experience whether in the casual setting of Comida or the modern American food of Acorn. It’s a community that offers not only great food but also flowers, beer from a brewer with a cult-like following, cocktails created with ingredients crafted on a Colorado biodynamic farm, and a bottle shop that strives to be the equivalent of the Tattered Cover bookstore for booze.
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c2f">
              Where are you located?
              <b class="toggler">+</b>
            </a>
            <div id="c2f" class="accordion-content collapse">
              <p>
                The Source is located at 3350 Brighton Boulevard in the River North neighborhood. Getting to the Source is easy: remember that Brighton Boulevard is simply a continuation of Broadway Boulevard - it switches at 31st.
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c3f">
              What inspired the Source?
              <b class="toggler">+</b>
            </a>
            <div id="c3f" class="accordion-content collapse">
              <p>
                First, the building - a sprawling 20,000 sf+ 1880s machine hall with 60' ceilings and natural light running through it. It was in a raw state, without layers of bad renovations. Our experience of discovery in walking into a space that took your breath away demanded that it become a public place. Great things to eat and drink are a universally appealing force that has the power help build communities and span demographic lines that divide people. We drew on new formats for urban markets that are springing up throughout the country that combine a curated selection of purveyors with a community place.  The goal wasn't to replicate any one but combine successful ideas and take advantage of the unique opportunities that existed here. The process was an organic one that drew on our network of relationships and involved talking to many times more people than we had spaces.
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c4f">
              Why is a building like that located in RiNo?
              <b class="toggler">+</b>
            </a>
            <div id="c4f" class="accordion-content collapse">
              <p>
                In 2001, Zeppelin Development moved its office to the Taxi campus in RiNo. The site was the former Yellow Cab terminal and our company began to redevelop it into creative office spaces. It started with the original Yellow Cab building (home to Fuel Cafe for the last 5 and a half years now). There are now six buildings at Taxi- over 80 businesses and 44 residences, two restaurants, a coffee shop, a hair salon, a pilates studio, and an early childhood education center. We quickly became committed to this neighborhood for its culture, one that supports a new generation of businesses and people. There is an increasing appetite here to be in urban places that are outside the mainstream. It has been our home for over a decade and we see it as the next frontier for the growth for creative and high tech businesses in Denver. Also, the RiNo Arts District is the fastest growing one in the city. Part of the draw to this area is the empty canvas that it represents -it is comprised mostly of old industrial buildings waiting to get a new life. The Source is now a major catalyst for Brighton Boulevard, the main RiNo street that is widely considered a gateway to Denver. 
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c5f">
              Who designed the market as it is today?
              <b class="toggler">+</b>
            </a>
            <div id="c5f" class="accordion-content collapse">
              <p>
                The architect that led the transformation is Stephen Dynia, of Stephen Dynia Architects in Jackson, Wyoming. Dynia has worked on several other award-winning Zeppelin Development projects. In creating the new space, Dynia was committed to preserving the character of the building, keeping the space open and visibility high, and not confusing old and new elements. The result is a solid old brick building that remained very much intact, layered with clear modern industrial elements that create the market space that it became. There is air and light flowing through the spaces and while each tenant has its own space, visibility is high into each of the individual units even when they are closed.
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c6f">
              Who are your tenants?
              <b class="toggler">+</b>
            </a>
            <div id="c6f" class="accordion-content collapse">
              <p>
                The tenants are two restaurants, a butcher, a baker, a produce purveyor, a florist, a coffee shop, a brewery, a distillery bar, a cheese shop, a gallery, a design store, a bank, and a bottle shop. A complete list is available in the tenant section, but what they do, the selection of crafts and offerings, is what the Source is about- a one stop shop for elevated food from all independent businesses. 
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c7f">
              How were tenants selected for the Source?
              <b class="toggler">+</b>
            </a>
            <div id="c7f" class="accordion-content collapse">
              <p>
                We talked to a lot of people, everyone who we knew had potential to be a good fit. It was a lot like dating- you meet, share life stories, find some common ground and from there the relationship evolves or doesn’t. We looked for people at the top of their field and started a conversation. Some of the best things about the project are the deals that did not work because they allowed us to keep searching for the best fit. The tenants in the Source are not only great at what they do, they also share the main vision for the Source - building a community and understand our vision for this project and its role in the RiNo neighborhood.
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c8f">
              Can I work at the Source?
              <b class="toggler">+</b>
            </a>
            <div id="c8f" class="accordion-content collapse">
              <p>
                The odds are yes, but you will need to do some scouting on your own. Each business at the Source operates independently and does its own hiring. Think about where you see yourself working and contact them directly -- or visit them in person with a resume.
              </p>
            </div>
          </div>

          <div class="panel source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#faq-accordion" href="#c9f">
              Can I host my next event at the Source?
              <b class="toggler">+</b>
            </a>
            <div id="c9f" class="accordion-content collapse">
              <p>
                Yes. Both restaurants, Acorn and Comida, as well as the CapRock Farm Bar and the brewery, Crooked Stave, are open to hosting private events. Because each is an independent business, the best way to go about hosting an event there is to contact them directly and discuss your vision for the event.
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
  /**
   * Calc Parallax Helper
   */
  function calcParallax(tileheight, speedratio, scrollposition) {
    return ((tileheight) - (Math.floor(scrollposition / speedratio) % (tileheight+1)));
  }


  //doc ready
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


    /**
     * Toggle Nav on click (responsive)
     */
    var mainNav = $('#nav');
    $('a', mainNav).on('click', function(){
      $('.navbar-collapse').collapse('hide');
    });



    /**
     * Affix FAQ section
     */
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



    /**
     * Tenant Sub Sections
     */
    var tenantSection = $('#tenants');

    $('[data-toggle="tenant-page"]').on('click', function(e){
      e.preventDefault();

      var
        self    = $(this),
        target  = self.attr('href'),
        $target = $(target)
      ;

      // $('html, body').scrollTop( $('#tenants').offset().top - 77 );

      $target.add(tenantSection).addClass('active');
      
      return false;
    });

    $('[data-toggle="tenant-page-off"]').on('click', function(e){
      e.preventDefault();
      $('.tenant-sub-page', tenantSection).add(tenantSection).removeClass('active');
      return false;
    });




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
          var
            target = $(e.target),
            toggle = target.parent()
          ;

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
  });//end doc ready
  </script>
@stop