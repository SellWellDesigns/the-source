<?php

class CalendarEventsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$events = array(
			array(
				'title'       => 'Test Event',
				'description' => 'this is a description for the test event',
				'starts_at'   => date('Y-m-d H:i:s'),
				'ends_at'     => date('Y-m-d H:i:s'),
				'calendar_id' => 1
			),
			array(
				'title'       => 'Test Event',
				'description' => 'this is a description for the test event',
				'starts_at'   => date('Y-m-d H:i:s'),
				'ends_at'     => date('Y-m-d H:i:s'),
				'calendar_id' => 1
			),
			array(
				'title'       => 'Test Event',
				'description' => 'this is a description for the test event',
				'starts_at'   => date('Y-m-d H:i:s'),
				'ends_at'     => date('Y-m-d H:i:s'),
				'calendar_id' => 1
			),
			array(
				'title'       => 'Test Event',
				'description' => 'this is a description for the test event',
				'starts_at'   => date('Y-m-d H:i:s'),
				'ends_at'     => date('Y-m-d H:i:s'),
				'calendar_id' => 1
			),
		);

		DB::table('calendar_events')->insert($events);
	}

}