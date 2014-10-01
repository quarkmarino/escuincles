<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1) as $index)
		{
			User::create([
				'username' => 'quarkmarino',
				'password' => Hash::make('2515'),
				'email' => 'quarkmarino@gmail.com',
			]);
		}
	}

}