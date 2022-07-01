<?php

namespace Database\Factories;

use App\Models\GroupSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupSettingFactory extends Factory
{
    protected $model = GroupSetting::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
