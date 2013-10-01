<?php

class CalendarEvent extends Eloquent {

	protected $table = 'calendar_events';

	protected $fillable = array(
		'calendar_id',
		'title',
		'description',
		'starts_at',
		'ends_at',
		'location'
	);

	public $rules = array(
		'calendar_id' => 'required',
		'title' => 'required',
		'starts_at' => 'required|date',
		'ends_at' => 'required|date',
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
		return $this->attributes['starts_at'] = date('Y-m-d H:i:s', strtotime($value));
	}

	public function setEndsAtAttribute($value)
	{
		return $this->attributes['ends_at'] = date('Y-m-d H:i:s', strtotime($value));
	}

}