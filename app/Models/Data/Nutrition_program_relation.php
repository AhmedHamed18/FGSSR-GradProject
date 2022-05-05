<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Nutrition_program_relation extends Model
{
    protected $table="nutrition_program_relation";

    protected $fillable = [
        'weekday', 'program_id', 'nutrition_id'
    ];
}
