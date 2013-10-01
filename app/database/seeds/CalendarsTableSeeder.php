<?php

class CalendarsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$calendars = array(
			array(
				'name'       => 'The Source Calendar'
			),
		);

		DB::table('calendars')->insert($calendars);
	}

}