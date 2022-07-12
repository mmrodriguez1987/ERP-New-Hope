<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;


    public function slider() 
    {
        return $this->belongsTo(Slider::class);
    }

    public function scopeSearch($query, $target)
    {
        if ($target != '') {
            return $query->
                where('id', 'like', "%$target%")
                ->orWhere('slider_id', 'like', "%$target%")
                ->orWhere('backgroundimage', 'like', "%$target%")
                ->orWhere('html_content', 'like', "%$target%")
                ->orWhere('state', 'like', "%$target%");
        }
    }
}
