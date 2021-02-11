<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FamilyRole;

class FamilyRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamilyRole::factory()->count(50)->create();
    }
}
