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
            'post_id' => $this->faker->numberBetween(1,10),
            'votes' => $this->faker->numberBetween(1,100),
            'intro_image' => $this->faker->word,
            'post_image' => $this->faker->word,
            'parentID' => $this->faker->faker->numberBetween(1,100),
            'metaTitle' => $this->faker->sentence($nbWords = 15, $variableNbWords = true),
            'slug' => $this->faker->slug,
            'contentHtml' => $this->faker->randomHtml(2,3),
            'summary' => $this->faker->sentence($nbWords = 15, $variableNbWords = true),
            'published' => $this->faker->boolean,
            'published_date' => $this->faker->dateTime
        ];
    }
}
