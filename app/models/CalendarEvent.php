<?php

class CalendarEvent extends Eloquent {

	protected $table = 'calendar_events';

	protected $fillable = array(
		'title',
		'description',
		'starts_at',
		'ends_at',
		'location'
	);

	public $rules = array(
		'title'       => 'required',
		'starts_at'   => 'required|date',
		'ends_at'     => 'required|date',
	);

	public function calendar()
	{
		return $this->belongsTo('Calendar');
	}

	public function validate()
	{
		$validator = Validator::make($this->getAttributes(), $this->rules);

		if($validator->fails()) return $validator;

		return true;
	}

	public function scopeMonth($query, $timestamp)
	{
		return $query
			->where( 'starts_at', '>', date('Y-m-d', strtotime('last day of last month', $timestamp)) )
			->where( 'starts_at', '<', date('Y-m-d', strtotime('first day of next month', $timestamp)) );
	}

	public function setStartsAtAttribute($value)
	{
		$ts = is_numeric($value)
			? $value
			: strtotime($value);

		return $this->attributes['starts_at'] = date('Y-m-d H:i:s', $ts);
	}

	public function setEndsAtAttribute($value)
	{
		$ts = is_numeric($value)
			? $value
			: strtotime($value);
			
		return $this->attributes['ends_at'] = date('Y-m-d H:i:s', $ts);
	}

	public function scopeCurrent($query){
		return $query->where( 'starts_at', '>=', new DateTime('today') );
	}

}