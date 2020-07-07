<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoans extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up()
	{
		Schema::create('loans', function (Blueprint $table) {
			$table->id();

			$table->string('loan_range', 20);
			$table->string('business_name', 150);
			$table->string('address', 255);
			$table->string('city', 50);
			$table->string('state', 2);
			$table->integer('zip');
			$table->integer('naics_code');
			$table->string('business_type', 75);
			$table->string('race_ethnicity', 12);
			$table->string('gender', 12);
			$table->string('veteran', 12);
			$table->boolean('non_profit');
			$table->integer('jobs_retained');
			$table->date('approved');
			$table->string('lender', 150);
			$table->string('congressional_district', 10);

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down()
	{
		Schema::dropIfExists('loans');
	}
}
