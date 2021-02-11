<?php

namespace Database\Factories;

use App\Models\Persontype;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersontypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persontype::class;

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
