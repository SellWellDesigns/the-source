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
				'title'       => 'New Years Eve',
				'description' => "Count down the new year at The Source. With New Year's specials from many of our tenants and a Cocktails and Caviar event hosted at Caprock Farm Bar's central bar, you'll be starting out your 2014 right.",
				'starts_at'   => '2013-12-31 00:00:00',
				'ends_at'     => '2014-01-01 00:00:00',
				'location'    => 'The Source'
			),
		);

		DB::table('calendar_events')->insert($events);
	}

}