<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getRegister1(){
        return view('register.register');
    }

    public function getRegister2(){
        return view('register.register2');
    }

    public function getRegister3(){
        return view('register.register3');
    }
    public function getRegister4(){
        return view('register.register4');
    }
    public function getRegister5(){
        return view('register.register5');
    }

    public function postRegister1(Request $request){
        // put InterstedIn to Session
        $validated = $request->validate([
            'interestedIn' => 'required|string|in:exercises_nutrition,exercises,nutrition',
        ]);
        $request->session()->put('interestedIn', $request['interestedIn']);
        return redirect('register2');
    }

    public function postRegister2(Request $request){
        $validated = $request->validate([
            'gender' => 'required|string|in:male,female',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'telephone' => 'required|string|max:12',
        ]);
        $request->session()->put('userData', $validated);
        return redirect('register3');
    }

    public function postRegister3(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'country' => 'required|string|max:50',
            'city' => 'required|string|max:50',
        ]);
        $request->session()->put('userData', $validated);
        return redirect('register4');
    }
    public function postRegister4(Request $request){
        $validated = $request->validate([
            'goalToAcheive' => 'required|in:looseWeight,gainMuscle,fitness'
        ]);
        $request->session()->put('userData', $validated);
        return redirect('register5');
    }

    public function postRegister5(Request $request){
        $validated = $request->validate([
            'goalToAcheive' => 'required|in:looseWeight,gainMuscle,fitness'
        ]);
        $request->session()->put('userData', $validated);
        return redirect('register6');
    }

    
}
