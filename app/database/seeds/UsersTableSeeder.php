<?php

class UsersTableSeeder extends Seeder {
	public function run() {
	    $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            $user = new User;
            $user->user_name     = $faker->userName()  . $index;
            $user->password     = 'admin';
            $user->user_id= ;
            $user->user_rank = 'admin';

            if(! $user->save()) {
              Log::info('Unable to create user '.$user->username, (array)$user->errors());
            } else {
              Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
            }
        }

	}

}
