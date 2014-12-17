<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('search_logs', function($table) {
      $table->increments('id');
      $table->string('username')->unique();
      $table->timestamps();
    });		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
   	Schema::drop('search_logs');
	}

}
