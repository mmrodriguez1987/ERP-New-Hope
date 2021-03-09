<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);   
        $this->call(UsersTableSeeder::class);    
        $this->call(PositionsTableSeeder::class); 
        $this->call(ProfessionsTableSeeder::class); 
        $this->call(PersonTypesTableSeeder::class); 
        $this->call(EventsTableSeeder::class); 
        $this->call(FamilyRolesTableSeeder::class); 
        $this->call(FamilyTableSeeder::class); 
        $this->call(GenderTableSeeder::class); 
        $this->call(MaritalStatusTableSeeder::class); 
        $this->call(PersonsTableSeeder::class);    
    }
}
