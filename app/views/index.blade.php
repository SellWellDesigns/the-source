
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Theme Template for Bootstrap</title>

    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="row">
        <img class="logo pull-right" src="{{ asset('img/logo-primary.jpg') }}" />
      </div>

      <div class="row">
        <address class="pull-right">
          3350 Brighton Blvd<br />
          Denver, CO 80216
        </address>
      </div>

      <p>&nbsp;</p>
      <p>&nbsp;</p>

      <hr />

      <p class="lead">
        Welcome to The Source, a highly-anticipated artisan food market that occupies a former
        1880‘s brick foundry building on Brighton Boulevard in Denver’s River North <abbr title="River North">(RiNo)</abbr> 
        District. More than two years in planning, The Source has become a collective of food 
        artisans offering visitors everything from freshly baked bread to craft cocktails, from 
        street tacos to contemporary flower arrangements.
      </p>

      <hr />

      <div class="row">
        <div class="col-lg-6">
          <p>
            Among The Source’s 15 tenants are Acorn, a wood-fired restaurant and cocktail bar 
            owned by the team behind Oak at Fourteenth; Comida, a modern Mexican taqueria; 
            CapRock Farm Bar, a crafted cocktail and juice bar; and Babette’s Artisan Breads, a 
            traditional French bakery. In the Commissary Space of the building are MeatHead, a 
            butcher; Americanum Provisions, a specialty produce market; and floral shop Beet & 
            Yarrow. Tenants also include Super Ordinary Gallery, a design store and exhibit space; 
            the Proper Pour, an independent wine and spirits bottle shop, and Crooked Stave 
            Artisan Beer Project, a cultish brewery specializing in funky and sour beers. Also setting 
            up shop at The Source are Boulder-based Boxcar Coffee Roasters and Mondo Market, 
            a cheese, spice, and specialty food store.
          </p>
        </div>
        <div class="col-lg-6">
          <p>
            The Source offers a one-stop shopping experience for the food-obsessed while also 
            providing some of Denver’s best artisans with an outlet for their crafts. The openness 
            of the building speaks to its community-oriented philosophy. It was repurposed under 
            the guidance of architect Stephen Dynia with a strong commitment to preserving its 
            industrial identity while adapting it for its current use. The industrial design with clear 
            layers of new materials complementing the original shell conveys the integrity and 
            edginess both of the tenants themselves and of this new marketplace.
          </p>
        </div>
      </div>

      <hr />

      <div class="row">
        <div id="source-vendors">
          <img src="{{ asset('img/Boxcar_7.jpg') }}" />
          <img src="{{ asset('img/CrookedStave_2.jpg') }}" />
          <img src="{{ asset('img/Mondo_3.jpg') }}" />
          <img src="{{ asset('img/Oak_2.jpg') }}" />
          <img src="{{ asset('img/Mondo_3.jpg') }}" />
          <img src="{{ asset('img/Boxcar_7.jpg') }}" />
          <img src="{{ asset('img/CrookedStave_2.jpg') }}" />
          <img src="{{ asset('img/Oak_2.jpg') }}" />
          <img src="{{ asset('img/CrookedStave_2.jpg') }}" />
          <img src="{{ asset('img/Boxcar_7.jpg') }}" />
          <img src="{{ asset('img/Oak_2.jpg') }}" />
          <img src="{{ asset('img/Mondo_3.jpg') }}" />
        </div>
      </div>

    </div>
    
    <footer id="footer" class="clearfix">
      <img class="logo pull-right" src="{{ asset('img/logo-primary.jpg') }}" />
    </footer>
    
  </body>
</html>
