<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Family;

class FamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::factory()->count(50)->create();
    }
}
