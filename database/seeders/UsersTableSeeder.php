<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Michael Rodriguez',
            'email' => 'mrodriguez@nissienterprise.com',
            'password' => bcrypt('Pa$$w0rd'),
            'role_id' => 1,
            'phone' => '7863550508',
        ]);

        User::create([
            'name' => 'Michael Rodriguez',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
            'role_id' => 1,
            'phone' => '7863550502',
        ]);

        User::create([
            'name' => 'Vianne Rodriguez',
            'email' => 'vrodriguez@nissienterprise.com',
            'password' => bcrypt('Pa$$w0rd'),
            'role_id' => 1,
            'phone' => '7863509949',
        ]);

        User::create([
            'name' => 'Edgar Ordonez',
            'email' => 'pastoredgar@newhopeinchrist.church',
            'password' => bcrypt('Pa$$w0rd'),
            'role_id' => 1,
            'phone' => '3053640200',
        ]);
        User::factory()->count(3)->create();
    }
}
