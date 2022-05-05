<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Training_program_relation extends Model
{
    protected $table="training_program_relation";

    protected $fillable = [
        'weekday', 'program_id', 'training_id'
    ];
}
