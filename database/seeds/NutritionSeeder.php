<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // enum('mealType',['breakfast','lunch','dinner']);
        $mealType=['breakfast','lunch','dinner'];
        for($i=0;$i<100;$i++){
            $k = array_rand($mealType);
            DB::table('nutrition')->insert([
                ['name'=>'egg'.$i,
                'mealType'=>$mealType[$k],
                'description'=>'description'.$i,
                'weight'=>100+$i,
                'calories'=>200+2*$i,
                'videoUrl'=>'https://www.youtube.com/embed/Yn_PPOH8_dI',
                'image'=>'https://i.pinimg.com/originals/e9/8e/15/e98e1577ab7af0394a4ae81a299d04c1.jpg'
                ],         
                
            ]);
        }
       
    }
}
