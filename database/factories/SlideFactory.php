<?php

namespace Database\Factories;

use App\Models\Slide;
use Illuminate\Database\Eloquent\Factories\Factory;

class SlideFactory extends Factory
{
    protected $model = Slide::class;

    public function definition()
    {
        return [
            'name' => $this->faker->numberBetween(1,10),
            'backgroundimage' => $this->fake->text,
            'iconimage' => $this->fake->text,
            'iconimage_position' => $this->fake->numberBetween(1,100),
            'iconimage_col_size' => $this->fake->numberBetween(1,10),
            'text_h1' => $this->fake->text,
            'text_h2' => $this->fake->text,
            'read_more_link' => $this->fake->text,
            'text_col_size' => $this->fake->numberBetween(1,10),
            'textpositionleft' => $this->fake->boolean,
            'state' => $this->fake->boolean
        ];
    }
}
