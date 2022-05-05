<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    protected $table="nutrition";
    protected $fillable = [
        'mealType', 'mealGoal', 'name','description','weight','calories','videoUrl','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];

    public function Nutrition_program(){
        return $this->belongsToMany('App\Models\Data\Program','nutrition_program_relation'); 
    }
}
