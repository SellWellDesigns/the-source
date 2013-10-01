<?php

class CalendarEventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = CalendarEvent::all();

		return View::make('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$event = new CalendarEvent();
		
		return View::make('events.create', compact('event'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		$event = new CalendarEvent($data);

		$validated = $event->validate();

		if($validated !== true) return Redirect::action('CalendarEventsController@create')->withErrors($validated);

		$event->save();
		return Redirect::action( 'CalendarEventsController@show', array($event->id) );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = CalendarEvent::find($id);

		return View::make('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = CalendarEvent::find($id);

		return View::make('events.edit', compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = CalendarEvent::find($id);

		$event->fill(Input::all());

		$validated = $event->validate();

		if($validated !== true) return Redirect::action('CalendarEventsController@edit', array($event->id))->withErrors($validated);

		$event->save();
		return Redirect::action( 'CalendarEventsController@show', array($event->id) );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}