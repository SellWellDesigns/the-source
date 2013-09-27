
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Theme Template for Bootstrap</title>

    <link href="{{ asset('css/site2.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="navbar navbar-default navbar-fixed-top">

      <div class="container">

        <div class="navbar-header pull-right">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img class="logo" src="{{ asset('img/logo-primary.jpg') }}" />
          </a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li class="dropdown">
              <a href="#vendors" class="dropdown-toggle" data-toggle="dropdown">Vendors <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Crooked Stave</a></li>
                <li><a href="#">Oak</a></li>
                <li><a href="#">Mondo</a></li>
              </ul>
            </li>
            <li><a href="#events">Events</a></li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>

    </div>
    
    <section id="welcome" class="page">
    
    </section>

    <section id="about" class="page">
      <table class="vertical-align-table">
        <tr>
          <td>
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <h1>The Source</h1>
                  <h3>Guide Book</h3>

                  <p class="lead">
                    Welcome to The Source, a highly-anticipated artisan food market that occupies a former
                    1880‘s brick foundry building on Brighton Boulevard in Denver’s River North <abbr title="River North">(RiNo)</abbr> 
                    District. More than two years in planning, The Source has become a collective of food 
                    artisans offering visitors everything from freshly baked bread to craft cocktails, from 
                    street tacos to contemporary flower arrangements.
                  </p>

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
                <div class="col-lg-4">
                  <img src="{{ asset('img/the-source-front.jpg') }}" />
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </section>

    <section id="vendors" class="page">
      <table class="vertical-align-table">
        <tr>
          <td>
            <div class="container">
              <h1>Vendors</h1>
            </div>

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

          </td>
        </tr>
      </table>
    </section>

    <section id="events" class="page">
      <table class="vertical-align-table">
        <tr>
          <td>
            <div class="container">

              <h1>Events</h1>

              <div class="row">
                <div class="col-lg-4">
                  <h1>{{ date('d') }}</h1>
                </div>
                <div class="col-lg-8">

                </div>
              </div>

            </div>
          </td>
        </tr>
      </table>
    </section>

    <footer id="footer">
      <div class="container">
        &copy; {{ date('Y') }} The Source
      </div>
    </footer>
    
  </body>
</html>