@extends('layouts.site')

@section('content')
	<div class="gradient navbar-fix">
		<div class="container">
			<h1>Add Event</h1>

			@include('events._form')
		</div>
	</div>
@stop