<?php

namespace Database\Factories;

use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaFactory extends Factory
{

    protected $model = SocialMedia::class;

    public function definition()
    {
        return [
            'name' => $this->faker->text,
            'url' => $this->faker->text,
            'icon' => $this->faker->text,
        ];
    }
}
