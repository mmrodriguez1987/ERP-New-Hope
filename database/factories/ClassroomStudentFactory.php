<?php

namespace Database\Factories;

use App\Models\ClassroomStudent;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomStudentFactory extends Factory
{
    protected $model = ClassroomStudent::class;
    
    public function definition()
    {
        return [
            'classroom_id' => 3,
            'student_id' => 1
        ];
    }
}
