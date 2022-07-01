<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Factories\Factory;


class ClassroomFactory extends Factory
{
    protected $model = ClassRoom::class;

    public function definition()
    {
        return [
            'group_name' => $this->faker->word,
            'description' => 1
        ];
    }
}
