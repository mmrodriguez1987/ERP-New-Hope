<?php

namespace Database\Factories;

use App\Models\PostTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    protected $model = PostTag::class;

    public function definition()
    {
        return [
            'tag_id' => $this->faker->numberBetween(1,10),
            'post_id' => $this->faker->numberBetween(1,100),
        ];
    }
}
