<?php

namespace App\Http\Controllers;

use App\User;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\CreateUser;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class UserController extends Controller
{
    use ApiResponse;
    public function create(CreateUser $request){
        $cred=$request->only(['email','password']);
        $password=Hash::make($request['password']);
        $user=User::create([
            'name'=>$request['name'],
            'username'=>$request['username'],
            'email'=>$request['email'],
            'password'=>$password,
            'created_by_ip'=>$request['created_by_ip'],
            'first_name'=>$request['first_name'],
            'last_name'=>$request['last_name'],
            'gender'=>$request['gender'],
            'telephone'=>$request['telephone'],
            'age'=>$request['age'],
            'country'=>$request['country'],
            'governorate'=>$request['governorate'],
            'city'=>$request['city'],
            'street'=>$request['street'],

            // Measurements
            'height'=>$request['height'],
            'weight'=>$request['weight'],
            'armSize'=>$request['armSize'],
            'shoulderSize'=>$request['shoulderSize'],
            'chestSize'=>$request['chestSize'],
            'thighSize'=>$request['thighSize'],
            'waistSize'=>$request['waistSize'],
            'bodyFatInKg'=>$request['bodyFatInKg'],
            'bodyShape'=>$request['bodyShape'],
            'digestionAndBurningSpeed'=>$request['digestionAndBurningSpeed'],

            //Objectives
            'goalToAcheive'=>$request['goalToAcheive'],
            'interestedIn'=>$request['interestedIn'],
            'exercisingPlace'=>$request['exercisingPlace'],
            'targetWeight'=>$request['targetWeight'],
            'typeOfDiet'=>$request['typeOfDiet'],
            'budgetForDiet'=>$request['budgetForDiet'],
            'easyToOrderMealsFromRestaurant'=>$request['easyToOrderMealsFromRestaurant'],
            'preferToEatMealEveryDay'=>$request['preferToEatMealEveryDay'],
            'likeDietRecipesToChangeAtRate'=>$request['likeDietRecipesToChangeAtRate'],
            'allowedToEatMealsAtWork'=>$request['allowedToEatMealsAtWork'],
            'wantToUseSupplements'=>$request['wantToUseSupplements'],
            'havePhysicalLimitToSupplement'=>$request['havePhysicalLimitToSupplement'],
            'alreadyHaveAnySupplements'=>$request['alreadyHaveAnySupplements'],
            'supplementsAre'=>$request['supplementsAre'],
        
            // Timing
            'wakeUpAt'=>$request['wakeUpAt'],
            'goToWorkAt'=>$request['goToWorkAt'],
            'finishWorkAt'=>$request['finishWorkAt'],
            'goToExerciseAt'=>$request['goToExerciseAt'],
            'sleepAt'=>$request['sleepAt'],
            'averageExerciseTime'=>$request['averageExerciseTime'],
            'daysOfExercisePerWeek'=>$request['daysOfExercisePerWeek'],
          
            // Sickness
            'haveSurgery'=>$request['haveSurgery'],
            'theSurgery'=>$request['theSurgery'],
            'haveChronicDiseases'=>$request['haveChronicDiseases'],
            'kindOfSikness'=>$request['kindOfSikness'],
            'allergies'=>$request['allergies'],
        
            // General  
            'workEnvironment'=>$request['workEnvironment'],
            'participateInOtherSport'=>$request['participateInOtherSport'],
            'typeOfOtherSport'=>$request['typeOfOtherSport'],
            'levelOfTraining'=>$request['levelOfTraining'],
    
        ]);
        
        $token=auth('api')->attempt($cred);
        $token= $this->respondWithToken($token);

        $user['token']=$token;
        $this->apiResponse("Register sucess","user registered sucessfully",200,$user);

    }

    public function login(Request $request){
        $cred= $request->only(['email','password']); 
        if(Auth::attempt($cred)){
            $user= Auth::user($cred);
            $request->session()->put('user', $user);
            
            // return view('overview',compact('user'));
            return redirect('overview',compact('user'));
        }else{
            // $error['credentials']="email or password incorrect";
            // return view('login',compact('error'));
            return back()->withErrors([
                'credentials' => 'The provided credentials do not match our records.',
            ]);
        }
        
        
    }

    public function getLogin(Request $request){
        // $sessionUser=$request->session()->put('user');
        $sessionUser=$request->session()->get('user');
        if($sessionUser==null){
            return view('login');
        }else{
            return redirect('overview');
        }
        
    }

    
}
