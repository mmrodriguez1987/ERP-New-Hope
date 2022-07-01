<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    protected $model = Faq::class;

    public function definition()
    {
        return [
            'question' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'answer' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true)
        ];
    }
}
