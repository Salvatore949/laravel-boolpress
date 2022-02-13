<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, 10) ->create() -> each(function($tag) {
            
          $posts = Post::inRandomOrder()->limit(rand(0,3)) ->get();

          $tag -> posts() -> attach($posts);

          $tag -> save();

        });
    }
}
