@extends('layout.header')

@section('content')

<section class="Register training">
  {{-- ***************************Start Of Form ****************************************************************************** --}}
  <form method="POST" action="{{ route('register4.post') }}">
    @csrf
    <div class="box-setup" id="Register_module">
          {{-- ******************************Start Of Changing Part ********************** --}}
     
        <h3 class="text-center">Where do you exercise?</h3>
        <div class="form-check">
          <input class="form-check-input" id="exercises_nutrition" type="radio" name="flexRadioDefault"/>
          <label class="form-check-label" for="exercises_nutrition">
            <div class="label-body"> 
              <h4>I work out at Home</h4>
              <p>Body weight with or without tools</p>
            </div>
            <div class="label-image"> <i class="fas fa-home fa-fw fa-3x"></i></div>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" id="exercises" type="radio" name="flexRadioDefault"/>
          <label class="form-check-label" for="exercises">
            <div class="label-body"> 
              <h4>I work out in the Gym</h4>
              <p>Use free weights and different equipment</p>
            </div>
            <div class="label-image"> <i class="fas fa-dumbbell fa-fw fa-3x"></i></div>
          </label>
        </div>
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

  });
</script>

@endsection