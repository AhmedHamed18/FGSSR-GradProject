<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type=['cardio','strength','stretch'];
        $location=['gym','home'];
        for($i=0;$i<100;$i++){
            $k = array_rand($type);
            $z= array_rand($location);
            DB::table('training')->insert([
                [
                'name'=>'test'.$i,
                'duration'=>'10X'.$i,
                'type'=>$type[$k],
                'location'=>$location[$z],
                'videoUrl'=>'https://www.youtube.com/embed/Yn_PPOH8_dI',
                'image'=>'https://i.pinimg.com/originals/e9/8e/15/e98e1577ab7af0394a4ae81a299d04c1.jpg'
                ],
            ]);
    }
}
}
