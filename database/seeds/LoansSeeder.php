<?php

use Illuminate\Database\Seeder;

class LoansSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	**/
	public function run()
	{
		$loans = json_decode(file_get_contents('database/seeds/foia_150k_plus.json', true), true);
		foreach ($loans150kplus as $loan) {

		}
	}
}
