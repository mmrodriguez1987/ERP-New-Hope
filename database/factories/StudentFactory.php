<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;
    
    public function definition()
    {
        return [
            'person_id' => $this->faker->numberBetween(1,40),
            'student_type_id' => $this->faker->numberBetween(10,30),
            'active' => $this->faker->boolean,
            'member_since' => $this->faker->dateTime,
        ];
    }
}
