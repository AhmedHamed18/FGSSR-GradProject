<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call Models
use App\Models\Data\Nutrition;
use App\Models\Data\Program;
use App\User;
use League\CommonMark\Extension\Attributes\Node\Attributes;
use NutritionProgram;

class NutritionController extends Controller
{


    public function getNutritionPage(){
        return view('nutrition');
    }

    public function getNutritionProgram(Request $request){
        $nutrition=$this->getProgramFromDB($request['authUserID'],$request['weekday']);
        $breakfastmeals=$nutrition['breakfast'];
        $lunchmeals=$nutrition['lunch'];
        $dinnermeals=$nutrition['dinner']; 
       
        return response()->json([
                        'breakfast'=> $this->generateHtmlMeals($breakfastmeals),
                        'lunch'=>$this->generateHtmlMeals($lunchmeals),
                        'dinner'=>$this->generateHtmlMeals($dinnermeals) ,
                    ]);
    }

    protected function getProgramFromDB($authUserID,$weekday){
        // get user goal
        $userGoal=User::where('id',$authUserID)->get('goalToAcheive')->toArray();
        $userGoal=$userGoal[0]["goalToAcheive"];
        
        // get corresonding program
        $programId=Program::where(['goal'=>$userGoal,'level'=>'normal'])->get('id')->toArray();
        $programId=$programId[0]["id"];
        // get weekday nutrition program

        $nutritonBreakfast = Program::find($programId)
                    ->Nutrition()
                    ->where([
                        'mealType'=>'breakfast',
                        'weekday'=>$weekday
                    ])
                    ->get(['name','description','weight','calories','videoUrl','image'])
                    ->groupBy('weekday')
                    ->toArray();
        $nutritonLunch = Program::find($programId)
                    ->Nutrition()
                    ->where([
                        'mealType'=>'lunch',
                        'weekday'=>$weekday
                    ])
                    ->get(['name','description','weight','calories','videoUrl','image'])
                    ->groupBy('weekday')
                    ->toArray();
        $nutritonDinner = Program::find($programId)
                    ->Nutrition()
                    ->where([
                        'mealType'=>'dinner',
                        'weekday'=>$weekday
                    ])
                    ->get(['name','description','weight','calories','videoUrl','image'])
                    ->groupBy('weekday')
                    ->toArray();
        if(empty($nutritonBreakfast)){
            $nutritonBreakfast=null;
        }else{
            $nutritonBreakfast= $nutritonBreakfast[''];
        }
        if(empty($nutritonLunch)){
            $nutritonLunch=null;
        }else{
            $nutritonLunch= $nutritonLunch[''];
        }
        if(empty($nutritonDinner)){
            $nutritonDinner=null;
        }else{
            $nutritonDinner= $nutritonDinner[''];
        }
       
        $nutrition=[
            'breakfast'=>$nutritonBreakfast,
            'lunch'=>$nutritonLunch,
            'dinner'=>$nutritonDinner,
        ];
        return $nutrition;

    }

    protected function generateHtmlMeals($meals){
        $html='';
        if($meals==null){
            return "<div>No meals Found</div>";
        }
        foreach($meals as $meal){
            $html.="
            <div class='card-item'> 
            <div class='image'> <img class='w-100' src=".$meal['image']." alt=''/> 
            </div> 
            <div class='card-item-body'> 
                <div class='info'> 
                  <h5>".$meal['name']."</h5>
                  <span>Sad2ne apended data</span>
                  <div class='weight'> 
                    <span class='weight-number'>".$meal['weight']." mg</span>
                    <span class='calaries'>".$meal['calories']." kci</span>
                  </div>
                </div>
                <a class='play-icon' href=''> <i class='far fa-play-circle fa-fw fa-2x'></i></a>
              </div>
            </div>
            ";
        }
        return $html;
    }

    }

