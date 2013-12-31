<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>The Source</title>

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

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

    <nav id="nav" class="navbar navbar-inverse navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="{{asset('/')}}#about" data-scroll="true">about</a>
            </li>
            <li>
              <a href="{{asset('/')}}#contact" data-scroll="true">contact</a>
            </li>
            <li>
              <a href="{{asset('/')}}#events" data-scroll="true">events</a>
            </li>
            <li class="active">
              <a href="{{asset('/')}}#tenants" data-scroll="true" data-toggle="tenant-page-off">tenants</a>
            </li>
            <li>
              <a href="{{asset('/')}}#faq" data-scroll="true">faq</a>
            </li>
            <li>
              <a href="{{asset('/')}}#social" data-scroll="true">social</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="calendarWrapper" class="calendar-wrapper">
      
      <div class="calendar">

        <?php
        if(!isset($date)){
          $date = new DateTime();
        }

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

        $prev_month = DateTime::createFromFormat('U', strtotime('0:00 last day of previous month', $date->format('U')) );
        $prev_month->sub(new DateInterval('P' . ($blank-1 > 0 ? $blank-1 : 0) . 'D'));
        $next_month = DateTime::createFromFormat('U', strtotime('0:00 first day of next month', $date->format('U')) );

        // $prev_month = new DateTime('0:00 last day of previous month');
        // $prev_month->sub(new DateInterval('P' . ($blank-1 > 0 ? $blank-1 : 0) . 'D'));
        // $next_month = new DateTime('0:00 first day of next month');
        ?>




        <ul class="month-browser">
          <li class="calendar_nav" >
            <a class="btn btn-primary" href="{{ route('admin.month', array($prev_month->format('m'), $prev_month->format('Y') )) }}">
              &laquo; {{ $prev_month->format('F') }}
            </a>
          </li>
          <li id="current-month">
            {{$date->format('F Y')}}
          </li>
          <li class="calendar_nav">
            <a class="btn btn-primary" href="{{ route('admin.month', array($next_month->format('m'), $next_month->format('Y') )) }}">
              {{ $next_month->format('F') }} &raquo;
            </a>
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

                <?php
                $es = $events->filter(function($e) use($prev_month)
                {
                  return date('Y-m-d', strtotime($e->starts_at)) === $prev_month->format('Y-m-d');
                });
                ?>

                @foreach($es as $e)
                  <span class="label label-info" data-id="{{$e->id}}" data-description="{{$e->description}}" data-starts-at="{{date('U', strtotime($e->starts_at))}}" data-ends-at="{{date('U', strtotime($e->ends_at))}}" data-location="{{$e->location}}" data-title="{{$e->title}}">{{$e->title}}</span>
                @endforeach
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
              <div class="date day_cell" data-timestamp="{{ $thisDay->format('U') }}">
                <span class="day">{{ $thisDay->format('D') }},</span>
                <span class="month">{{ $thisDay->format('M') }}</span>
                {{ $day_num }}
                <?php
                $es = $events->filter(function($e) use($thisDay)
                {
                  return date('Y-m-d', strtotime($e->starts_at)) === $thisDay->format('Y-m-d');
                });
                ?>

                @foreach($es as $e)
                  <span class="label label-info" data-id="{{$e->id}}" data-description="{{$e->description}}" data-starts-at="{{date('U', strtotime($e->starts_at))}}" data-ends-at="{{date('U', strtotime($e->ends_at))}}" data-location="{{$e->location}}" data-title="{{$e->title}}">{{$e->title}}</span>
                @endforeach

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

                <?php
                $es = $events->filter(function($e) use($next_month)
                {
                  return date('Y-m-d', strtotime($e->starts_at)) === $next_month->format('Y-m-d');
                });
                ?>

                @foreach($es as $e)
                  <span class="label label-info" data-id="{{$e->id}}" data-description="{{$e->description}}" data-starts-at="{{date('U', strtotime($e->starts_at))}}" data-ends-at="{{date('U', strtotime($e->ends_at))}}" data-location="{{$e->location}}" data-title="{{$e->title}}">{{$e->title}}</span>
                @endforeach
                
              </div>
            </li>
            <?php
            $day_count++;
            $next_month->add(new DateInterval('P1D'));
            ?>
          @endwhile
        </ul>



      </div>
    </div>

    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Event</h4>
          </div>

          <div class="modal-body">
            <form id="newEventForm">

              <input type="hidden" name="id" value="" />
              
              <fieldset>

                <div class="row">
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Date</label>
                      <input name="starts_at" class="form-control" data-provide="datepicker" data-date-format="mm/dd/yyyy" type="text" required />
                    </div>
                  </div>

                  {{--<div class="col-sm-6">
                    <div class="form-group">
                      <label>Starts At</label>
                      <input name="starts_at" class="form-control" data-provide="datepicker" data-date-format="mm/dd/yyyy" type="text" />
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Ends At</label>
                      <input name="ends_at" class="form-control" data-provide="datepicker" data-date-format="mm/dd/yyyy" type="text" />
                    </div>
                  </div>--}}

                </div>

                <div class="form-group">
                  <label>Location</label>
                  <input name="location" class="form-control" type="text" />
                </div>

                <hr />

                <div class="form-group">
                  <label>Title</label>
                  <input name="title" class="form-control" type="text" required />
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <textarea name="description" rows="8" class="form-control"></textarea>
                </div>

              </fieldset>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-event="create" data-target="#newEventForm">Add Event</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('packages/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('packages/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('packages/jquery-validation-1.11.1/dist/jquery.validate.min.js') }}"></script>
    <script>
    $(function(){

      var
        $body  = $('body'),
        $modal = $('#eventModal')
      ;

      $modal.modal({
        show: false
      });

      $body.on('click', '.day_cell', function(e){
        e.preventDefault();

        var 
          data      = $(this).data(),
          timestamp = moment.unix( parseInt(data.timestamp) ).utc().format('L'),
          target    = $(e.target),
          isLabel   = target.is('.label')
        ;

        if(isLabel){
          var currEvent = target.data();
          $('[name="id"]').val( currEvent.id );
          $('[name="title"]').val( currEvent.title );
          $('[name="description"]').val( currEvent.description );
          $('[name="starts_at"]').val( moment.unix( parseInt(currEvent.startsAt) ).utc().format('L') );
          $('[name="ends_at"]').val( moment.unix( parseInt(currEvent.endsAt) ).utc().format('L') );
          $('[name="location"]').val( currEvent.location );
          $('[data-event="create"]').text('Update Event');
        } else {
          $('[name="starts_at"]').add('[name="ends_at"]')
            .val( timestamp );
          $('[name="title"]').add('[name="description"]').add('[name="location"]')
            .val('');
          $('[data-event="create"]').text('Add Event');
        }

        $modal.modal('show');
        return false;
      });

      $body.on('click', '[data-event="create"]', function(e){
        e.preventDefault();

        var form = $( $(this).data('target') );
        form.validate();

        if( !form.valid() ) return false;

        $.post('{{route("admin.events.store")}}',
          form.serialize(), 
          function(data){
            $('#calendarWrapper').load(window.location.href + " #calendarWrapper > .calendar");
            $modal.modal('hide');
          }
        );

        return false;
      });

    });
    </script>
  </body>
</html>