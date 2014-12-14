<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('posts', function($table)
    {
      $table->increments('id');
      $table->integer('user_id');
      $table->text('content');
      $table->integer('count_likes');
      $table->integer('count_unlikes');
      $table->integer('count_views');
      $table->integer('count_comments');
      $table->timestamps();
      $table->softDeletes();
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('posts');
	}

}
