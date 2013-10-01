<?php

class CalendarDay {

	public $exists;

	public $timestamp;

	public $date;

	public $events;

	public function __construct($timestamp = null, $events = null)
	{
		if($timestamp)
		{
			$this->exists = true;
			$this->timestamp = $timestamp;
			$this->date = date('Y-m-d', $timestamp);
			$this->events = $events;
		}
		else
		{
			$this->exists = false;
		}
	}

}