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
            'visitor' => $this->faker->ipv4(),
            'name' => $this->faker->firstName(),
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'message' => $this->faker->text
        ];
    }
}
