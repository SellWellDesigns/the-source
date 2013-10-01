@extends('layouts.site')

@section('content')
	<div class="gradient navbar-fix">
		<div class="container">
			@include('events._calendar')
		</div>
	</div>
@stop