<div class="calendar">
	<ul class="weekdays">
		<li>Sunday</li>
		<li>Monday</li>
		<li>Tuesday</li>
		<li>Wednesday</li>
		<li>Thursday</li>
		<li>Friday</li>
		<li>Saturday</li>
	</ul>
	<ul class="days">

		@foreach(Calendar::byRange('month') as $day)
			<li class="calendar-day">
				@if($day->exists)
					<div class="date">
						<span class="day">{{ date('D', $day->timestamp) }},</span> <span class="month">{{ date('M', $day->timestamp) }}</span> {{ date('j', $day->timestamp) }}
					</div>
					@foreach($day->events as $event)
						<a href="{{ route('admin.events.show', $event->id) }}" class="show-info cobb-venue">
							<div class="show-name">{{ $event->title }}</div>
							<div class="show-time">{{ $event->starts_at }} - {{ $event->ends_at }}</div>
							<div class="venue">{{ $event->location }}</div>
						</a>
					@endforeach
				@endif
			</li>
		@endforeach

	</ul>
</div>