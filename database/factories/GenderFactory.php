<?php

namespace Database\Factories;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenderFactory extends Factory
{
    protected $model = Gender::class;

    public function definition()
    {
        return [
            'name'=> $this->faker->firstName,           
        ];
    }
}
