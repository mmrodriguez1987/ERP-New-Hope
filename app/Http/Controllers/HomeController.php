<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;

// OR
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index() {

        SEOMeta::setTitle('New Hope In Christ Ministry');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

       
        // OR

        SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');

      
        $sundayService = Carbon::parse('next sunday');
        $sundayService->hour = 10;
        $sundayService->minute = 30;
        $sundayService->second = 0;   
        $sundayService->format('Y-m-d h:m:s');

        $thursdayService = Carbon::parse('next thursday');
        $thursdayService->hour = 20;
        $thursdayService->minute = 30;
        $thursdayService->second = 0;   
        $thursdayService->format('Y-m-d h:m:s');        

        $nextService = ($sundayService->greaterThan($thursdayService)) ? $thursdayService : $sundayService;

        return view('site.index')
        ->with('nextService', $nextService)
        ->with('nextServiceDayName',$nextService->dayName);
    }
}
