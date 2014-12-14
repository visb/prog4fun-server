<?php

class PostTableSeeder extends Seeder {

  public function run()
  {
    DB::table('posts')->delete();

    Post::create(['user_id' => 1, 'content' => '<p>Teste!</p>']);
    Post::create(['user_id' => 2, 'content' => '<p>Teste 2!</p>']);
  }

}
