<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingProgramRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weekday=['sunday','monday','tuesday','wednesday','thursday','friday','saturday'];
        for($i=0;$i<100;$i++){
            $k = array_rand($weekday);
            DB::table('training_program_relation')->insert([
                [
                'program_id'=>rand(4,6),
                'weekday'=>$weekday[$k],
                'training_id'=>rand(1,100)
                ]
            ]);
        }
    }
}
