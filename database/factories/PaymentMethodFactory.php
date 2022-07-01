<?php

namespace Database\Factories;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodFactory extends Factory
{

    protected $model = PaymentMethod::class;

    public function definition()
    {
        return [
            'person_id' => $this->faker->numberBetween(1,10),
            'name_on_card' => $this->faker->firstName,
            'card_no' => $this->faker->creditCardNumber,
            'exp_month' => $this->faker->numberBetween(1,12),
            'exp_year' => $this->faker->numberBetween(2022,2026),
            'cvv' => $this->faker->numberBetween(100,999)
        ];
    }
}
