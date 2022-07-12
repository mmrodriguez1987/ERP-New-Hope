<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';    
   
    /**
     * Relationships
     */
    public function persontype() {
        return $this->BelongsTo(Persontype::class, 'person_type_id');
    }

    public function profession() {
        return $this->BelongsTo(Profession::class, 'profession_id');
    }

    public function position() {
        return $this->BelongsTo(Position::class, 'position_id');
    }

    public function maritalstatus() {
        return $this->BelongsTo(maritalstatus::class, 'maritalstatus_id');
    }

    public function gender() {
        return $this->BelongsTo(Gender::class, 'gender_id');
    }

    public function familyrole() {
        return $this->BelongsTo(familyrole::class, 'familyrole_id');
    }


    public function family() {
        return $this->BelongsTo(family::class, 'family_id');
    }

    /**
     * Method to search by any column
     * @param  Query $query
     * @param  string $target [description]
     * @return Query
     */
    public function scopeSearch($query, $target) {
        if ($target != '') {
            $query->where('title', 'like', "%$target%")
            ->orWhere('first_name', 'like', "%$target%")
            ->orWhere('middle_name', 'like', "%$target%")
            ->orWhere('last_name', 'like', "%$target%")
            ->orWhere('maritalstatus_id', 'like', "%$target%")
            ->orWhere('gender_id', 'like', "%$target%")
            ->orWhere('familyrole_id', 'like', "%$target%")
            ->orWhere('family_id', 'like', "%$target%")
            ->orWhere('cid', 'like', "%$target%")
            ->orWhere('sex', 'like', "%$target%")
            ->orWhere('address', 'like', "%$target%")
            ->orWhere('postal_code', 'like', "%$target%")
            ->orWhere('state', 'like', "%$target%")
            ->orWhere('street', 'like', "%$target%")
            ->orWhere('email', 'like', "%$target%")
            ->orWhere('url_linkedin', 'like', "%$target%")
            ->orWhere('url_twitter', 'like', "%$target%")
            ->orWhere('url_facebook', 'like', "%$target%")
            ->orWhere('url_instagram', 'like', "%$target%")
            ->orWhere('mobile_phone', 'like', "%$target%")
            ->orWhere('work_phone', 'like', "%$target%")
            ->orWhere('home_phone', 'like', "%$target%")
            ->orWhere('city', 'like', "%$target%")
            ->orWhere('cnt_emerg_name', 'like', "%$target%")
            ->orWhere('cnt_emerg_phone', 'like', "%$target%")
            ->orWhere('cnt_emerg_address', 'like', "%$target%")
            ->orWhere('crt_employer_name', 'like', "%$target%")
            ->orWhere('crt_employer_address', 'like', "%$target%")
            ->orWhere('crt_employer_phone', 'like', "%$target%")
            ->orWhere('position_id', 'like', "%$target%")
            ->orWhere('person_type_id', 'like', "%$target%")
            ->orWhere('profession_id', 'like', "%$target%")
            ->orWhere('birthdate', 'like', "%$target%");

        }
        return $query;
    }


    /**
     * Method to filter by Profession
     *
     * @param string $query
     * @param integer $profession_id
     * @return void
     */
    public function scopeProfession($query, $profession_id) {
        if ($profession_id != '') {
            return $query->where('profession_id', $profession_id);
        }
    }

    /**
     * Method to filter by PersonType
     *
     * @param string $query
     * @param integer $person_type_id
     * @return void
     */
    public function scopePersontype($query, $person_type_id) {
        if ($person_type_id != '') {
            return $query->where('person_type_id', $person_type_id);
        }
    }

    /**
     * Method to filter by Position
     *
     * @param string $query
     * @param integer $position_id
     * @return void
     */
    public function scopePosition($query, $position_id) {
        if ($position_id != '') {
            return $query->where('position_id', $position_id);
        }
    }



    public function getProfessionNameAttribute() {
        return $this->profession->name;
    }

    public function getPersonTypeNameAttribute() {
        return $this->persontype->name;
    }

    public function getPositionNameAttribute() {
        return $this->position->name;
    }


}
