<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

		for ($i=0; $i < 11; $i++) {
			DB::table('images')->insert([
				'hash' => 'default.png',
				'name' => 'default',
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]);
		}
    }
}
