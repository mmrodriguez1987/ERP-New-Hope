<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{    
    protected $model = Person::class;
    
    public function definition()
    {
        return [
            'title' => $this->faker->firstName,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'picture_profile' => $this->faker->url,
            'maritalstatus_id' => $this->faker->numberBetween(1,10),
            'gender_id' => $this->faker->numberBetween(1,10),
            'familyrole_id' => $this->faker->numberBetween(1,10),
            'family_id' => $this->faker->numberBetween(1,10),
            'birthdate' => $this->faker->dateTime,
            'sex' => 'M',
            'cid' => $this->faker->ssn,
            'address'=> $this->faker->streetAddress,
            'street'=> $this->faker->streetName,
            'state'=> $this->faker->stateAbbr,
            'profession_id'=> $this->faker->numberBetween(1,10),
            'postal_code'=> $this->faker->postCode,
            'city'=> $this->faker->city,
            'email' => $this->faker->unique->safeEmail,
            'url_linkedin' => $this->faker->url,
            'url_twitter' => $this->faker->url,
            'url_facebook' => $this->faker->url,
            'url_instagram' => $this->faker->url,
            'phone' => $this->faker->phoneNumber,
            'cnt_emerg_name' => $this->faker->name,
            'cnt_emerg_phone' => $this->faker->phoneNumber,
            'cnt_emerg_address' => $this->faker->streetName,
            'crt_employer_name' => $this->faker->name,
            'crt_employer_address' => $this->faker->streetAddress,
            'crt_employer_phone' => $this->faker->phoneNumber,
            'position_id' =>  $this->faker->numberBetween(1,10),
            'person_type_id' =>  $this->faker->numberBetween(1,10),
        ];
    }
}
