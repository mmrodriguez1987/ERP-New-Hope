<?php

namespace Database\Factories;

use App\Models\FamilyRole;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyRoleFactory extends Factory
{
    protected $model = FamilyRole::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
