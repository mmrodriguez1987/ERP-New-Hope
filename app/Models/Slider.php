<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public function slides()
    {
        return $this->hasMany(Slide::class);
    }

    public function scopeSearch($query, $target)
    {
        if ($target != '') {
            return $query->
                where('id', 'like', "%$target%")
                ->orWhere('page_name', 'like', "%$target%")
                ->orWhere('div_css', 'like', "%$target%")
                ->orWhere('data_loop', 'like', "%$target%")
                ->orWhere('data_autoplay', 'like', "%$target%")
                ->orWhere('data_simulate_touch', 'like', "%$target%");
        }
    }
    
}
