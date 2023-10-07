<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        SocialMedia::create([
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/newhopeinchrist.church',
            'icon' => 'images/facebook.png'          
        ]);
        SocialMedia::create([
            'name' => 'Instagram',
            'url' => 'https://www.instagram.com/newhopeinchrist/',
            'icon' => 'images/instagram.png'          
        ]);
        SocialMedia::create([
            'name' => 'Twitter',
            'url' => 'https://twitter.com/newhopeinchrist',
            'icon' => 'images/twitter.png'          
        ]);
        SocialMedia::create([
            'name' => 'YouTube',
            'url' => 'https://www.youtube.com/channel/UCILA_jIJUMy7n77XIxRkuOw',
            'icon' => 'images/youtube.png'          
        ]);
        SocialMedia::create([
            'name' => 'Linkedin',
            'url' => 'https://www.linkedin.com/company/new-hope-in-christ-ministry',
            'icon' => 'images/linkedin.png'          
        ]);

    }
}
