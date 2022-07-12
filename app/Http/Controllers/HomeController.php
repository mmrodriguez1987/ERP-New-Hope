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
use App\Models\Slide;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index() {

        $seo_settings = Setting::where('group_setting_id', 1)->get();
        $home_slides = Slide::where('slider_id',1)->get();
        
        $seo_settings->where('name','Title')->first()->value('short_key_value');
            
        SEOMeta::setTitle($seo_settings->where('name','Title')->first()->short_key_value);
        SEOMeta::setDescription($seo_settings->where('name','Description')->first()->short_key_value);
        SEOMeta::setCanonical($seo_settings->where('name','URL')->first()->short_key_value);

        OpenGraph::setDescription($seo_settings->where('name','Title')->first()->short_key_value);
        OpenGraph::setTitle($seo_settings->where('name','Description')->first()->short_key_value);
        OpenGraph::setUrl($seo_settings->where('name','URL')->first()->short_key_value);
       
        // OR

        SEOTools::setTitle($seo_settings->where('name','Title')->first()->short_key_value);
        SEOTools::setDescription($seo_settings->where('name','Description')->first()->short_key_value);
        SEOTools::opengraph()->setUrl($seo_settings->where('name','URL')->first()->short_key_value);
        SEOTools::setCanonical($seo_settings->where('name','URL')->first()->short_key_value);
        SEOTools::twitter()->setSite($seo_settings->where('name','Twitter Tag')->first()->short_key_value);
        SEOTools::jsonLd()->addImage($seo_settings->where('name','Logo')->first()->short_key_value);

      
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
