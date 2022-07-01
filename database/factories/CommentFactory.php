<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{   
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
            'post_id' => 1,
            'parent_id' => 1,
            'contentHtml' => $this->faker->randomHtml(2,3),
            'title' => $this->faker->word,
            'published' => $this->faker->boolean

        ];
    }
}
