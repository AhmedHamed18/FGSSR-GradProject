@extends('layout.header')

@section('content')

<section class="Register training">
  {{-- ***************************Start Of Form ****************************************************************************** --}}
  <form method="POST" action="{{ route('register2.post') }}">
    @csrf
  <div class="box-setup" id="Register_module">
      <div class="d-flex justify-content-evenly mb-4">
        <div class="form-check gender">
          <input type="hidden" name="gender" id="gender" value="">
          <input class="form-check-input" id="gender_man" type="radio" name="genderSelect"
          @if (Session::get('userData.gender')=="male")
              checked
          @endif 
          />
          <label class="form-check-label" for="gender_man">
            <div class="label-image"> <i class="fas fa-male fa-fw fa-4x"></i></div>
            <div class="label-body"> 
              <p>Male</p>
            </div>
          </label>
        </div>
        <div class="form-check gender">
          <input class="form-check-input" id="gender_woman" type="radio" name="genderSelect"
          @if (Session::get('userData.gender')=="female")
              checked
          @endif 
          />
          <label class="form-check-label" for="gender_woman">
            <div class="label-image"> <i class="fas fa-female fa-fw fa-4x"></i></div>
            <div class="label-body"> 
              <p>Female</p>
            </div>
          </label>
        </div>
      </div>
      @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="form-floating mb-4">
        <input class="form-control" id="floatingInput" type="text" placeholder="Full Name" name="first_name"
        @if (!empty(Session::get('userData.first_name')))
             value={{Session::get('userData.first_name')}}
        @endif 
        />
        <label for="floatingInput">First Name </label>
        <div class="icon"> <i class="fas fa-user fa-fw fa-2x"></i></div>
      </div>
      @error('first_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="form-floating mb-4">
        <input class="form-control" id="floatingInput" type="text" placeholder="Full Name" name="last_name"
        @if (!empty(Session::get('userData.last_name')))
             value={{Session::get('userData.last_name')}}
        @endif 
        />
        <label for="floatingInput">Last Name </label>
        <div class="icon"> <i class="fas fa-user fa-fw fa-2x"></i></div>
      </div>
      @error('last_name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="form-floating mb-4">
        <input class="form-control" id="floatingInput" type="number" placeholder="Phone Number" name="telephone"
        @if (!empty(Session::get('userData.telephone')))
             value={{Session::get('userData.telephone')}}
        @endif
        />
        <label for="floatingInput">Your Phone</label>
        <div class="icon"> <i class="fas fa-mobile-alt fa-fw fa-2x"></i></div>
      </div>
      @error('telephone')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <div class="event text-center">  
        <button class="btn text-center mx-3 btn-white" href="#" data-value="{{ route('register.get') }}">Back</button>
        <button type="submit" class="btn text-center mx-3 btn-green next" id="registerNextButton">Next</button>
      </div>

</div>
</form>
</div>
</section>
<script src="{{ url('/public') }}/js/jquery-3.6.0.min.js"> </script>
<script src="{{ url('/public') }}/js/bootstrap.min.js"> </script>
<script src="{{ url('/public') }}/js/Main.js"> </script>

<script>
  $(document).ready(function(){
      // $('.event a').click(function() {
      // var DataValue = $(this).attr('data-value');
      // //-$('.operation').addClass('show').siblings().not('.filter-container').slideUp(500).removeClass('show');
      // $('#Register_module').load(DataValue);
      // console.log(DataValue);
  

      $('input[type="radio"]').click(function(){
          if($(this).is(":checked")){
          console.log("Checkbox is checked.");
          $(this).parent('.form-check').addClass('checked').siblings().removeClass('checked');
      }
      else if($(this).is(":not(:checked)")){
          console.log("Checkbox is unchecked.");
          }
      });

      $('#gender_man').click(function(){
        $('#gender').val("male");
        console.log("male selected");
      });
      $('#gender_woman').click(function(){
        $('#gender').val("female");
        console.log("female selected");
      });

  });
</script>

@endsection