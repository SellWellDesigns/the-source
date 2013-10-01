<form role="form" action="{{ $event->exists ? action('CalendarEventsController@update', array($event->id)) : action('CalendarEventsController@store') }}" method="post" class="form-horizontal">
	<fieldset>

		@if($event->exists)
			<input type="hidden" name="_method" value="PUT" />
		@endif

		<div class="form-group {{ $errors->has('calendar_id') ? 'has-error' : '' }}">
			<label class="col-lg-2 control-label">Calendar</label>
			<div class="col-lg-10">
				<select name="calendar_id">
					@foreach(Calendar::all() as $calendar)
						<option value="{{ $calendar->id }}">{{ $calendar->name }}</option>
					@endforeach
				</select>
				@if($errors->has('calendar_id'))
					@foreach($errors->get('calendar_id') as $msg)
						<span class="help-block">{{ $msg }}</span>
					@endforeach
				@endif
			</div>
		</div>

		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
			<label class="col-lg-2 control-label">Title</label>
			<div class="col-lg-10">
				<input  class="form-control" type="text" name="title" value="{{ $event->title }}" />
				@if($errors->has('title'))
					@foreach($errors->get('title') as $msg)
						<span class="help-block">{{ $msg }}</span>
					@endforeach
				@endif
			</div>
		</div>

		<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			<label class="col-lg-2 control-label">Description</label>
			<div class="col-lg-10">
				<textarea  class="form-control" name="description">{{ $event->description }}</textarea>
				@if($errors->has('description'))
					@foreach($errors->get('description') as $msg)
						<span class="help-block">{{ $msg }}</span>
					@endforeach
				@endif
			</div>
		</div>

		<div class="form-group {{ $errors->has('starts_at') || $errors->has('ends_at') ? 'has-error' : '' }}">
			<label class="col-lg-2 control-label">Time</label>
			<div class="col-lg-10">
				<div class="row">
					<div class="col-lg-6 datepicker input-group">
						<input  class="form-control" type="text" name="starts_at" value="{{ $event->starts_at }}" plceholder="Starts At" />
						<span class="input-group-addon"><span class="icon-calendar"></span></span>
					</div>
					<div class="col-lg-6 datepicker input-group">
						<input class="form-control" type="text" name="ends_at" value="{{ $event->ends_at }}" plceholder="Ends At" />
						<span class="input-group-addon"><span class="icon-calendar"></span></span>
					</div>
				</div>
				@if($errors->has('starts_at') || $errors->has('ends_at'))
					@foreach($errors->get('starts_at') as $msg)
						<span class="help-block">{{ $msg }}</span>
					@endforeach
					@foreach($errors->get('ends_at') as $msg)
						<span class="help-block">{{ $msg }}</span>
					@endforeach
				@endif
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-2"></div>
			<div class="col-lg-10">
				<button type="submit" class="btn btn-primary">
					Save
				</button>
			</div>
		</div>

	</fieldset>
</form>

@section('scripts')
	<script src="{{ asset('js/bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js') }}"></script>
	<script type="text/javascript">
	$(function(){
		$('.datepicker').datetimepicker({
            pick12HourFormat: true,
            pickSeconds: false
        });
	});
	</script>
@stop