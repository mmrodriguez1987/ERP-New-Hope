<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
    use HasFactory;
    protected $table = 'person_types';
    protected $fillable = ['name'];

    //Scopes
    public function scopeSearch($query, $target)
    {
        if ($target != '') {
            return $query->
                where('name', 'like', "%$target%")
                ->orWhere('id', $target);
        }
    }
}
