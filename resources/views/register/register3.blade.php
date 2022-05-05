@extends('layout.header')

@section('content')

<section class="Register training">
  {{-- ***************************Start Of Form ****************************************************************************** --}}
  <form method="POST" action="{{ route('register3.post') }}">
    @csrf
    <div class="box-setup" id="Register_module">
          {{-- ******************************Start Of Changing Part ********************** --}}
          <div class="form-floating mb-5">
            <input class="form-control" id="floatingInput" type="email" name="email" placeholder="Full Name"
            @if (!empty(Session::get('userData.email')))
              value={{Session::get('userData.email')}}
            @endif 
            />
            <label for="floatingInput">E-mail</label>
            <div class="icon"> <i class="far fa-envelope fa-fw fa-2x"></i></div>
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mb-5">
            <input class="form-control" id="floatingInput" type="text" name="country" placeholder="Full Name"
            @if (!empty(Session::get('userData.country')))
              value={{Session::get('userData.country')}}
            @endif 
            />
            <label for="floatingInput">Your Country</label>
            <div class="icon"> <i class="fas fa-globe fa-fw fa-2x"></i></div>
            @error('country')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mb-5">
            <input class="form-control" id="floatingInput" type="text" name="city" placeholder="Full Name"
            @if (!empty(Session::get('userData.city')))
              value={{Session::get('userData.city')}}
            @endif 
            />
            <label for="floatingInput">Your City</label>
            <div class="icon"> <i class="fas fa-city fa-fw fa-2x"></i></div>
            @error('city')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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