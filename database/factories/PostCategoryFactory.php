<?php

namespace Database\Factories;

use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCategoryFactory extends Factory
{
    protected $model = PostCategory::class;

    public function definition()
    {
        return [
            'post_id' => $this->faker->numberBetween(1,100),
            'category_id' => $this->faker->numberBetween(1,100)
        ];
    }
}
