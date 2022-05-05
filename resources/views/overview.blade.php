@extends('layout.header')

@section('content')
      <section class="overview"> 
        <div class="container-fluid"> 
          <div class="row"> 
            <div class="col-lg-9">
              <div class="content-chart"> 
                <!-- Start Header Title-->
                <div class="header"> 
                  <h3 class="heading">Dashboard </h3>
                  <div class="your-gool"> 
                    <h5 class="title">	ONLY 3 MONTHS AND 15 DAYS		</h5><small>	 UNTIL YOU REACH YOUR GOAL!					</small>
                  </div>
                </div>
                <!-- End Header Title-->
                <!-- Start Box Details-->
                <div class="box-details"> 
                  <button class="box-info bg-one" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                    <div class="icon"> <img class="w-100" src="images/overviewICon/calorie.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Calorie</div>
                      <div class="heading">1752</div>
                      <div class="box-gool"> 
                        <div class="name-gool">Goal</div>
                        <div class="target-gool">52500 <sub> Col</sub></div>
                      </div>
                    </div>
                  </button>
                  <button class="box-info bg-two" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon"> <img class="w-100" src="images/overviewICon/Steps.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Steps</div>
                      <div class="heading">8000<sub>st</sub></div>
                      <div class="box-gool"> 
                        <div class="name-gool">Goal</div>
                        <div class="target-gool">10000 <sub> Col</sub></div>
                      </div>
                    </div>
                  </button>
                  <button class="box-info bg-three" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon"> <img class="w-100" src="images/overviewICon/Weight.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Weight</div>
                      <div class="heading">83<sub>Kg</sub></div>
                      <div class="box-gool"> 
                        <div class="name-gool">Goal</div>
                        <div class="target-gool">{{Session::get('user.targetWeight')}}  <sub> Kg</sub></div>
                      </div>
                    </div>
                  </button>
                  <button class="box-info bg-four" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon"> <img class="w-100" src="images/overviewICon/Drink Water.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Drink Water</div>
                      <div class="heading">1200<sub>ml</sub></div>
                      <div class="box-gool"> 
                        <div class="name-gool">Goal</div>
                        <div class="target-gool">2000 <sub> Col</sub></div>
                      </div>
                    </div>
                  </button>
                  <button class="box-info bg-four" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon"> <img class="w-100" src="images/overviewICon/Sleep.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Sleep</div>
                      <div class="heading"> <span class="houre">6h </span><span class="min">34m</span></div>
                      <div class="box-gool"> 
                        <div class="name-gool">Goal</div>
                        <div class="target-gool"> <span class="houre">8h </span><span class="min">20m</span></div>
                      </div>
                    </div>
                  </button>
                  <button class="box-info bg-three" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon"> <img class="w-100" src="images/overviewICon/BloodPressure.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Blood Pressure</div>
                      <div class="heading">119/81 <small> <sub>mmHg</sub></small></div>
                      <div class="box-gool">
                        <div class="name-gool">Normal</div>
                      </div>
                    </div>
                  </button>
                  <button class="box-info bg-one" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon"> <img class="w-100" src="images/overviewICon/Pulse.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Pulse</div>
                      <div class="heading">65 <sub>bpm</sub></div>
                      <div class="box-gool"> 
                        <div class="name-gool">Normal</div>
                      </div>
                    </div>
                  </button>
                  <button class="box-info bg-two" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="icon"> <img class="w-100" src="images/overviewICon/Meals.svg" alt=""/></div>
                    <div class="box-info-body"> 
                      <div class="name-box">Meals</div>
                      <div class="heading"> <span class="number">4</span><span>/</span><span class="total">6</span></div>
                      <div class="box-gool"> 
                        <div class="name-gool">Goal</div>
                        <div class="target-gool">1604 <sub> Col</sub></div>
                      </div>
                    </div>
                  </button>
                </div>
                <!-- End Box Details    -->
                <!-- Start Box chars    -->
                <div class="box-char-pir"> 
                  <div class="box-pir"> 
                    <div class="box-header"> 
                      <h4>Cardio</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="chartCardio"></div>
                    </div>
                  </div>
                  <div class="box-pir"> 
                    <div class="box-header"> 
                      <h4>Strength Training</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="StrengthTraining"></div>
                    </div>
                  </div>
                  <div class="box-pir"> 
                    <div class="box-header"> 
                      <h4>Other Activities</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="OtherActivities"></div>
                    </div>
                  </div>
                </div>
                <!-- End Box chars  -->
                <!-- Start Box chars    -->
                <div class="box-char-pir"> 
                  <div class="box-pir Half">
                    <div class="box-header"> 
                      <h4>DIETARY ANALYSIS</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="DIETARYANALYSIS"></div>
                    </div>
                  </div>
                  <div class="box-pir Half"> 
                    <div class="box-header"> 
                      <h4>EXERCISE ANALYSIS</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="EXERCISEANALYSIS"></div>
                    </div>
                  </div>
                </div>
                <!-- End Box chars  -->
                <!-- Start Box chars    -->
                <div class="box-char-pir"> 
                  <div class="box-pir"> 
                    <div class="box-header"> 
                      <h4>Measurements (cm)</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="Measurements"></div>
                    </div>
                  </div>
                  <div class="box-pir"> 
                    <div class="box-header"> 
                      <h4>Weight - BMI</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="WeightBMI"></div>
                    </div>
                  </div>
                  <div class="box-pir"> 
                    <div class="box-header"> 
                      <h4>Weight - Body Fat</h4><a class="icon" href=""> <i class="fas fa-info-circle fa-fw"> </i></a>
                    </div>
                    <div class="box-body"> 
                      <div id="WeightBodyFat"></div>
                    </div>
                  </div>
                </div>
                <!-- End Box chars  -->
              </div>
            </div>
            <div class="col-lg-3">      
              <div class="box-profiles">  
                <div class="card-box">
                  <div class="image"> <img class="w-100" src="images/man (1).png" alt=""/></div>
                  <div class="box-profiles-body"> 
                    <h4 class="heading">Hi, {{Session::get('user.username')}}</h4><span class="small">Giza, Egypt.</span>
                  </div>
                </div>
                <div class="box-profiles-footer"> 
                  <div class="box-footer"> <span>Age </span><span>{{Session::get('user.age')}} <sub>Y.O    </sub></span></div>
                  <div class="box-footer"> <span>Height </span><span>{{Session::get('user.height')}} <sub>cm</sub></span></div><a class="box-footer" href="index.html"> <img src="images/overviewICon/Exit.svg" alt=""/></a>
                </div>
              </div>
              <div class="box-action"> 
                <h4 class="heading">To-Do Dial Plan</h4>
                <div class="body-box-action"> 
                  <ul class="list-unstyled"> 
                    <li class="list-item"> 
                      <label class="time-do" for="Wakeup"> <span class="time">09:00</span><span class="name">Wake up</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Wakeup" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                    <li class="list-item"> 
                      <label class="time-do" for="Yoga"> <span class="time">09:30</span><span class="name">Yoga & Exercise</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Yoga" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                    <li class="list-item"> 
                      <label class="time-do" for="Breakfast"> <span class="time">10:00</span><span class="name">Breakfast</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Breakfast" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                    <li class="list-item"> 
                      <label class="time-do" for="Swimming"> <span class="time">11:30</span><span class="name">Swimming</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Swimming" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                    <li class="list-item"> 
                      <label class="time-do" for="Lunch"> <span class="time">13:00</span><span class="name">Lunch</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Lunch" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                    <li class="list-item"> 
                      <label class="time-do" for="Meeting"> <span class="time">15:30</span><span class="name">Meeting</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Meeting" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                    <li class="list-item"> 
                      <label class="time-do" for="Workout"> <span class="time">18:00</span><span class="name">Workout</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Workout" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                    <li class="list-item"> 
                      <label class="time-do" for="Dinner"> <span class="time">20:00</span><span class="name">Dinner</span></label>
                      <div class="action-checked">
                        <input class="form-check-input" id="Dinner" type="checkbox" value="" aria-label="..."/>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Calorie</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times fa-fw"></i></button>
            </div>
            <div class="modal-body">
              <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" type="text" placeholder="Calorie"/>
                <label for="floatingInput">Calorie </label>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-white" type="button" data-bs-dismiss="modal">Close</button>
              <button class="btn btn-green" type="button">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ url('/public') }}/js/jquery-3.6.0.min.js"> </script>
      <script src="{{ url('/public') }}/js/bootstrap.min.js"> </script>
      <script src="{{ url('/public') }}/js/Main.js"> </script>
      <script src="{{ url('/public') }}/js/apexcharts.min.js"> </script>
      <script src="{{ url('/public') }}/js/JsChart.js"> </script>
</body>
</html>

@endsection