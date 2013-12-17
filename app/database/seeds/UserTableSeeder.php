<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('users')->delete();

    	/*User::create(array(
    		'username' => 'noel',
    		'password' => Hash::make('noel')
    	));

        User::create(array(
            'username' => 'gerardocontreras',
            'password' => Hash::make('centrovision')
        ));*/

        // Uncomment the below to run the seeder
        // DB::table('user')->insert($user);
    }

}