<?php

use Illuminate\Support\Collection;

class Calendar extends Eloquent {
	
	protected $table = 'calendars';

	public function events()
	{
		return $this->hasMany('CalendarEvent');
	}

	public static function byRange($rangeType = 'month', $timestamp = null)
	{
		//get selected timestamp
		if(!$timestamp)
		{
			$timestamp = time();
		}

		//create empty collection
		$collection = new Collection();

		//get events
		$events = CalendarEvent::month($timestamp)->get();


		//get timestamp for first day of selected month
		$firstDayTimestamp = strtotime('first day of this month', $timestamp);
		$firstWeekDay = date('w', $firstDayTimestamp);

		//get timestamp for last day of selected month
		$lastDayTimestamp = strtotime('last day of this month', $timestamp);
		$lastWeekDay = date('w', $lastDayTimestamp);

		//get number of days in month
		$numDaysInMonth = cal_days_in_month( CAL_GREGORIAN, date('m', $timestamp), date('Y', $timestamp) );

		// pre-pad empty days
		$i = 0;
		while($i < $firstWeekDay)
		{
			$calDay = new CalendarDay();
			$collection->push($calDay);
			$i++;
		}

		$curr = 0;
		while($curr < $numDaysInMonth)
		{
			$currTimestamp = strtotime('+' . $curr . ' days', $firstDayTimestamp);
			$currDate = date('Y-m-d', $currTimestamp);

			$calDay = new CalendarDay($currTimestamp);

			$es = $events->filter(function($e) use($currDate)
			{
				return date('Y-m-d', strtotime($e->starts_at)) === $currDate;
			});
			
			$calDay->events = $es;
		
			$collection->push($calDay);

			$curr++;
		}

		while($lastWeekDay < 6)
		{
			$calDay = new CalendarDay();
			$collection->push($calDay);
			$lastWeekDay++;
		}

		return $collection->reverse();
	}

}