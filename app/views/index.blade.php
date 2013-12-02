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
- a collective of food artisans offering visitors everything from freshly baked bread to craft cocktails, from street tacos to contemporary flower arrangements.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-4 col-md-8">
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
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c1e">
            <span class="date">Saturday November 30th</span>
            Small Business Saturday
            <b class="toggler">+</b>
          </a>
          <div id="c1e" class="accordion-content collapse">
            <h4>The Source</h4>
            <p>
              Forget the Black Friday rush and do your holiday shopping at The Source. Stop by SVPER ORDINARY gallery to pick up everything from art, to jewelry and one-of-a-kinda house wares Open from 11 am - 8 pm daily.
            </p>
            <p>
              If Drinks are more what you are what you are looking for check out Proper Pour for a expertly curated collection of beer, wine and spirits from around the world. Open 10 am daily except Monday when they open at 5 pm
            </p>
          </div>
        </div>

        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c3e">
            <span class="date">Sunday December 8th</span>
            Guest Bartender Sunday
            <b class="toggler">+</b>
          </a>
          <div id="c3e" class="accordion-content collapse">
            <p>
              Come out each and every sunday to catch drinks from some of Colorado's best bartenders and Caprock. Starting at 5:00 pm and running til close we will have drink specials each and every week. 
            </p>
          </div>
        </div>
        
        <div class="source-accordion">
          <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c2e">
            <span class="date">Wednesday December 18th</span>
            Choreography and Cocktails
            <b class="toggler">+</b>
          </a>
          <div id="c2e" class="accordion-content collapse">
            <h4>Caprock Farm Bar</h4>
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
          <a href="#tenant-american-provisions" data-toggle="tenant-page">american provisions</a>
        </h1>
        <h1>
          <a href="#tenant-babettes" data-toggle="tenant-page">babette's</a>
        </h1>
        <h1>
          <a href="#tenant-beet-yarrow" data-toggle="tenant-page">beet & yarrow</a>
        </h1>
        <h1>
          <a href="#tenant-boxcar" data-toggle="tenant-page">boxcar coffee roasters</a>
        </h1>
        <h1>
          <a href="#tenant-caprock" data-toggle="tenant-page">caprock farm bar</a>
        </h1>
        <h1>
          <a href="#tenant-collegiate-peaks-bank" data-toggle="tenant-page">collegiate peaks bank</a>
        </h1>
        <h1>
          <a href="#tenant-comida" data-toggle="tenant-page">comida</a>
        </h1>
        <h1>
          <a href="#tenant-crooked-stave" data-toggle="tenant-page">crooked stave</a>
        </h1>
        <h1>
          <a href="#tenant-meathead" data-toggle="tenant-page">meathead</a>
        </h1>
        <h1>
          <a href="#tenant-mondo-market" data-toggle="tenant-page">mondo market</a>
        </h1>
        <h1>
          <a href="#tenant-proper-pour" data-toggle="tenant-page">proper pour</a>
        </h1>
        <h1>
          <a href="#tenant-svperordinary" data-toggle="tenant-page">svper ordinary</a>
        </h1>
      
      
        <div id="tenant-acorn" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Acorn is the sister restaurant to Boulder’s OAK at Fourteenth. The rustic yet refined eatery will serve chef Steven Redzikowski’s eclectic New American cooking in an approachable format at The Source. Much like OAK, at the core of Acorn’s dishes will be the oak-fired oven and grill. Complimenting a seasonal menu created with a commitment to locally-sourced ingredients will be Acorn’s elevated cocktail program and small-batch beer and wine list. In addition to the main floor dining room, guests can take a seat at the 15-seat bar opposite the open kitchen or dine in the 30-seat mezzanine space which overlooks the kitchen and chef's counter and offers spectacular views of the mountains. Cement and graffiti accents and Emeco seating made from recycled Coca Cola bottles, give the space an urban, eclectic feel, while the marble tabletops, leather banquettes and well-appointed lighting provide an elegant counterpoint.</p>
                
                <p>
                  <a class="btn btn-lg" href="http://www.denveracorn.com/" title="http://www.denveracorn.com/">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/denveracorn">
                    <i class="icon-facebook"></i>
                  </a>
                  <a class="btn btn-lg" href="https://twitter.com/acorn_Denver">
                    <i class="icon-twitter"></i>
                  </a>
                </p>
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1>Acorn</h1>
            </div>
          </div>
        </div>

        <div id="tenant-svperordinary" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Acorn is the sister restaurant to Boulder’s OAK at Fourteenth. The rustic yet refined eatery will serve chef Steven Redzikowski’s eclectic New American cooking in an approachable format at The Source. Much like OAK, at the core of Acorn’s dishes will be the oak-fired oven and grill. Complimenting a seasonal menu created with a commitment to locally-sourced ingredients will be Acorn’s elevated cocktail program and small-batch beer and wine list. In addition to the main floor dining room, guests can take a seat at the 15-seat bar opposite the open kitchen or dine in the 30-seat mezzanine space which overlooks the kitchen and chef's counter and offers spectacular views of the mountains. Cement and graffiti accents and Emeco seating made from recycled Coca Cola bottles, give the space an urban, eclectic feel, while the marble tabletops, leather banquettes and well-appointed lighting provide an elegant counterpoint.</p>
                
                <p>
                  <a class="btn btn-lg" href="http://www.denveracorn.com/" title="http://www.denveracorn.com/">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/denveracorn">
                    <i class="icon-facebook"></i>
                  </a>
                  <a class="btn btn-lg" href="https://twitter.com/acorn_Denver">
                    <i class="icon-twitter"></i>
                  </a>
                </p>
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1>svper ordinary</h1>
            </div>
          </div>
        </div>

        <div id="tenant-boxcar" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Boxcar Coffee Roasters is a Boulder-based roaster and coffee shop that opened its first location in Boulder two years ago. A Denver outpost was recently opened on the TAXI campus in DRIVE, where Boxcar shares a large lobby area with ReFuel, a casual sandwich shop. The Source will become home to Boxcar’s roaster and another outlet for its specialty brewed coffee drinks.</p>
                <p>
                Boxcar coffee is roasted in small batches using a vintage roaster that was built in Germany in 1929. For some of the specialty coffee drinks, baristas boil ground beans long enough to extract exact flavor, then clarify with ice cubes and strain into mugs— this cowboy coffee method of preparation improves temperature control, counteracts high elevation, and makes for a perfect cup of java.</p>

                <p>
                  <a class="btn btn-lg" href="http://boxcarcoffeeroasters.com" title="http://boxcarcoffeeroasters.com">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/boxcarcoffee">
                    <i class="icon-facebook"></i>
                  </a>
                  <a class="btn btn-lg" href="https://twitter.com/boxcarcoffee">
                    <i class="icon-twitter"></i>
                  </a>
                </p>
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1 class="brand2">Boxcar Coffee Roasters</h1>
            </div>
          </div>
        </div>

        <div id="tenant-comida" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Comida, a taco truck turned Longmont cantina owned by Rayme Rossello, serves Mexican street food influenced by Rossello’s Southern upbringing. The hot pink truck, named Tina, started roaming the Front Range in 2010. Rossello opened the brick and mortar Comida Cantina in Longmont in 2012.</p>
                <p>The new Comida location in The Source is a bigger version of its Longmont sister with a large patio and a mezzanine for group gatherings. Chef Martin Campos will serve Comida’s staple dishes while experimenting with local ingredients for specials. A well-executed dessert menu by an in-house pastry chef features a rotating arsenal of cookies and ice creams. The bar pours a well-curated selection of wine and beer, and offers a tequila and whiskey-dominant spirits list.</p>

                <p>
                  <a class="btn btn-lg" href="http://www.eatcomida.com" title="http://www.eatcomida.com">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/eatcomida/info">
                    <i class="icon-facebook"></i>
                  </a>
                  <a class="btn btn-lg" href="https://twitter.com/eatcomida">
                    <i class="icon-twitter"></i>
                  </a>
                </p> 
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1 class="brand2">Comida</h1>
            </div>
          </div>
        </div>

        <div id="tenant-caprock" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>CapRock Farm Bar, named after Peak Spirits’ well-known gin and other spirits, gives visitors at The Source a taste of the Jack Rabbit Hill farm, winery, and distillery, located in Hotchkiss, Colorado in the North Fork Valley. The new bar will serve fresh, handmade orchard juices and crafted cocktails that showcase the brand. Fun fact: the CapRock name comes from a rock formation nearby that makes up the top lakes of Grand Mesa.</p>
                <p>In addition to craft cocktails, visitors at the Farm Bar can purchase full bottles of Peak Sprits’ products, including peach and pear eau de vie, CapRock gin (distilled from apples), vodka, and grappa (distilled from their estate grapes). Peak Spirits are all distilled with local fruit and cut with untreated natural spring water.</p>

                <p>
                  <a class="btn btn-lg" href="http://peakspirits.com/" title="http://peakspirits.com/">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/CapRockFarmBar">
                    <i class="icon-facebook"></i>
                  </a>
                </p> 
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1>Caprock Farm Bar</h1>
            </div>
          </div>
        </div>

        <div id="tenant-collegiate-peaks-bank" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Collegiate Peaks Bank is the first full-service community bank to open in RiNo and gives Collegiate Peaks the ability to serve the influx of a new generation of businesses and residents in the emerging neighborhood. The bank provides financing for residential and commercial construction, revolving lines of credit for businesses and individuals, acquisition and development loans, commercial and industrial accounts receivable and inventory loans, equipment loans,small-business loans and a 24 hour ATM.</p>

                <p>
                  <a class="btn btn-lg" href="https://www.collegiatepeaksbank.com/" title="https://www.collegiatepeaksbank.com/">
                    <i class="icon-globe"></i>
                  </a>
                </p> 
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1>Collegiate Peaks Bank</h1>
            </div>
          </div>
        </div>

        <div id="tenant-babettes" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Babette’s Artisan Breads is a traditional French bakery created by artisan baker Steve Scott. In addition to crafting and selling a variety of healthful breads, brioche, and croissants baked with organic grains, Scott, a natural teacher, plans to hire staff who seek baking apprenticeships. He’s passionate about passing on traditional French techniques to the next generation of bakers.</p>

                <p>
                  <a class="btn btn-lg" href="http://babettebread.com/" title="http://babettebread.com/">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/babettesartisanbreads">
                    <i class="icon-facebook"></i>
                  </a>
                </p> 
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
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>MeatHead is the in-house butcher at The Source with a bit of comedy and traditional flair. Owner Kevin Klinger comes from a long line of butchers and learned his trade the traditional way, by doing it for over three decades. Beef hanging on hooks, not in plastic or in a box, chicken fresh from the farm and a real connection to the trade is what this meat counter will be about. MeatHead aims to be a traditional and vert transparent butcher shop.</p>
                <p>MeatHead will source its ethically and humanely raised and processed meats from suppliers like Four Sisters Farm and Tender Belly.</p>

                <p>
                  <a class="btn btn-lg" href="https://www.facebook.com/meatheadsource">
                    <i class="icon-facebook"></i>
                  </a>
                </p> 
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
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Americanum Provisions is an ingredient-driven and food-community focused grocer. It’s a celebration of urban farmers. The shop features American-made, utilitarian kitchen consignments and food products, most of which are sourced within 10 miles of The Source. This produce-forward market sells fruit and vegetables from Produce Denver, The GrowHaus, and The Squeaky Bean’s Bean Acre Farm, among many others.</p>
                <p>The utilitarian aesthetic of the store reminds shoppers of the humble produce retailers of the early 20th century. The Source’s urban feel combined with the freshness of Americanum’s products represents this vendor’s commitment to creating connections between urban and rural agriculture.</p>

                <p>
                  <a class="btn btn-lg" href="http://americanumprovisions.com" title="http://americanumprovisions.com">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/AmericanumProvisions">
                    <i class="icon-facebook"></i>
                  </a>
                </p> 
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1 class="brand2">American Provisions</h1>
            </div>
          </div>
        </div>

        <div id="tenant-beet-yarrow" class="tenant-sub-page">
          <div class="row full-height relative">
            <div class="col-lg-6 full-height relative">
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Beet & Yarrow is a floral shop dedicated to the sustainable sourcing of floral products— using seasonal materials, ethically and environmentally grown and farmed flowers, and foraging— without sacrificing design.</p>

                <p>
                  <a class="btn btn-lg" href="http://www.beetandyarrow.com/" title="http://www.beetandyarrow.com/">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/BeetandYarrow">
                    <i class="icon-facebook"></i>
                  </a>
                </p> 
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
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Mondo Market is a cheese and spice shop that will be both a fulfillment center and a retail outlet for MondoFood.com, a website dedicated to bringing hard-to-find ingredients primarily available to chefs to the everyday consumer. The website offers an extensive selection of specialty salts, oils, vinegars, artisan cheeses and dry cured meats, spices, meat and seafood, pantry items, confections and many gourmet and gastronomical retail items. Mondo Market in The Source will offer an array of both local and imported items and serve freshly made deli sandwiches.</p>

                <p>
                  <a class="btn btn-lg" href="http://www.mondofood.com" title="http://www.mondofood.com">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/pages/MondoFoodcom">
                    <i class="icon-facebook"></i>
                  </a>
                </p>
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
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Proper Pour is a specialty bottle shop that features small-batch spirits, independently-produced wines, and a curated selection of craft beer. Proper Pour is much more than just a liquor store, also offering carefully selected glassware, bar tools, cocktail books, and other items like bitters and aperitifs. Proper Pour is designing DIY cocktail kits that include all of the makings for individual drinks. The shop will highlight local distilleries and wineries, and sell many imported bottles as well.</p>

                <p>
                  <a class="btn btn-lg" href="http://www.theproperpour.com/" title="http://www.theproperpour.com/">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/properpour">
                    <i class="icon-facebook"></i>
                  </a>
                </p>
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
              <a class="tenant-back-button" href="#" data-target="#tenants" data-toggle="tenant-page-off">
                <i class="icon-chevron-sign-left"></i>
              </a>
              <div class="well">
                <p>Crooked Stave Artisans is a brewery focused on Belgian sour beers with a cult-like following in Denver and beyond. Launched in 2011 in Fort Collins, the company’s wine-forward, barrel-aged beers were first brewed onsite at Funkwerks. A year later, Crooked Stave relocated to its barrel-house in Denver and brewed at nearby Prost Brewing. Finally, Crooked Stave will have a real home to brew at The Source in a 20-barrel brewhouse.</p>
                <p>In the new taproom, Crooked Stave’s followers will be able to enjoy signature beers, like the dry-hopped barrel-aged saison Vielle and the Belgian-inspired white beer St. Bretta, as well as a menu of ever-changing taps.</p>

                <p>
                  <a class="btn btn-lg" href="http://www.crookedstave.com" title="http://www.crookedstave.com">
                    <i class="icon-globe"></i>
                  </a>
                  <a class="btn btn-lg" href="https://www.facebook.com/CSArtisans">
                    <i class="icon-facebook"></i>
                  </a>
                </p> 
              </div>
            </div>
            <div class="col-lg-6 full-height relative">
              <h1>Crooked Stave</h1>
            </div>
          </div>
        </div>

      </div>{{--/container--}}

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
                The Source is a new generation urban market set in a former iron foundry that now houses a curated group of the most accomplished culinary tenants in the region. It aims to be a draw for the local community as well as out-of-town visitors who can experience the best of what this region has to offer in an elevated environment. The Source is where guests get a great cup of coffee in the morning, buy all the necessities for creating a meal- a great bread, specialty foods and cheeses, outstanding produce, the highest quality meat, and have the best dining experience whether in the casual setting of Comida or the modern American food of Acorn. It’s a community that offers not only great food but also flowers, beer from a brewer with a cult-like following, cocktails created with ingredients crafted on a Colorado biodynamic farm, and a bottle shop that strives to be the equivalent of the Tattered Cover bookstore for booze.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c2f">
              Where are you located?
              <b class="toggler">+</b>
            </a>
            <div id="c2f" class="accordion-content collapse">
              <p>
                The Source is located at 3350 Brighton Boulevard in the River North neighborhood. Getting to the Source is easy: remember that Brighton Boulevard is simply a continuation of Broadway Boulevard - it switches at 31st.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c3f">
              What inspired the Source?
              <b class="toggler">+</b>
            </a>
            <div id="c3f" class="accordion-content collapse">
              <p>
                First, the building - a sprawling 20,000 sf+ 1880s machine hall with 60' ceilings and natural light running through it. It was in a raw state, without layers of bad renovations. Our experience of discovery in walking into a space that took your breath away demanded that it become a public place. Great things to eat and drink are a universally appealing force that has the power help build communities and span demographic lines that divide people. We drew on new formats for urban markets that are springing up throughout the country that combine a curated selection of purveyors with a community place.  The goal wasn't to replicate any one but combine successful ideas and take advantage of the unique opportunities that existed here. The process was an organic one that drew on our network of relationships and involved talking to many times more people than we had spaces.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c4f">
              Why is a building like that located in RiNo?
              <b class="toggler">+</b>
            </a>
            <div id="c4f" class="accordion-content collapse">
              <p>
                Zeppelin Development has moved its office in RiNo, on the Taxi campus, in 2001. The site was the former Yellow Cab terminal and our company began to redevelop it into creative office spaces. It started with the original Yellow Cab building (home to Fuel Cafe for the last 5 and a half years now). There are now six buildings at Taxi- over 80 businesses and 44 residences, two restaurants, a coffee shop, a hair salon, a pilates studio, and an early childhood education center. We quickly became committed to this neighborhood for its culture, one that supports a new generation of businesses and people. There is an increasing appetite here to be in urban places that are outside the mainstream. It has been our home for over a decade and we see it as the next frontier for the growth for creative and high tech businesses in Denver. Also, the RiNo Arts District is the fastest growing one in the city. Part of the draw to this area is the empty canvas that it represents -it is comprised mostly of old industrial buildings waiting to get a new life. The Source is now a major catalyst for Brighton Boulevard, the main RiNo street that is widely considered a gateway to Denver. 
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c5f">
              Who designed the market as it is today?
              <b class="toggler">+</b>
            </a>
            <div id="c5f" class="accordion-content collapse">
              <p>
                The architect that led the transformation is Stephen Dynia, of Stephen Dynia Architects in Jackson, Wyoming. Dynia has worked on several other award-winning Zeppelin Development projects. In creating the new space, Dynia was committed to preserving the character of the building, keeping the space open and visibility high, and not confusing old and new elements. The result is a solid old brick building that remained very much intact, layered with clear modern industrial elements that create the market space that it became. There is air and light flowing through the spaces and while each tenant has its own space, visibility is high into each of the individual units even when they are closed.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c6f">
              Who are your tenants?
              <b class="toggler">+</b>
            </a>
            <div id="c6f" class="accordion-content collapse">
              <p>
                The tenants are two restaurants, a butcher, a baker, a produce purveyor, a florist, a coffee shop, a brewery, a distillery bar, a cheese shop, and a bottle shop. A complete list is available in the tenant section, but what they do, the selection of crafts and offerings, is what the Source is about- a one stop shop for elevated food from all independent businesses. 
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c7f">
              How were tenants selected for the Source?
              <b class="toggler">+</b>
            </a>
            <div id="c7f" class="accordion-content collapse">
              <p>
                We talked to a lot of people, everyone who we knew had potential to be a good fit. It was a lot like dating- you meet, share life stories, find some common ground and from there the relationship evolves or doesn’t. We looked for people at the top of their field and started a conversation. Some of the best things about the project are the deals that did not work because they allowed us to keep searching for the best fit. The tenants in the Source are not only great at what they do, they also share the main vision for the Source - building a community and understand our vision for this project and its role in the RiNo neighborhood.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c8f">
              Can I work at the Source?
              <b class="toggler">+</b>
            </a>
            <div id="c8f" class="accordion-content collapse">
              <p>
                The odds are yes, but you will need to do some scouting on your own. Each business at the Source operates independently and does its own hiring. Think about where you see yourself working and contact them directly -- or visit them in person with a resume.
              </p>
            </div>
          </div>

          <div class="source-accordion">
            <a class="accordion-heading" data-toggle="collapse" data-parent="#events-accordion" href="#c9f">
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
  });//end doc ready
  </script>
@stop