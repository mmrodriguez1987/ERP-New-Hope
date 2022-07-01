<?php

namespace Database\Factories;

use App\Models\PostMeta;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostMetaFactory extends Factory
{
    protected $model = PostMeta::class;

    public function definition()
    {
        return [
            'post_id' => $this->faker->numberBetween(1,10),
            'key' => $this->faker->word,
            'contentText' => $this->faker->sentence($nbWords = 15, $variableNbWords = true),
        ];
    }
}
