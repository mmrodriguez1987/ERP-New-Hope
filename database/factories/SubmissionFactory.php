<?php

namespace Database\Factories;

use App\Models\Submission;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubmissionFactory extends Factory
{

    protected $model = Submission::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
