<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table="program";

    protected $fillable = [
        'name', 'goal', 'level','type'
    ];

    public function Nutrition(){
        return $this->belongsToMany('App\Models\Data\Nutrition','nutrition_program_relation'); // many to many relation  
    }

    public function Training(){
        return $this->belongsToMany('App\Models\Data\Training','training_program_relation'); // many to many relation  
    }
}
