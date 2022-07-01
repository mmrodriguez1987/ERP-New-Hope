<?php

namespace Database\Factories;

use App\Models\SubmissionData;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubmissionDataFactory extends Factory
{
    protected $model = SubmissionData::class;

    public function definition()
    {
        return [
            'submission_id' => $this->faker->numberBetween(1,10),
            'visitor' => $this->faker->text,
            'name' => $this->faker->text,
            'email' => $this->faker->text,
            'phone' => $this->faker->text,
            'message' => $this->faker->text
        ];
    }
}
