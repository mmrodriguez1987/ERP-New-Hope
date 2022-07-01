<?php

namespace Database\Factories;

use App\Models\PersonType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonTypeFactory extends Factory
{
    protected $model = PersonType::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
