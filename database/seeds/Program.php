<?php

use Illuminate\Database\Seeder;

use Illuminate\support\Facades\DB;
use Illuminate\support\str;


class Program extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //enum('level',['extreme','normal','extended']
        //enum('goal',['gainMuscle','looseWeight','fitness']
        // enum('type',['nutrition','training']);

        DB::table('program')->insert([
            ['name'=>'program1',
            'goal'=>'gainMuscle',
            'level'=>'normal',
            'type'=>'nutrition'
            ],
            ['name'=>'program2',
            'goal'=>'looseWeight',
            'level'=>'normal',
            'type'=>'nutrition'
            ],
            ['name'=>'program3',
            'goal'=>'looseWeight',
            'level'=>'normal',
            'type'=>'nutrition'
            ],
            ['name'=>'program4',
            'goal'=>'looseWeight',
            'level'=>'normal',
            'type'=>'training'
            ],
            ['name'=>'program5',
            'goal'=>'gainMuscle',
            'level'=>'normal',
            'type'=>'training'
            ],
            ['name'=>'program6',
            'goal'=>'fitness',
            'level'=>'normal',
            'type'=>'training'
            ],
            
            
        ]);

        // to run db seed : php artisan db:seed --class=NutritionProgram
    }
}
