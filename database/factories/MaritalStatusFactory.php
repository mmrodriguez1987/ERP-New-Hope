<?php

namespace Database\Factories;

use App\Models\MaritalStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaritalStatusFactory extends Factory
{
    
    protected $model = MaritalStatus::class;

    public function definition()
    {
        return [
            'name'=> $this->faker->cityPrefix
        ];
    }
}
