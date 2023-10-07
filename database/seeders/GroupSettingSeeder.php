<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GroupSetting;

class GroupSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupSetting::create(['name' => 'SEO']);
        GroupSetting::create(['name' => 'site']);
        GroupSetting::create(['name' => 'home']);
        GroupSetting::create(['name' => 'company']);
    }
}