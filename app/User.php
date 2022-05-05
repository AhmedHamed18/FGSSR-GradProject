<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','created_by_ip','first_name','last_name','gender','telephone','age','country',
        'governorate','city','street','password',
        
        // Measurements
        'height','weight','armSize','shoulderSize', 'chestSize','thighSize','waistSize','bodyFatInKg','bodyShape',
        'digestionAndBurningSpeed',


        //Objectives
        'goalToAcheive','interestedIn','exercisingPlace', 'targetWeight','typeOfDiet','budgetForDiet',
        'easyToOrderMealsFromRestaurant','preferToEatMealEveryDay','likeDietRecipesToChangeAtRate',
        'allowedToEatMealsAtWork','wantToUseSupplements','havePhysicalLimitToSupplement','alreadyHaveAnySupplements',
        'supplementsAre',
        
        // Timing
        'wakeUpAt','goToWorkAt','finishWorkAt', 'goToExerciseAt','sleepAt','averageExerciseTime','daysOfExercisePerWeek',

        // Sickness
        'haveSurgery','theSurgery','haveChronicDiseases', 'kindOfSikness','allergies',
   


        // General  
        'workEnvironment','participateInOtherSport','typeOfOtherSport', 'levelOfTraining'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','updated_at','created_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
