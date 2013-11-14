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

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('icons/Source_favicon_144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('icons/Source_favicon_114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('icons/Source_favicon_72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('icons/Source_favicon_57.png') }}">
    <link rel="shortcut icon" href="{{ asset('icons/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('icons/Source_favicon_32.png') }}">
  </head>
  <body>

    <div class="btn-toolbar">
      <div class="btn-group">
        <a href="#" class="btn btn-primary">Add Event</a>
      </div>
    </div>

    <div class="calendar-wrapper">
      
      <div class="calendar">

        <?php
        $date = new DateTime(); 

        //This puts the day, month, and year in seperate variables 
        $day   = $date->format('d'); 
        $month = $date->format('m');
        $year  = $date->format('Y');

        //Here we generate the first day of the month 
        $first_day = new DateTime();
        $first_day->setDate($year, $month, 01);

        //This gets us the month name 
        $title = $first_day->format('F');

        //Here we find out what day of the week the first day of the month falls on 
        $day_of_week = $first_day->format('D'); 

        //Once we know what day of the week it falls on, we know how many blank days occure before it. If the first day of the week is a Sunday then it would be zero
        switch($day_of_week){ 
          case "Sun": $blank = 0; break; 
          case "Mon": $blank = 1; break; 
          case "Tue": $blank = 2; break; 
          case "Wed": $blank = 3; break; 
          case "Thu": $blank = 4; break; 
          case "Fri": $blank = 5; break; 
          case "Sat": $blank = 6; break; 
        }

        //We then determine how many days are in the current month
        $days_in_month = cal_days_in_month(0, $month, $year);

        $day_count = 1;

        $prev_month = new DateTime('0:00 last day of previous month');
        $prev_month->sub(new DateInterval('P' . ($blank-1) . 'D'));
        $next_month = new DateTime('0:00 first day of next month');
        ?>




        <ul class="month-browser">
          <li class="calendar_nav" >
            &laquo; <a href="/calendar/2013-10/">{{ $prev_month->format('F') }}</a>
          </li>
          <li id="current-month">
            November 2013
          </li>
          <li class="calendar_nav">
            <a href="/calendar/2013-12/">{{ $next_month->format('F') }}</a> &raquo;
          </li>
        </ul>

        <ul class="weekdays">
          <li class="day_of_week Sunday">Sunday</li>
          <li class="day_of_week Monday">Monday</li>
          <li class="day_of_week Tuesday">Tuesday</li>
          <li class="day_of_week Wednesday">Wednesday</li>
          <li class="day_of_week Thursday">Thursday</li>
          <li class="day_of_week Friday">Friday</li>
          <li class="day_of_week Saturday">Saturday</li>
        </ul>



        <ul class="days">
          @while($blank > 0)
            <li class="out_of_range calendar-day">
              <div class="date day_cell" data-timestamp="{{ $prev_month->getTimestamp() }}">
                <span class="day">{{ $prev_month->format('D') }}</span>
                <span class="month">{{ $prev_month->format('M') }}</span>
                {{ $prev_month->format('j') }}
              </div>
            </li>
            <?php
            $blank = $blank-1;
            $day_count++;
            $prev_month->add(new DateInterval('P1D'));
            ?>
          @endwhile

          <?php $day_num=1; ?>

          @while($day_num <= $days_in_month)
            <?php
            $thisDay = new DateTime($year . "/" . $month . "/" . str_pad( (string) $day_num, 2, "0", STR_PAD_LEFT) );
            ?>

            <li class="calendar-day">
              <div class="date day_cell" data-timestamp="{{ $thisDay->getTimestamp() }}">
                <span class="day">{{ $thisDay->format('D') }},</span>
                <span class="month">{{ $thisDay->format('M') }}</span>
                {{ $day_num }}
              </div>
            </li>
            
            <?php $day_num++; $day_count++; ?>

            @if($day_count > 7)
              </ul>
              <ul class="days">
              <?php $day_count=1; ?>
            @endif
          @endwhile

          @while($day_count > 1 && $day_count <=7)
            <li class="out_of_range calendar-day">
              <div class="date day_cell" data-timestamp="{{ $next_month->getTimestamp() }}">
                <span class="day">{{ $next_month->format('D') }}</span>
                <span class="month">{{ $next_month->format('M') }}</span>
                {{ $next_month->format('j') }}
              </div>
            </li>
            <?php
            $day_count++;
            $prev_month->add(new DateInterval('P1D'));
            ?>
          @endwhile
        </ul>



      </div>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
    $(function(){

      $('.day_cell').on('click', function(e){
        e.preventDefault();
        console.log( $(this).data() );
        return false;
      });

    });
    </script>
  </body>
</html>