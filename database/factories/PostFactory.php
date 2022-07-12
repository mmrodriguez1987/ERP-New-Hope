<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'author_id' => $this->faker->numberBetween(1,10),
            'category_id' => $this->faker->numberBetween(1,10),
            'votes' => $this->faker->numberBetween(1,100),
            'intro_image' => $this->faker->realText(rand(10, 20)),
            'post_image' => $this->faker->realText(rand(10, 20)),
            'parentID' => $this->faker->numberBetween(1,100),
            'metaTitle' => $this->faker->realText(rand(10, 20)),
            'slug' => $this->faker->slug(),
            'contentHtml' => $this->faker->randomHtml(2,3),
            'summary' => $this->faker->realText(rand(10, 20)),
            'published' => $this->faker->boolean(),
            'published_date' => $this->faker->dateTime()
        ];
    }
}
