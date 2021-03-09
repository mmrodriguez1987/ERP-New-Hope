<?php

namespace Database\Factories;

use App\Models\PersonType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
