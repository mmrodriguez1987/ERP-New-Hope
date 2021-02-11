<?php

namespace Database\Factories;

use App\Models\FamilyRole;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyRoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FamilyRole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_name' => $this->faker->name,
        ];
    }
}
