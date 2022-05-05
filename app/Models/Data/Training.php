<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table="training";
    protected $fillable = [
        'name', 'image', 'videoUrl','duration','location','type'
    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];

    public function Training_program(){
        return $this->belongsToMany('App\Models\Data\Program','training_program_relation'); 
    }
}
