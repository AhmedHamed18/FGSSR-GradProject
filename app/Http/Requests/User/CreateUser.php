<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'created_by_ip'=>'required|ip',
            'username'=>'string|required|unique:users,username',
            'first_name'=>'string|required|min:2|max:30',
            'last_name'=>'string|required|min:2|max:30',
            'email'=>'string|email|required|unique:users,email',
            'gender'=>'string|in:male,female|required',
            'telephone'=>'string|size:11|max:11|required|unique:users,telephone',
            'age'=>'int|min:15|required|max:70',
            'country'=>'string|required|min:2|max:30',
            'governorate'=>'string|required|min:2|max:30',
            'city'=>'string|required|min:2|max:30',
            'street'=>'string|required|min:2|max:30',
            'city'=>'string|required|min:2|max:30',
            'password'=>'required|same:confirmPassword|',
            'confirmPassword'=>'required',
            // Measurements
            'height'=>'required|integer',
            'weight'=>'required|integer',
            'armSize'=>'required|integer',
            'shoulderSize'=>'required|integer',
            'chestSize'=>'required|integer',
            'thighSize'=>'required|integer',
            'waistSize'=>'required|integer',
            'bodyFatInKg'=>'required|integer',
            'bodyShape'=>'required|in:fat1,fat2,normal,thin,muscle,bodyBuilder,obese1,obese2',
            'digestionAndBurningSpeed'=>'required',

            //Objectives
            'goalToAcheive'=>'required|in:looseWeight,gainMuscle,fitness',
            'interestedIn'=>'required|in: nutrition,exercises,exercises_nutrition',
            'exercisingPlace'=>'required|in:gym,home',
            'targetWeight'=>'required',
            'typeOfDiet'=>'required',
            'budgetForDiet'=>'required',
            'easyToOrderMealsFromRestaurant'=>'required',
            'preferToEatMealEveryDay'=>'required',
            'likeDietRecipesToChangeAtRate'=>'required',
            'allowedToEatMealsAtWork'=>'required',
            'wantToUseSupplements'=>'required',
            'havePhysicalLimitToSupplement'=>'required',
            'alreadyHaveAnySupplements'=>'required',
            'supplementsAre'=>'nullable|string',
        
            // Timing
            'wakeUpAt'=>'required',
            'goToWorkAt'=>'required',
            'finishWorkAt'=>'required',
            'goToExerciseAt'=>'required',
            'sleepAt'=>'required',
            'averageExerciseTime'=>'required',
            'daysOfExercisePerWeek'=>'required',
          
            // Sickness
            'haveSurgery'=>'required|boolean',
            'theSurgery'=>'string|nullable',
            'haveChronicDiseases'=>'required|boolean',
            'kindOfSikness'=>'string|nullable',
            'allergies'=>'nullable|string',
        
            // General  
            'workEnvironment'=>'required',
            'participateInOtherSport'=>'required|boolean',
            'typeOfOtherSport'=>'required|string|nullable',
            'levelOfTraining'=>'required',
        ];
    }

    public function messages(){
        
        return [
            
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            // 'errors' => 'data not valid',
            'status' => true
            ], 200)
        );
    }
}
