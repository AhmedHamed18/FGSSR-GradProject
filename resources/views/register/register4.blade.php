@extends('layout.header')

@section('content')

<section class="Register training">
  {{-- ***************************Start Of Form ****************************************************************************** --}}
  <form method="POST" action="{{ route('register4.post') }}">
    @csrf
    <div class="box-setup" id="Register_module">
          {{-- ******************************Start Of Changing Part ********************** --}}
          <h3 class="text-center">What is the goal you want to achieve?</h3>
          <div class="form-check">
            <input type="hidden" name="goalToAcheive" id="goal" value="">
            <input class="form-check-input" id="looseWeight" type="radio" name="flexRadioDefault"
            @if (Session::get('userData.goalToAcheive')=="looseWeight")
              checked
            @endif 
            />
            <label class="form-check-label" for="looseWeight">
              <div class="label-body"> 
                <h4>Losing weight and Fat</h4>
                <p>I am gaining weight and want to focus on burning fat and losing weight</p>
              </div>
              <div class="label-image"> <i class="fas fa-weight fa-fw fa-3x"></i></div>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="gainMuscle" type="radio" name="flexRadioDefault"
            
            @if (Session::get('userData.goalToAcheive')=="gainMuscle")
              checked
            @endif 
            />
            <label class="form-check-label" for="gainMuscle">
              <div class="label-body"> 
                <h4>Gain muscle Mass</h4>
                <p>My goal is to reach an athletic body to increase muscle mass</p>
              </div>
              <div class="label-image"> <i class="fas fa-dumbbell fa-fw fa-3x"></i></div>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="fitness" type="radio" name="flexRadioDefault"
            @if (Session::get('userData.goalToAcheive')=="fitness")
              checked
             @endif
            />
            <label class="form-check-label" for="fitness">
              <div class="label-body"> 
                <h4>Increase Fitness</h4>
                <p>The goal of increasing physical fitness in general</p>
              </div>
              <div class="label-image"> <i class="fas fa-running fa-fw fa-3x"></i></div>
            </label>
          </div>
          @error('goalToAcheive')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          {{-- ******************************End Of Changing Part ********************** --}}
        <div class="event text-center">  
          <button class="btn text-center mx-3 btn-white" href="#" data-value="{{ route('register2.get') }}">Back</button>
          <button type="submit" class="btn text-center mx-3 btn-green next" id="registerNextButton">Next</button>
        </div>
  </form>
  </div>
</section>
<script src="{{ url('/public') }}/js/jquery-3.6.0.min.js"> </script>
<script src="{{ url('/public') }}/js/bootstrap.min.js"> </script>
<script src="{{ url('/public') }}/js/Main.js"> </script>

<script>
  $(document).ready(function(){
      $('input[type="radio"]').click(function(){
          if($(this).is(":checked")){
          console.log("Checkbox is checked.");
          $(this).parent('.form-check').addClass('checked').siblings().removeClass('checked');
      }
      else if($(this).is(":not(:checked)")){
          console.log("Checkbox is unchecked.");
          }
      });

      $('#looseWeight').click(function(){
        $('#goal').val("looseWeight");
      });
      $('#gainMuscle').click(function(){
        $('#goal').val("gainMuscle");
      });
      $('#fitness').click(function(){
        $('#goal').val("fitness");
      });

  });
</script>

@endsection