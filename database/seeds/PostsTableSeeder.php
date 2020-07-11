<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 300)->create()->each(function(App\Post $post){
            $post->tags()->attach([
                random(1,5),
                random(6,14),
                random(15,20),
            ]);
        });
    }
}
