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
            <a class="btn btn-info btn-lg" href="mailto:info@thesourcedenver.com">
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
          <a href="#tenant-acorn" data-toggle="tenant-page">acorn</a>
        </h1>
        <h1>
          <a href="#tenant-boxcar" data-toggle="tenant-page">boxcar coffee roasters</a>
        </h1>
        <h1>
          <a href="#tenant-comida" data-toggle="tenant-page">comida</a>
        </h1>
        <h1>
          <a href="#tenant-caprock" data-toggle="tenant-page">caprock farm bar</a>
        </h1>
        <h1>
          <a href="#tenant-babettes" data-toggle="tenant-page">babette's</a>
        </h1>
        <h1>
          <a href="#tenant-meathead" data-toggle="tenant-page">meathead</a>
        </h1>
        <h1>
          <a href="#tenant-american-provisions" data-toggle="tenant-page">american provisions</a>
        </h1>
        <h1>
          <a href="#tenant-beet-yarrow" data-toggle="tenant-page">beet & yarrow</a>
        </h1>
        <h1>
          <a href="#tenant-mondo-market" data-toggle="tenant-page">mondo market</a>
        </h1>
        <h1>
          <a href="#tenant-proper-pour" data-toggle="tenant-page">proper pour</a>
        </h1>
        <h1>
          <a href="#tenant-crooked-stave" data-toggle="tenant-page">crooked stave</a>
        </h1>
      </div>
      
      <div id="tenant-acorn" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Acorn is the sister restaurant to Boulder’s OAK at Fourteenth. The rustic yet refined eatery will serve chef Steven Redzikowski’s eclectic New American cooking in an approachable format at The Source. Much like OAK, at the core of Acorn’s dishes will be the oak-fired oven and grill. Complimenting a seasonal menu created with a commitment to locally-sourced ingredients will be Acorn’s elevated cocktail program and small-batch beer and wine list. In addition to the main floor dining room, guests can take a seat at the 15-seat bar opposite the open kitchen or dine in the 30-seat mezzanine space which overlooks the kitchen and chef's counter and offers spectacular views of the mountains. Cement and graffiti accents and Emeco seating made from recycled Coca Cola bottles, give the space an urban, eclectic feel, while the marble tabletops, leather banquettes and well-appointed lighting provide an elegant counterpoint.</p>
              <p>
                <a href="http://www.denveracorn.com/">http://www.denveracorn.com/</a><br />
                <a href="https://www.facebook.com/denveracorn">https://www.facebook.com/denveracorn</a><br />
                <a href="https://twitter.com/acorn_Denver">https://twitter.com/acorn_Denver</a>
              </p>
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Acorn</h1>
          </div>
        </div>
      </div>

      <div id="tenant-boxcar" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Boxcar Coffee Roasters is a Boulder-based roaster and coffee shop that opened its first location in Boulder two years ago. A Denver outpost was recently opened on the TAXI campus in DRIVE, where Boxcar shares a large lobby area with ReFuel, a casual sandwich shop. The Source will become home to Boxcar’s roaster and another outlet for its specialty brewed coffee drinks.</p>
              <p>
              Boxcar coffee is roasted in small batches using a vintage roaster that was built in Germany in 1929. For some of the specialty coffee drinks, baristas boil ground beans long enough to extract exact flavor, then clarify with ice cubes and strain into mugs— this cowboy coffee method of preparation improves temperature control, counteracts high elevation, and makes for a perfect cup of java.</p>

              http://boxcarcoffeeroasters.com 
              https://twitter.com/boxcarcoffee 
              https://www.facebook.com/boxcarcoffee
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Boxcar Coffee Roasters</h1>
          </div>
        </div>
      </div>

      <div id="tenant-comida" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Comida, a taco truck turned Longmont cantina owned by Rayme Rossello, serves Mexican street food influenced by Rossello’s Southern upbringing. The hot pink truck, named Tina, started roaming the Front Range in 2010. Rossello opened the brick and mortar Comida Cantina in Longmont in 2012.</p>
              <p>The new Comida location in The Source is a bigger version of its Longmont sister with a large patio and a mezzanine for group gatherings. Chef Martin Campos will serve Comida’s staple dishes while experimenting with local ingredients for specials. A well-executed dessert menu by an in-house pastry chef features a rotating arsenal of cookies and ice creams. The bar pours a well-curated selection of wine and beer, and offers a tequila and whiskey-dominant spirits list.</p>

              http://www.eatcomida.com
              https://twitter.com/eatcomida
              https://www.facebook.com/eatcomida/info 
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Comida</h1>
          </div>
        </div>
      </div>

      <div id="tenant-caprock" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>CapRock Farm Bar, named after Peak Spirits’ well-known gin and other spirits, gives visitors at The Source a taste of the Jack Rabbit Hill farm, winery, and distillery, located in Hotchkiss, Colorado in the North Fork Valley. The new bar will serve fresh, handmade orchard juices and crafted cocktails that showcase the brand. Fun fact: the CapRock name comes from a rock formation nearby that makes up the top lakes of Grand Mesa.</p>
              <p>In addition to craft cocktails, visitors at the Farm Bar can purchase full bottles of Peak Sprits’ products, including peach and pear eau de vie, CapRock gin (distilled from apples), vodka, and grappa (distilled from their estate grapes). Peak Spirits are all distilled with local fruit and cut with untreated natural spring water.</p>

              https://www.facebook.com/CapRockFarmBar
              http://peakspirits.com/
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Caprock Farm Bar</h1>
          </div>
        </div>
      </div>

      <div id="tenant-babettes" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Babette’s Artisan Breads is a traditional French bakery created by artisan baker Steve Scott. In addition to crafting and selling a variety of healthful breads, brioche, and croissants baked with organic grains, Scott, a natural teacher, plans to hire staff who seek baking apprenticeships. He’s passionate about passing on traditional French techniques to the next generation of bakers.</p>

              http://babettebread.com/
              https://www.facebook.com/babettesartisanbreads
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Babette's</h1>
          </div>
        </div>
      </div>

      <div id="tenant-meathead" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>MeatHead is the in-house butcher at The Source with a bit of comedy and traditional flair. Owner Kevin Klinger comes from a long line of butchers and learned his trade the traditional way, by doing it for over three decades. Beef hanging on hooks, not in plastic or in a box, chicken fresh from the farm and a real connection to the trade is what this meat counter will be about. MeatHead aims to be a traditional and vert transparent butcher shop.</p>
              <p>MeatHead will source its ethically and humanely raised and processed meats from suppliers like Four Sisters Farm and Tender Belly.</p>

              https://www.facebook.com/meatheadsource
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Meathead</h1>
          </div>
        </div>
      </div>

      <div id="tenant-american-provisions" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Americanum Provisions is an ingredient-driven and food-community focused grocer. It’s a celebration of urban farmers. The shop features American-made, utilitarian kitchen consignments and food products, most of which are sourced within 10 miles of The Source. This produce-forward market sells fruit and vegetables from Produce Denver, The GrowHaus, and The Squeaky Bean’s Bean Acre Farm, among many others.</p>
              <p>The utilitarian aesthetic of the store reminds shoppers of the humble produce retailers of the early 20th century. The Source’s urban feel combined with the freshness of Americanum’s products represents this vendor’s commitment to creating connections between urban and rural agriculture.</p>

              http://americanumprovisions.com 
              https://www.facebook.com/AmericanumProvisions
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>American Provisions</h1>
          </div>
        </div>
      </div>

      <div id="tenant-beet-yarrow" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Beet & Yarrow is a floral shop dedicated to the sustainable sourcing of floral products— using seasonal materials, ethically and environmentally grown and farmed flowers, and foraging— without sacrificing design.</p>

              https://www.facebook.com/BeetandYarrow 
              http://www.beetandyarrow.com/
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Beet & Yarrow</h1>
          </div>
        </div>
      </div>

      <div id="tenant-mondo-market" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Mondo Market is a cheese and spice shop that will be both a fulfillment center and a retail outlet for MondoFood.com, a website dedicated to bringing hard-to-find ingredients primarily available to chefs to the everyday consumer. The website offers an extensive selection of specialty salts, oils, vinegars, artisan cheeses and dry cured meats, spices, meat and seafood, pantry items, confections and many gourmet and gastronomical retail items. Mondo Market in The Source will offer an array of both local and imported items and serve freshly made deli sandwiches.</p>

              http://www.mondofood.com 
              https://www.facebook.com/pages/MondoFoodcom 
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Mondo Market</h1>
          </div>
        </div>
      </div>

      <div id="tenant-proper-pour" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Proper Pour is a specialty bottle shop that features small-batch spirits, independently-produced wines, and a curated selection of craft beer. Proper Pour is much more than just a liquor store, also offering carefully selected glassware, bar tools, cocktail books, and other items like bitters and aperitifs. Proper Pour is designing DIY cocktail kits that include all of the makings for individual drinks. The shop will highlight local distilleries and wineries, and sell many imported bottles as well.</p>

              https://www.facebook.com/properpour 
              http://www.theproperpour.com/
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Proper Pour</h1>
          </div>
        </div>
      </div>

      <div id="tenant-crooked-stave" class="tenant-sub-page">
        <div class="row full-height relative">
          <div class="col-lg-6 full-height relative">
            <a class="tenant-back-button" href="#tenants" data-toggle="tenant-page-off" data-scroll="true">
              <i class="icon-chevron-sign-left"></i>
            </a>
            <div class="well">
              <p>Crooked Stave Artisans is a brewery focused on Belgian sour beers with a cult-like following in Denver and beyond. Launched in 2011 in Fort Collins, the company’s wine-forward, barrel-aged beers were first brewed onsite at Funkwerks. A year later, Crooked Stave relocated to its barrel-house in Denver and brewed at nearby Prost Brewing. Finally, Crooked Stave will have a real home to brew at The Source in a 20-barrel brewhouse.</p>
              <p>In the new taproom, Crooked Stave’s followers will be able to enjoy signature beers, like the dry-hopped barrel-aged saison Vielle and the Belgian-inspired white beer St. Bretta, as well as a menu of ever-changing taps.</p>

              http://www.crookedstave.com
              https://www.facebook.com/CSArtisans 
            </div>
          </div>
          <div class="col-lg-6 full-height relative">
            <h1>Crooked Stave</h1>
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