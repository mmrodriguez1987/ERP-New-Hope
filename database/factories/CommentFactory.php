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
            'user_id' => 1,
            'post_id' => 1,
            'parent_id' => 1,
            'content' => $this->faker->word,
            'title' => $this->faker->word,
            'published' => $this->faker->boolean

        ];
    }
}
