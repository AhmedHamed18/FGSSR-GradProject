@extends('layout.header')

@section('content')
      <section class="Register training">
        {{-- ***************************Start Of Form ****************************************************************************** --}}
        <form method="POST" action="{{ route('register.post') }}">
          @csrf
        <div class="box-setup" id="Register_module"> 
          <h3 class="text-center">What are we interested in focusing on?</h3>
          <input type="hidden" name="interestedIn" id="interestedIn" value="">
          <div class="form-check">
            <input class="form-check-input" id="exercises_nutrition" type="radio" 
            @if (Session::get('userData.interestedIn')=="exercises_nutrition")
              checked
            @endif 
            name="flexRadioDefault"/>
            <label class="form-check-label" for="exercises_nutrition">
              <div class="label-body"> 
                <h4>Exercises and Nutrition</h4>
                <p>Ready to commit to an exercise and nutrition program appropriate to your goal and time</p>
              </div>
              <div class="label-image">
                 <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 504">
                  <path d="M511.76,302.06,504,271V200a8.06,8.06,0,0,0-1.14-4.12L480,157.79V112.5a55.74,55.74,0,0,0-35.2-52L396.07,41l-8.39-6.71A120.58,120.58,0,0,0,320,8.26V0H304V16a8.64,8.64,0,0,0,8.71,8,104.35,104.35,0,0,1,55.36,16H336a8,8,0,0,0-3.58.84L270.11,72A39.7,39.7,0,0,0,256,83.75,39.7,39.7,0,0,0,241.89,72L179.58,40.84A8,8,0,0,0,176,40H144a104.85,104.85,0,0,1,56-16,8,8,0,0,0,8-8V0H192V8.22A120.53,120.53,0,0,0,124.32,34.3L116,41,67.2,60.5a55.72,55.72,0,0,0-35.2,52v45.29L9.14,195.88A8.06,8.06,0,0,0,8,200v71l-7.76,31A7.87,7.87,0,0,0,0,304v96a8.24,8.24,0,0,0,.28,2.1l24,88a8.09,8.09,0,0,0,2.06,3.56l8,8A8,8,0,0,0,40,504H88a8.4,8.4,0,0,0,1.32-.11,8,8,0,0,0,6.57-9.21l-7.75-46.54,15.7-78.57A7.59,7.59,0,0,0,104,368h0V305.9l15.16-30.32A8.08,8.08,0,0,0,120,272V254.93l9.12,6.09,14.6,51.12-7.48,29.92A7.87,7.87,0,0,0,136,344v1.69a39.86,39.86,0,0,0,6.08,21.18C134.49,375.3,120,393.3,120,408v22.1L96.84,476.42A8.08,8.08,0,0,0,96,480v16a8,8,0,0,0,8,8H408a8,8,0,0,0,8-8V480a8,8,0,0,0-.88-3.58L392,430.18V408c0-14.7-14.5-32.72-22.09-41.14A39.86,39.86,0,0,0,376,345.69V344a7.69,7.69,0,0,0-.24-1.91l-7.48-29.92,14.6-51.11L392,255v17a8.07,8.07,0,0,0,.8,3.58L408,306v62h0a7.88,7.88,0,0,0,.15,1.6l15.7,78.54-7.75,46.54A8.4,8.4,0,0,0,416,496a8,8,0,0,0,8,8h48a8,8,0,0,0,5.66-2.34l8-8a8.09,8.09,0,0,0,2.06-3.56l24-88A8.24,8.24,0,0,0,512,400V304A7.87,7.87,0,0,0,511.76,302.06ZM264,107.78a23.9,23.9,0,0,1,13.26-21.47l56.45-28.22,45.23,58.15A24.15,24.15,0,0,1,384,131v21.47a24.11,24.11,0,0,1-2.53,10.73l-15.36,30.71A39.8,39.8,0,0,1,330.34,216H294.62a8.07,8.07,0,0,1-5.65-2.34L271,195.71a24.14,24.14,0,0,1-7-17Zm-8,95a39.5,39.5,0,0,0,3.72,4.27L277.66,225a23.79,23.79,0,0,0,17,7h35.72a56,56,0,0,0,5.66-.27v13l-25,25a8.07,8.07,0,0,1-5.65,2.34H272a8,8,0,0,1-8-8V232H248v32a8,8,0,0,1-8,8H206.62a8.07,8.07,0,0,1-5.65-2.34l-25-25v-13a56,56,0,0,0,5.66.27h35.72a23.79,23.79,0,0,0,17-7L252.28,207A39.5,39.5,0,0,0,256,202.75ZM256,344H209.89a8,8,0,0,1-7.15-4.42l-7.55-15.08a23.9,23.9,0,0,0,12.5,3.5H240a23.87,23.87,0,0,0,16-6.12A23.87,23.87,0,0,0,272,328h32.31a23.88,23.88,0,0,0,12.5-3.51l-7.55,15.09a8,8,0,0,1-7.15,4.42Zm40,16v37.4a8,8,0,0,1-.41,2.51L282.5,439.2a29.91,29.91,0,0,1-8.27.8H229.76l-13.37-40.06a8.07,8.07,0,0,1-.41-2.53V360h80Zm14.56-51a8,8,0,0,1-6.25,3H272a8,8,0,0,1-8-8V288H248v16a8,8,0,0,1-8,8H207.69a7.93,7.93,0,0,1-6.24-3L192,297.19V296h-.95L176,277.19v-9.88L189.66,281a23.79,23.79,0,0,0,17,7H240a23.87,23.87,0,0,0,16-6.12A23.87,23.87,0,0,0,272,288h33.38a23.79,23.79,0,0,0,17-7L336,267.31v9.88L321,296H320v1.19ZM178.29,58.09l56.45,28.22A23.9,23.9,0,0,1,248,107.78v71a24.14,24.14,0,0,1-7,17L223,213.66a8.07,8.07,0,0,1-5.65,2.34H181.66a39.8,39.8,0,0,1-35.77-22.11l-15.36-30.71A24.08,24.08,0,0,1,128,152.45V131a24.15,24.15,0,0,1,5.06-14.74ZM72.11,449.32,78.55,488H43.31l-4.15-4.16L16,398.93V305l7.76-31A7.87,7.87,0,0,0,24,272V202.22L40.35,175,48,186.42V206.7L32.42,253.47A7.81,7.81,0,0,0,32,256a46.77,46.77,0,0,0,24,40.85V312a8,8,0,0,0,1.06,4l30.51,53.34L72.16,446.4A8,8,0,0,0,72.11,449.32ZM88,337.88l-16-28v-6.52l16,6.15ZM104.24,238a8.35,8.35,0,0,0-.22,2h0v30.11L92.06,293.94,65,283.58a30.66,30.66,0,0,1-17-26.36l15.58-46.69A7.81,7.81,0,0,0,64,208V187.85L97.6,161l17,5.71a39.29,39.29,0,0,0,1.59,3.66l3.29,6.59ZM112,131v17.94l-13.47-4.49A8,8,0,0,0,91,145.78L57.82,172.33,48,157.6V112.5A39.8,39.8,0,0,1,73.14,75.36L121.54,56h38.11l-39.22,50.42A40.17,40.17,0,0,0,112,131Zm31.7,122.79a8.09,8.09,0,0,0-3.26-4.46l-19.31-12.87,9.38-37.53,1.07,2.13A55.67,55.67,0,0,0,160,227.68V280a8,8,0,0,0,1.75,5L176,302.81V320a8.08,8.08,0,0,0,.84,3.58l11.58,23.16A23.9,23.9,0,0,0,200,357.88V397.4a24,24,0,0,0,1.24,7.6l10.57,31.71-.7-.17a16,16,0,0,1-12-14.06,100,100,0,0,0-7.93-34.06,50.74,50.74,0,0,0-25.36-21,24,24,0,0,1-13.8-21.7l7.76-31.78a8.07,8.07,0,0,0-.06-4.14ZM136,408c0-7.33,8.94-20.23,17.13-29.51a39.77,39.77,0,0,0,6,3.45,37.44,37.44,0,0,1,17.76,13.67A87.66,87.66,0,0,1,183.15,424a32.14,32.14,0,0,0,4.79,14.05c-29.79-2.88-45.52-8.23-51.94-11Zm264,73.89V488H112v-6.11l19.67-39.33c12.72,5.05,41.88,13.2,97.9,13.43h44.66c1.58,0,3.59,0,5.77-.17V456c57.57,0,87.38-8.3,100.3-13.43ZM376,408v19.06c-6.49,2.77-22.21,8.11-51.92,11A32,32,0,0,0,328.85,424a87.57,87.57,0,0,1,6.31-28.42,37.32,37.32,0,0,1,17.76-13.67,39.51,39.51,0,0,0,5.93-3.44C367,387.75,376,400.67,376,408Zm-4.44-158.66a8.09,8.09,0,0,0-3.26,4.46l-16,56a8.07,8.07,0,0,0-.06,4.14L360,345v.71a24,24,0,0,1-13.84,21.7,50.74,50.74,0,0,0-25.36,21,100,100,0,0,0-7.93,34.06,16,16,0,0,1-12,14.06l-.67.17L310.77,405a24,24,0,0,0,1.23-7.6V357.91a23.91,23.91,0,0,0,11.62-11.17l11.58-23.16A8.07,8.07,0,0,0,336,320V302.81L350.25,285a8,8,0,0,0,1.75-5V227.68A55.67,55.67,0,0,0,380.42,201l1.06-2.12,9.39,37.55Zm20-142.94L352.36,56h38.1l48.4,19.35A39.83,39.83,0,0,1,464,112.5v45.1l-9.82,14.69L421,145.74a8,8,0,0,0-7.53-1.35L400,148.88V131A40.14,40.14,0,0,0,391.57,106.4ZM419.9,293.93,408,270.11V240h0a8,8,0,0,0-.22-1.94l-15.28-61.12,3.3-6.6a40.09,40.09,0,0,0,1.6-3.7l17-5.67L448,187.85V208a8.11,8.11,0,0,0,.44,2.53L464,257.22a30.38,30.38,0,0,1-16.34,26Zm4.1,15.58,16-6.18v6.54l-16,28Zm72,89.42-23.16,84.91L468.69,488H433.45l6.44-38.71a8,8,0,0,0-.05-2.89l-15.41-77L454.94,316a8,8,0,0,0,1.06-4V296.89A46.56,46.56,0,0,0,480,256a7.81,7.81,0,0,0-.42-2.53L464,206.7V186.42L471.65,175,488,202.22V272a7.87,7.87,0,0,0,.24,1.94L496,305Z"/><path d="M236.69,64a27.3,27.3,0,0,0,38.62,0l18.35-18.34A8,8,0,0,0,296,40V0H280V36.69l-16,16a11.57,11.57,0,0,1-16,0l-16-16V0H216V40a8,8,0,0,0,2.34,5.66Z"/></svg></div>
            </label>
          </div>
          <div class="form-check">
            
            <input class="form-check-input" id="exercises" type="radio" 
            @if (Session::get('userData.interestedIn')=="exercises")
              checked
            @endif
            name="flexRadioDefault"/>
            <label class="form-check-label" for="exercises">
              <div class="label-body"> 
                <h4>Exercise Program</h4>
                <p>You are interested in taking a detailed exercise program based on your routine and needs</p>
              </div>
              <div class="label-image">
                 <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs>
                   <style>.cls-1{fill:#1d1d1b;}
                    </style></defs>
                   <path class="cls-1" d="M500.27,139h0l-35.36-35.35L500.27,68.3a10,10,0,0,0,0-14.15L457.85,11.73a10,10,0,0,0-14.15,
                   0L408.33,47.09,373,11.73a40,40,0,0,0-56.57,0l-15,15a40,40,0,0,0-48.61,62.76l56.57,56.58L146.1,309.33,89.52,252.76a40,40,0,
                   0,0-62.76,48.61l-15,15a40,40,0,0,0,0,56.57l35.36,35.36L11.73,443.7a10,10,0,0,0,0,14.15l42.42,42.42a10,10,0,0,0,14.15,
                   0l35.37-35.36L139,500.27a40,40,0,0,0,56.57,0l15-15a40,40,0,0,0,48.61-62.76L202.67,365.9l48.85-48.85a10,10,0,0,
                   0-14.15-14.14l-48.85,48.85-28.28-28.28L323.48,160.24l28.28,28.28L301,239.29a10,10,0,1,0,14.14,14.15l50.77-50.77,
                   56.58,56.57a40,40,0,0,0,62.76-48.61l15-15A40,40,0,0,0,500.27,139Zm-439,340L33,450.77l28.28-28.29,28.29,28.29Zm120.22,
                   7.07a20,20,0,0,1-28.28,0L25.87,358.83a20,20,0,0,1,0-28.28L40,316.4,195.6,472Zm63.65-49.51a20,20,0,0,1-28.28,28.3h0L47.08,
                   295.18a20,20,0,0,1,28.3-28.28ZM450.77,32.94l28.29,28.29L450.77,89.52,422.48,61.23ZM464.91,245.1a20,20,0,0,1-28.29,0L266.9,
                   75.38a20,20,0,1,1,28.28-28.29L464.91,216.82A20,20,0,0,1,464.91,245.1Zm21.21-63.65L472,195.6,316.4,40l14.15-14.14a20,20,0,0,
                   1,28.28,0l127.3,127.3A20,20,0,0,1,486.12,181.45Z"/>
                  </svg>
                </div>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="nutrition" type="radio" 
            @if (Session::get('userData.interestedIn')=="nutrition")
              checked
            @endif
            name="flexRadioDefault"/>
            <label class="form-check-label" for="nutrition">
              <div class="label-body"> 
                <h4>Nutrition Program</h4>
                <p>I don't have a lot of time to exercise and need a proper diet for you</p>
              </div>
              <div class="label-image">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 448">
                  <path d="M366.62,97h64V385h-64Z" transform="translate(-30.62 -1)"/>
                  <path d="M430.62,385h-64l16,32h32Z" transform="translate(-30.62 -1)"/>
                  <path d="M382.62,417l8.85,17.69a8,8,0,0,0,14.31,0L414.62,417Z" transform="translate(-30.62 -1)"/>
                  <path d="M414.62,33h-32a16,16,0,0,0-16,16V81h64V49A16,16,0,0,0,414.62,33Z" transform="translate(-30.62 -1)"/>
                  <path d="M318.62,33h-256a32,32,0,0,0-32,32V417a32,32,0,0,0,32,32h256a32,32,0,0,0,32-32V65A32,32,0,0,0,318.62,33Zm12.93,384a16,16,0,0,1-16,16h-256a16,16,0,0,1-16-16V65a16,16,0,0,1,16-16h256a16,16,0,0,1,16,16Z" transform="translate(-30.62 -1)"/>
                  <path d="M254.62,33h-16V25a24,24,0,0,0-24-24h-48a24,24,0,0,0-24,24v8h-16a16,16,0,0,0-16,16V65a16,16,0,0,0,16,16h128a16,16,0,0,0,16-16V49A16,16,0,0,0,254.62,33Zm-120,32a8,8,0,1,1,8-8A8,8,0,0,1,134.62,65Zm112,0a8,8,0,1,1,8-8A8,8,0,0,1,246.62,65Z" transform="translate(-30.62 -1)"/>
                  <circle cx="64" cy="280" r="16"/>
                  <path d="M294.62,289h-160a8,8,0,0,1,0-16h160a8,8,0,0,1,0,16Z" transform="translate(-30.62 -1)"/>
                  <circle cx="64" cy="320" r="16"/><path d="M294.62,329h-160a8,8,0,0,1,0-16h160a8,8,0,0,1,0,16Z" transform="translate(-30.62 -1)"/>
                  <circle cx="64" cy="360" r="16"/>
                  <path d="M294.62,369h-160a8,8,0,0,1,0-16h160a8,8,0,0,1,0,16Z" transform="translate(-30.62 -1)"/>
                  <circle cx="64" cy="400" r="16"/>
                  <path d="M294.62,409h-160a8,8,0,0,1,0-16h160a8,8,0,0,1,0,16Z" transform="translate(-30.62 -1)"/>
                  <circle cx="160" cy="176" r="64"/><circle cx="160" cy="176" r="48"/>
                  <path d="M270.62,129h24v48h-24Z" transform="translate(-30.62 -1)"/>
                  <path d="M86.62,153h24v24h-24Z" transform="translate(-30.62 -1)"/>
                  <path d="M270.62,177h24v52a12,12,0,0,1-24,0Z" transform="translate(-30.62 -1)"/>
                  <path d="M86.62,177h24v52a12,12,0,0,1-24,0Z" transform="translate(-30.62 -1)"/>
                  <path d="M282.62,161a20,20,0,0,1-20-20v-8a20,20,0,0,1,40,0v8A20,20,0,0,1,282.62,161Z" transform="translate(-30.62 -1)"/>
                  <path d="M114.62,113a4,4,0,0,0-4,4v28h-8V117a4,4,0,0,0-8,0v28h-8V117a4,4,0,0,0-8,0v36a8,8,0,0,0,8,8h24a8,8,0,0,0,8-8V117A4,4,0,0,0,114.62,113Z" transform="translate(-30.62 -1)"/>
                </svg>
              </div>
            </label>
          </div>
          <div class="event text-center">
            {{-- <a class="btn text-center mx-3 btn-green next" id="registerNextButton" data-value="{{ route('register2.get') }}">Next</a> --}}
            <button type="submit" class="btn text-center mx-3 btn-green next" id="registerNextButton">Next</button>
            @error('interestedIn')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </form>
         {{-- ***************************End Of Form ****************************************************************************** --}}
          {{-- <script src="js/jquery-3.6.0.min.js"> </script>
          <script src="js/bootstrap.min.js"> </script>
          <script src="js/Main.js"> </script> --}}

        </div>
      </section>
      <script src="{{ url('/public') }}/js/jquery-3.6.0.min.js"> </script>
      <script src="{{ url('/public') }}/js/bootstrap.min.js"> </script>
      <script src="{{ url('/public') }}/js/Main.js"> </script>
      <script>
        $(document).ready(function(){
     
            $('.event a').click(function() {
                var DataValue = $(this).attr('data-value');
                //-$('.operation').addClass('show').siblings().not('.filter-container').slideUp(500).removeClass('show');
                $('#Register_module').load(DataValue);
                console.log("hello");
                console.log(DataValue);
        
            });
            $('input[type="radio"]').click(function(){
                if($(this).is(":checked")){
                console.log("Checkbox is checked.");
                $(this).parent('.form-check').addClass('checked').siblings().removeClass('checked');
            }
            else if($(this).is(":not(:checked)")){
                console.log("Checkbox is unchecked.");
                }
            });

            // set value for hidden input of form
            // nutrition,exercises,exercises_nutrition
            $('#exercises_nutrition').click(function(){
              $('#interestedIn').val("exercises_nutrition");
            });
            $('#exercises').click(function(){
              $('#interestedIn').val("exercises");
            });
            $('#nutrition').click(function(){
              $('#interestedIn').val("nutrition");
            });
      });
      </script>
    </body>
  </html>

  @endsection