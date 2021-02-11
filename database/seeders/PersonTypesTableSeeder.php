<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persontype;

class PersonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persontype::factory()->count(50)->create();
    }
}
