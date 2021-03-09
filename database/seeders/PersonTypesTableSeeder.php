<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonType;

class PersonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonType::factory()->count(50)->create();
    }
}
