<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerFactory extends Factory
{
    protected $model = Manufacturer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->streetAddress,
            'phone' => $this->faker->phoneNumber,
            'alias' => $this->faker->company,
            'title' => $this->faker->jobTitle,
            'heading' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->sentence($nbWords = 16, $variableNbWords = true),
            'email' => $this->faker->email,
            'image' => $this->faker->word,

        ];
    }
}
