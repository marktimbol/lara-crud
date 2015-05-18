<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		User::truncate();

		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();

		for( $i = 1; $i <= 50; $i++ ) {

			User::create([
				'name' => $faker->name,
				'email'	=> $faker->email,
				'password'	=> \Hash::make('secret')
				]);

		}

	}

}
