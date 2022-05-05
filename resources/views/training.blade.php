@extends('layout.header')

@section('content')

    <section class="overview"> 
      <div class="container-fluid"> 
        <div class="row"> 
          <div class="col-lg-4">
            <div class="box-Training"> 
              <h4 class="header">Training</h4>
              <ul class="list-unstyled groub-day">
                <li class="link-list active" id="saturday">Sat</li>
                <li class="link-list" id="sunday">Sun</li>
                <li class="link-list" id="monday">Mon</li>
                <li class="link-list" id="tuesday">Tues</li>
                <li class="link-list" id="wednesday">Wed</li>
                <li class="link-list" id="thursday">Thurs</li>
                <li class="link-list" id="friday">Fri</li>
              </ul>
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <div class="nav-link active" 
                        id="pills-home-tab" 
                        data-bs-toggle="pill" 
                        data-bs-target="#pills-home" 
                        role="tab" 
                        aria-controls="pills-home" 
                        aria-selected="true"> 
                        <i class="fas fa-home fa-fw" id="locationHome"></i>Home
                  </div>
                </li>
                <li class="nav-item" role="presentation">
                  <div class="nav-link" 
                        id="pills-profile-tab" 
                        data-bs-toggle="pill" 
                        data-bs-target="#pills-profile" 
                        role="tab" 
                        aria-controls="pills-profile" 
                        aria-selected="false"> 
                        <i class="fas fa-dumbbell fa-fw" id="locationGym"></i>Gym
                  </div>
                </li>
              </ul>
              <div class="tab-content box-Training-body box-Training-body for-tabs" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="card-list"> 
                    <div class="card-header">
                      <h5>Cardio</h5>
                      <div class="icon"> <i class="fas fa-angle-down fa-fw"></i></div>
                    </div>
                    <div class="card-body" id="cardio">
                      {{-- End Cardio CardBody --}}
                    </div>
                  </div>
                  <div class="card-list">   
                    <div class="card-header">
                      <h5>Strength </h5>
                      <div class="icon"> <i class="fas fa-angle-down fa-fw"></i></div>
                    </div>
                    <div class="card-body" id="strength">

                      {{-- End strength CardBody --}}
                    </div>
                  </div>
                  <div class="card-list">    
                    <div class="card-header">
                      <h5>Stretching</h5>
                      <div class="icon"> <i class="fas fa-angle-down fa-fw"></i></div>
                    </div>
                    <div class="card-body" id="stretch">
                      {{-- End stretch CardBody --}}
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> 
                  <div class="card-list"> 
                    <div class="card-header">
                      <h5>Cardio</h5>
                      <div class="icon"> <i class="fas fa-angle-down fa-fw"></i></div>
                    </div>
                    <div class="card-body">
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 23.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Light Treadmill Walk</h5><span>20 minute</span>
                          </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                        </div>
                      </div>
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 24.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Carbon EL Elliptical</h5><span>10 minute</span>
                          </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-list">   
                    <div class="card-header">
                      <h5>Strength </h5>
                      <div class="icon"> <i class="fas fa-angle-down fa-fw"></i></div>
                    </div>
                    <div class="card-body">
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 27.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Split Lunge with Bicep Curl </h5><span>10 x 3</span>
                          </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                        </div>
                      </div>
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 28.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Standing Alternating Dumbbell Shoulder Press</h5>
                            <span>10 x 3</span>
                          </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                        </div>
                      </div>
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 31.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Lat Pulldown</h5><span>10 x 3</span>
                          </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                        </div>
                      </div>
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 32.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Barbell Bench Press</h5><span>10 x 3</span>
                          </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">   
            <div class="slide-show">
              <div class="vedio-box" id="videoFrameContainer" style="display:hidden">
              </div>
              <div class="choices-exercise">
                <div class="card-item"> 
                  <div class="image"> 
                  <img id="trainingImage" class="w-100"  alt=""/></div>
                  <div class="card-item-body"> 
                    <div class="info"> 
                      {{-- data to be put by JS  --}}
                      <h5 id="trainingName"></h5>
                      <span id="trainingDuration"></span>
                    </div>
                  </div>
                </div>
                <div class="button-groub"> 
                  <button class="btn btn btn-success rounded-pill btn-sm px-3">Start </button>
                  <button class="btn btn-outline-warning rounded-pill btn-sm" id="btnChangeExercise"><i class="fas fa-exchange-alt fa-fw"></i>Change Exercise</button>
                  <button class="btn btn-outline-primary rounded-pill btn-sm" id="btnFadeBack"><i class="fas fa-undo fa-fw"></i>feedback</button>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="d-flex">
              <div class="w-50 p-2 box-Change-Exercise">
                <div class="box-Training">
                  <div class="card-list"> 
                    <h5 class="px-3 pt-2 mb-0 border-bottom pb-2">Change Exercise</h5>
                    <div class="card-body"> 
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 27.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Split Lunge with Bicep Curl </h5><span>10 x 3</span>
                          </div><a class="play-icon" href=""> <i class="fas fa-exchange-alt fa-fw fa-lg"></i></a>
                        </div>
                      </div>
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 28.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Standing Alternating Dumbbell Shoulder Press</h5><span>10 x 3</span>
                          </div><a class="play-icon" href=""> <i class="fas fa-exchange-alt fa-fw fa-lg"></i></a>
                        </div>
                      </div>
                      <div class="card-item"> 
                        <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/Training/Mask Group 31.png" alt=""/></div>
                        <div class="card-item-body"> 
                          <div class="info"> 
                            <h5>Lat Pulldown</h5><span>10 x 3</span>
                          </div><a class="play-icon" href=""> <i class="fas fa-exchange-alt fa-fw fa-lg"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-50 p-2 box-Fade-Back">
                <div class="box-Training">
                  <div class="card-list"> 
                    <h5 class="px-3 pt-2 mb-0 border-bottom pb-2">feedback</h5>
                    <div class="card-body p-3">
                      <div class="form-controal mb-3">
                        <textarea class="form-control" rows="5"></textarea>
                      </div>
                      <div class="d-flex justify-content-end">
                        <button class="btn btn-green" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <script src="{{ url('/public') }}/js/jquery-3.6.0.min.js"> </script>
      <script src="{{ url('/public') }}/js/bootstrap.min.js"> </script>
      <script src="{{ url('/public') }}/js/Main.js"> </script>
      <script>
         var trainingLoc="";
         var weekday="";  
        $( document ).ready(function() {
          $('#trainingAsideLink').addClass('active').siblings().removeClass('active');
                            
        });

        $('.list-unstyled .link-list').click(function() {
            $(this).addClass('active').siblings().removeClass('active');
        
        });

        $('.groub-day .link-list').click(function() {
            $(this).addClass('active').siblings().removeClass('active');
        
        });
        $('.card-list  .card-header .icon').click(function() {
            $(this).toggleClass('rotate').closest('.card-list').find('.card-body').slideToggle(500);
        
        });
        

        // get training location 
        $('#locationHome').click(function(event){
          trainingLoc="home";
          
        });
        $('#locationGym').click(function(event){
          trainingLoc="gym";
          
        });
        // ajax request

        $('#saturday').click(function(event){
            var weekday="saturday";
            getDayTraining(weekday,event);
        });
        $('#sunday').click(function(event){
            var weekday="sunday";
            getDayTraining(weekday,event);
        });
        $('#monday').click(function(event){
            var weekday="monday";
            getDayTraining(weekday,event);
        });
        $('#tuesday').click(function(event){
            var weekday="tuesday";
            getDayTraining(weekday,event);
        });
        $('#wednesday').click(function(event){
            var weekday="wednesday";
            getDayTraining(weekday,event);
        });
        $('#thursday').click(function(event){
            var weekday="thursday";
            getDayTraining(weekday,event);
        });
        $('#friday').click(function(event){
            var weekday="friday";
            getDayTraining(weekday,event);
        });        

        
       
        function getDayTraining(weekday,event,location="gym"){
            event.preventDefault();
            $.ajax({
            url: "{{route('training.program')}}",
            type:"GET",
            data:{
            'weekday':weekday, 
            'authUserID':1,
            'location':location,              
            },
            success:function(response){
            if(response) {
                var div = document.getElementById('cardio');
                $("#cardio").empty();
                div.innerHTML += response.cardio;
                var div = document.getElementById('stretch');
                $("#stretch").empty();
                div.innerHTML += response.stretch;
                var div = document.getElementById('strength');
                $("#strength").empty();
                div.innerHTML += response.strength;

                // function to trigger when user press training details icon
                $('.trainingId').click(function(event){
                  var trainingId= $(this).attr('value');
                  // send ajax request to get training details
                  $.ajax({
                      url: "{{route('training.byId')}}",
                      type:"GET",
                      data:{
                      'trainingId':trainingId,              
                      },
                      success:function(responseTrainingDerails){
                      if(responseTrainingDerails) {
                        var div = document.getElementById('videoFrameContainer');
                        $("#videoFrameContainer").empty();
                        div.innerHTML += responseTrainingDerails.videoFrame;
                        var div = document.getElementById('trainingName');
                        $("#trainingName").empty();
                        div.innerHTML += responseTrainingDerails.trainingName;
                        var div = document.getElementById('trainingDuration');
                        $("#trainingDuration").empty();
                        div.innerHTML += responseTrainingDerails.trainingDuration;
                        var div = document.getElementById('trainingImage');
                        div.src=responseTrainingDerails.trainingImage;
                        
                      }
                    },
                    error: function(errorDetails) {
                      console.log('error');
                      console.log(errorDetails.responseJSON.errors);
                    }
                  })
                   // End of  ajax request to get training details
                      
                

                  // display to iframe section
                  var videoFrameContainer = document.getElementById('videoFrameContainer');
                  videoFrameContainer.style.display = "block";

                });
              }
              },
              error: function(error) {
                console.log('error');
                console.log(error.responseJSON.errors);
              }
            })
        }

        

        // 
        
      </script>
    </body>
  </html>

  @endsection