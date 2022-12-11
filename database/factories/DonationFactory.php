<?php

namespace Database\Factories;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{   
    protected $model = Donation::class;

    public function definition()
    {
        return [
            'campaign_id' => $this->faker->numberBetween(1,10),
            'payment_method_id' => $this->faker->numberBetween(1,10),
            'amount' => 1000,
            'donor_id' => $this->faker->numberBetween(1,10),
            'donator_name' => $this->faker->firstName(),
            'note' => $this->faker->word
        ];
    }
}
