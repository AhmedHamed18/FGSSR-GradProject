@extends('layout.header')

@section('content')
      <section class="overview"> 
        <div class="container-fluid"> 
          <div class="row"> 
            <div class="col-lg-4">
              <div class="box-Training"> 
                <h4 class="header">Diet</h4>
                <ul class="list-unstyled groub-day">
                  <li class="link-list active" id="saturday">Sat</li>
                  <li class="link-list" id="sunday">Sun</li>
                  <li class="link-list" id="monday">Mon</li>
                  <li class="link-list" id="tuesday">Tues</li>
                  <li class="link-list" id="wednesday">Wed</li>
                  <li class="link-list" id="thursday">Thurs</li>
                  <li class="link-list" id="friday">Fri</li>
                </ul>
                <div class="card-list"> 
                  <div class="card-header" >
                    <h5>Breakfast</h5>
                    <div class="icon"> <i class="fas fa-angle-down fa-fw"></i></div>
                  </div>
                  <div class="card-body" id="breakfastCardBody">
                    {{-- <div class="card-item"> 
                      <div class="image"> <img class="w-100" src="../images/Training/1.png" alt=""/></div>
                      <div class="card-item-body"> 
                        <div class="info"> 
                          <h5>Eggs, But Dress Them Up & Make Them Fancy.</h5><span>cream-laced baked egg recipe is an easy and luxurious way to enjoy brunch at home.</span>
                          <div class="weight"> <span class="weight-number">250 mg</span><span class="calaries">581 kci</span></div>
                        </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                      </div>
                    </div> 
                    <div class="card-item"> 
                      <div class="image"> <img class="w-100" src="../images/Training/2.png" alt=""/></div>
                      <div class="card-item-body"> 
                        <div class="info"> 
                          <h5>Eggs, But Dress Them Up & Make Them Fancy.</h5><span>cream-laced baked egg recipe is an easy and luxurious way to enjoy brunch at home.</span>
                          <div class="weight"> <span class="weight-number">250 mg</span><span class="calaries">581 kci</span></div>
                        </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                      </div>
                    </div>
                  </div>
                   --}}
                </div>
               
                <div class="card-list">   
                  <div class="card-header">
                    <h5>Lunch </h5>
                    <div class="icon"> <i class="fas fa-angle-down fa-fw"></i></div>
                  </div>
                  <div class="card-body" id="lunchCardBody">
                    {{-- <div class="card-item"> 
                      <div class="image"> <img class="w-100" src="../images/Training/3.png" alt=""/></div>
                      <div class="card-item-body"> 
                        <div class="info"> 
                          <h5>Eggs, But Dress Them Up & Make Them Fancy.</h5><span>cream-laced baked egg recipe is an easy and luxurious way to enjoy brunch at home.</span>
                          <div class="weight"> <span class="weight-number">250 mg</span><span class="calaries">581 kci</span></div>
                        </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                      </div>
                    </div>
                    <div class="card-item"> 
                      <div class="image"> <img class="w-100" src="../images/Training/4.png" alt=""/></div>
                      <div class="card-item-body"> 
                        <div class="info"> 
                          <h5>Eggs, But Dress Them Up & Make Them Fancy.</h5><span>cream-laced baked egg recipe is an easy and luxurious way to enjoy brunch at home.</span>
                          <div class="weight"> <span class="weight-number">250 mg</span><span class="calaries">581 kci</span></div>
                        </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <div class="card-list">   
                  <div class="card-header">
                    <h5>Dinner </h5>
                    <div class="icon"> <i class="fas fa-angle-down fa-fw"> </i></div>
                  </div>
                  <div class="card-body" id="dinnerCardBody">
                    {{-- <div class="card-item"> 
                      <div class="image"> <img class="w-100" src="../images/Training/4.png" alt=""/></div>
                      <div class="card-item-body"> 
                        <div class="info"> 
                          <h5>Eggs, But Dress Them Up & Make Them Fancy.</h5><span>cream-laced baked egg recipe is an easy and luxurious way to enjoy brunch at home.</span>
                          <div class="weight"> <span class="weight-number">250 mg</span><span class="calaries">581 kci</span></div>
                        </div><a class="play-icon" href=""> <i class="far fa-play-circle fa-fw fa-2x"></i></a>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">      </div>
          </div>
        </div>
      </section>
      <script src="{{ url('/public') }}/js/jquery-3.6.0.min.js"> </script>
      <script src="{{ url('/public') }}/js/bootstrap.min.js"> </script>
      <script src="{{ url('/public') }}/js/Main.js"> </script>
      <script>
        $( document ).ready(function() {
          $('#nutritionAsideLink').addClass('active').siblings().removeClass('active');
        });

        $('.groub-day .link-list').click(function() {
            $(this).addClass('active').siblings().removeClass('active');
        
        });
       

        $('.card-list  .card-header .icon').click(function() {
            $(this).toggleClass('rotate').closest('.card-list').find('.card-body').slideToggle(500);
        
        });
        // ajax request
        $('#saturday').click(function(event){
            var weekday="saturday";
            getDayNutrition(weekday,event);
        });
        $('#sunday').click(function(event){
            var weekday="sunday";
            getDayNutrition(weekday,event);
        });
        $('#monday').click(function(event){
            var weekday="monday";
            getDayNutrition(weekday,event);
        });
        $('#tuesday').click(function(event){
            var weekday="tuesday";
            getDayNutrition(weekday,event);
        });
        $('#wednesday').click(function(event){
            var weekday="wednesday";
            getDayNutrition(weekday,event);
        });
        $('#thursday').click(function(event){
            var weekday="thursday";
            getDayNutrition(weekday,event);
        });
        $('#friday').click(function(event){
            var weekday="friday";
            getDayNutrition(weekday,event);
        });

        function getDayNutrition(weekday,event){
            event.preventDefault();
            $.ajax({
            url: "{{route('nutrition.program')}}",
            type:"GET",
            data:{
            'weekday':weekday, 
            'authUserID':1,            
            },
            success:function(response){
            if(response) {
                var div = document.getElementById('breakfastCardBody');
                $("#breakfastCardBody").empty();
                div.innerHTML += response.breakfast;
                var div = document.getElementById('lunchCardBody');
                $("#lunchCardBody").empty();
                div.innerHTML += response.lunch;
                var div = document.getElementById('dinnerCardBody');
                $("#dinnerCardBody").empty();
                div.innerHTML += response.dinner;
            }
            },
            error: function(error) {
              console.log('error');
            console.log(error);
            }
            })
        }
      </script>
    </body>
  </html>

  @endsection