<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->firstName,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'maritalstatus_id' => 1,
            'gender_id' => 1,
            'familyrole_id' => 1,
            'family_id' => 1,            
            'birthdate' => $this->faker->dateTime,
            'sex' => 'M',
            'cid' => $this->faker->ssn,
            'address'=> $this->faker->streetAddress,
            'street'=> $this->faker->streetName,
            'state'=> $this->faker->stateAbbr,
            'profession_id'=> 1 ,
            'postal_code'=> '33015',
            'city'=> $this->faker->city,
            'email' => $this->faker->unique->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'cnt_emerg_name' => $this->faker->name,
            'cnt_emerg_phone' => $this->faker->phoneNumber,
            'cnt_emerg_address' => $this->faker->streetName, 
            'crt_employer_name' => $this->faker->name,
            'crt_employer_address' => $this->faker->streetAddress,
            'crt_employer_phone' => $this->faker->phoneNumber,
            'position_id' =>  1, 
            'person_type_id' =>  1, 
        ];
    }
}
