<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence($nbWords = 10 , $variableNbWords = true),
            'url'=> $this->faker->url,
            'image' => $this->faker->name,
            'eventDate' => $this->faker->dateTime
        ];
    }
}
