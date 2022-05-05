<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data\Training;
use App\Models\Data\Program;
use App\User;

class TrainingController extends Controller
{
    // generate training view
    public function getTrainingPage(){
        return view('training');
    }

    // generate day training html and send to ajax request
    public function getTrainingProgram(Request $request){
        // validate data 
        $validated = $request->validate([
            'location' => 'required|string|in:gym,home',
            'weekday' => 'required|string|in:sunday,monday,tuesday,wednesday,thursday,friday,saturday',
            'authUserID' => 'required|integer|exists:users,id',
        ]);
        $training=$this->getProgramFromDB($request['authUserID'],$request['weekday'],$request['location']);
        $trainingCardio=$training['cardio'];
        $trainingStrength=$training['strength'];
        $trainingStretch=$training['stretch']; 
        return response()->json([
                        'cardio'=> $this->generateHtmlTraining($trainingCardio),
                        'strength'=>$this->generateHtmlTraining($trainingStrength),
                        'stretch'=>$this->generateHtmlTraining($trainingStretch) ,
                    ]);
    }

    protected function getProgramFromDB($authUserID,$weekday,$location){
        // get user goal
        $userGoal=User::where('id',$authUserID)->get('goalToAcheive')->toArray();
        $userGoal=$userGoal[0]["goalToAcheive"];
        
        // get corresonding program
        $programId=Program::where(['goal'=>$userGoal,'level'=>'normal','type'=>'training'])->get('id')->toArray();
        $programId=$programId[0]["id"];
        // get weekday traing program
        
        $trainingCardio = Program::find($programId)
                    ->Training()
                    ->where([
                        'type'=>'cardio',
                        'weekday'=>$weekday,
                        'location'=>$location,
                    ])
                    ->get([ 'training.id','name', 'image', 'videoUrl','duration','location','type','weekday'])
                    ->groupBy('weekday')
                    ->toArray();
                    
        $trainingStrength = Program::find($programId)
                    ->Training()
                    ->where([
                        'type'=>'strength',
                        'weekday'=>$weekday,
                        'location'=>$location,
                    ])
                    ->get([ 'training.id','name', 'image', 'videoUrl','duration','location','type','weekday'])
                    ->groupBy('weekday')
                    ->toArray();   
        $trainingStretch = Program::find($programId)
                    ->Training()
                    ->where([
                        'type'=>'stretch',
                        'weekday'=>$weekday,
                        'location'=>$location,
                    ])
                    ->get([ 'training.id','name', 'image', 'videoUrl','duration','location','type','weekday'])
                    ->groupBy('weekday')
                    ->toArray();
                   
        if(empty($trainingCardio)){
            $trainingCardio=null;
        }else{
            $trainingCardio= $trainingCardio[$weekday];
        }
        if(empty($trainingStrength)){
            $trainingStrength=null;
        }else{
            $trainingStrength= $trainingStrength[$weekday];
        }
        if(empty($trainingStretch)){
            $trainingStretch=null;
        }else{
            $trainingStretch= $trainingStretch[$weekday];
        }
       
        $training=[
            'cardio'=>$trainingCardio,
            'strength'=>$trainingStrength,
            'stretch'=>$trainingStretch,
        ];
        return $training;

    }

    protected function generateHtmlTraining($training){
        $html='';
        if($training==null){
            return "<div>No Excersises Found</div>";
        }
        foreach($training as $train){
            $html.="
            <div class='card-item active'>
                <div class='image'> 
                    <img class='w-100' 
                        src='".$train['image']."' 
                        alt=''/>
                </div>
                <div class='card-item-body'> 
                    <div class='info'> 
                    <h5>".$train['name']." </h5><span>".$train['duration']."</span>
                    </div><div class='play-icon trainingId' value='".$train['id']."'> <i class='far fa-play-circle fa-fw fa-2x'></i></div>
                </div>
            </div>
            ";
        }
        return $html;
    }


    // get training data by id

    public function getTrainingById(Request $request){
        $validated = $request->validate([
            'trainingId' => 'required|integer|exists:training,id',
        ]);

        $training=Training::where('id',$request['trainingId'])->get()->toArray();
        $training=$training[0];
        
        $traininfVideoFrame="
        <iframe id='videoFrame'
            src='".$training['videoUrl']."' 
            title='YouTube video player' 
            frameborder='0' 
            allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' 
            allowfullscreen=''>
        </iframe>
        ";


        return response()->json([
            'videoFrame'=> $traininfVideoFrame,
            'trainingName'=> $training['name'],
            'trainingDuration'=> $training['duration'],
            'trainingImage'=> $training['image'],
        ]);

    }
}
