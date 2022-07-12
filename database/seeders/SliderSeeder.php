<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'page_name' => 'homepage',
            'first_div_css' => 'swiper-container swiper-slider swiper-modern',
            'second_div_css' => 'swiper-wrapper',
            'data_loop' => 'true',
            'data_autoplay' => '5500',
            'data_simulate_touch' => 'false',
        ]);
    }
}
