<?php

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array(
                'username' => 'admin',
                'password' => Hash::make('thesourcepass')
            )
        );

        DB::table('users')->insert($users);
    }

}