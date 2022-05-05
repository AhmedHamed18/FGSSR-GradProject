<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // PERSONAL INFO
            $table->string('username');
            $table->string('first_name');
            $table->ipAddress('created_by_ip');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->enum('gender',['male','female']);
            $table->string('telephone');
            $table->integer('age');
            $table->string('country');
            $table->string('governorate');
            $table->string('city');
            $table->string('street');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // BODY MEASUREMENTS
            $table->integer('height');
            $table->integer('weight');
            $table->integer('armSize');
            $table->integer('shoulderSize');
            $table->integer('chestSize');
            $table->integer('thighSize');
            $table->integer('waistSize');
            $table->integer('bodyFatInKg');
            $table->enum('bodyShape',['fat1','fat2','normal','thin','muscle','bodyBuilder','obese1','obese2']);
            $table->string('digestionAndBurningSpeed');

            // USER OBJECTIVES
            $table->enum('goalToAcheive',['looseWeight','gainMuscle','fitness']); 
            $table->enum('interestedIn',['food','training','foodAndTraining']);
            $table->enum('exercisingPlace',['gym','home']);
            $table->integer('targetWeight');
            $table->string('typeOfDiet');
            $table->enum('budgetForDiet',['economic','open']);
            $table->boolean('easyToOrderMealsFromRestaurant');
            $table->boolean('preferToEatMealEveryDay');
            $table->boolean('likeDietRecipesToChangeAtRate');
            $table->boolean('allowedToEatMealsAtWork');
            $table->boolean('wantToUseSupplements');
            $table->boolean('havePhysicalLimitToSupplement');
            $table->boolean('alreadyHaveAnySupplements');
            $table->string('supplementsAre')->nullable();

            
            // Timing
            $table->string('wakeUpAt');
            $table->string('goToWorkAt');
            $table->string('finishWorkAt');
            $table->string('goToExerciseAt');
            $table->string('sleepAt');
            $table->string('averageExerciseTime');
            $table->string('daysOfExercisePerWeek');


            // Sickness
            $table->boolean('haveSurgery');
            $table->string('theSurgery')->nullable();
            $table->boolean('haveChronicDiseases');
            $table->string('kindOfSikness')->nullable();
            $table->string('allergies')->nullable();


            // General  
            $table->string('workEnvironment');
            $table->boolean('participateInOtherSport');
            $table->string('typeOfOtherSport')->nullable();
            $table->enum('levelOfTraining',['begineer','intermediate','pro']);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
