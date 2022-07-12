<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Slide::factory()->count(50)->create();
        Slide::create([
            'slider_id' => 1,
            'div_css' => 'swiper-slide',
            'backgroundimage' => 'images/web-slide-new-hope-buidling.png',
            'html_content' => '<div class="swiper-slide-caption"><div class="section-lg context-dark text-center"><div class="container container-wide"><div class="row row-fix justify-content-sm-center"><div class="col-xxl-8"><h1 data-caption-animate="fxRotateInDown" data-caption-delay="550">Nueva Esperanza</h1></div></div></div></div></div>',
            'state' => true,        
        ]);
        Slide::create([
            'slider_id' => 1,
            'div_css' => 'swiper-slide',
            'backgroundimage' => 'images/web-slide-new-hope-kids.png',
            'html_content' => '<div class="swiper-slide-caption"><div class="section-lg context-dark text-center"><div class="container container-wide"><div class="row row-fix justify-content-sm-center"><div class="col-xxl-8"><h1 data-caption-animate="fxRotateInDown" data-caption-delay="550">Kids Minsitry</h1></div></div></div></div></div>',
            'state' => true,        
        ]);
        Slide::create([
            'slider_id' => 1,
            'div_css' => 'swiper-slide',
            'backgroundimage' => 'images/web-slide-new-hope-kids-2.png',
            'html_content' => '<div class="swiper-slide-caption"><div class="section-lg context-dark text-center"><div class="container container-wide"><div class="row row-fix justify-content-sm-center"><div class="col-xxl-8"><h1 data-caption-animate="fxRotateInDown" data-caption-delay="550">Kids Minsitry</h1></div></div></div></div></div>',
            'state' => true,        
        ]);
        Slide::create([
            'slider_id' => 1,
            'div_css' => 'swiper-slide',
            'backgroundimage' => 'images/web-slide-new-hope-preaching.png',
            'html_content' => '<div class="swiper-slide-caption"><div class="section-lg context-dark text-center"><div class="container container-wide"><div class="row row-fix justify-content-sm-center"><div class="col-xxl-8"><h1 data-caption-animate="fxRotateInDown" data-caption-delay="550">Kids Minsitry</h1></div></div></div></div></div>',
            'state' => true,        
        ]);
        Slide::create([
            'slider_id' => 1,
            'div_css' => 'swiper-slide',
            'backgroundimage' => 'images/web-slide-new-hope-worship.png',
            'html_content' => '<div class="swiper-slide-caption"><div class="section-lg context-dark text-center"><div class="container container-wide"><div class="row row-fix justify-content-sm-center"><div class="col-xxl-8"><h1 data-caption-animate="fxRotateInDown" data-caption-delay="550">Kids Minsitry</h1></div></div></div></div></div>',
            'state' => true,        
        ]);
    }
}
