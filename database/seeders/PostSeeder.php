<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 10; $i++)
        {
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->content = $faker->text(50);
            $post->slug = $post->generateSlug($post->title);
            $post->image =$faker->imageUrl(640, 480, 'animals', true);
            $post->save();
        }
    }
}