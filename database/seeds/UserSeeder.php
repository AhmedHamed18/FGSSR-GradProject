<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Facades\DB;
use Illuminate\support\str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //enum('level',['extreme','normal','extended']
        //enum('goal',['gainMuscle','looseWeight','fitness']
        //>enum('gender',['male','female']);
        // enum('bodyShape',['fat1','fat2','normal','thin','muscle','bodyBuilder','obese1','obese2']);
        // $table->enum('goalToAcheive',['looseWeight','gainMuscle','fitness']); 
        // $table->enum('interestedIn',['food','training','foodAndTraining']);
        // $table->enum('exercisingPlace',['gym','home']);
        // enum('levelOfTraining',['begineer','intermediate','pro']);
        DB::table('users')->insert([
            [
            'username'=>'ahmed',
            'first_name'=>'ahmed',
            'created_by_ip'=>'192.168.1.1',
            'last_name'=>'hamed',
            'email'=>'ahmed@gmail.com',
            'gender'=>'male',
            'telephone'=>'01111430593',
            'age'=>30,
            'country'=>'giza',

            'governorate'=>'ahmed',
            'city'=>'ahmed',
            'street'=>'tahrir',
            'password'=>Hash::make("123456"),
            // BODY MEASUREMENTS
            'height'=>180,
            'weight'=>110,
            'armSize'=>120,
            'shoulderSize'=>120,
            'chestSize'=>120,
            'thighSize'=>110,
            'waistSize'=>120,
            'bodyFatInKg'=>120,
            'bodyShape'=>"fat1",
            'digestionAndBurningSpeed'=>"fat1",
            // USER OBJECTIVES
            'goalToAcheive'=>"looseWeight",
            'interestedIn'=>"foodAndTraining",
            'exercisingPlace'=>"home",
            'targetWeight'=>80,
            'typeOfDiet'=>"test",
            'budgetForDiet'=>"economic",
            'easyToOrderMealsFromRestaurant'=>true,
            'preferToEatMealEveryDay'=>true,
            'likeDietRecipesToChangeAtRate'=>true,
            'allowedToEatMealsAtWork'=>true,
            'wantToUseSupplements'=>true,
            'havePhysicalLimitToSupplement'=>true,
            'alreadyHaveAnySupplements'=>true,
            // Timing
            'wakeUpAt'=>"test",
            'goToWorkAt'=>"test",
            'finishWorkAt'=>"test",
            'goToExerciseAt'=>"test",
            'sleepAt'=>"test",
            'averageExerciseTime'=>"test",
            'daysOfExercisePerWeek'=>"test",
            // Sickness
            'haveSurgery'=>false,
            'haveChronicDiseases'=>false,
            // General 
            'workEnvironment'=>"test",
            'participateInOtherSport'=>false,
            'haveChronicDiseases'=>false,
            'levelOfTraining'=>"begineer",
            ]
            
        ]);

        // to run db seed : php artisan db:seed --class=NutritionProgram
    }
}
