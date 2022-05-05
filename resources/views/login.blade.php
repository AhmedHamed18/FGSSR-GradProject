<html lang="en">
    <head>
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Fitness Safe House</title>
      <link rel="shortcut icon" href="{{ url('/public') }}/images/dd.png" type="image/x-icon"/>
      <link rel="icon" href="{{ url('/public') }}/images/dd.png" type="image/x-icon"/>
      <link rel="stylesheet" href="{{ url('/public') }}/css/fontawesome.min.css"/>
      <link rel="stylesheet" href="{{ url('/public') }}/css/bootstrap.css"/>
      <link rel="stylesheet" href="{{ url('/public') }}/css/Style.css"/>
    </head>
    <body> 
      <div class="header-top">
        <div class="container"> 
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="icon-social-media"><a class="icon" href=""> <i class="fa-brands fa-facebook-f fa-fw fa-lg"></i></a><a class="icon" href=""> <i class="fa-brands fa-twitter fa-fw fa-lg"></i></a><a class="icon" href=""> <i class="fa-brands fa-instagram fa-fw fa-lg"></i></a></div>
            </div>
            <div class="col-lg-6 d-flex justify-content-end"><a class="language" href=""> <i class="fa-solid fa-flag fa-fw fa-lg"></i> عربى</a></div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand" href="index.html"> <img src="{{ url('/public') }}/images/fitnessLogo.png" alt=""/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars fa-fw fa-lg"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
              <li class="nav-item"><a class="nav-link Register" href="{{ route('register.get') }}">Register Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="login"> 
        <div class="container"> 
          <div class="row">
            <div class="col-lg-6">
              <div class="Register-box">
                <h4 class="text-center"> <span>Register</span></h4>
                <div class="alert-box"> 
                  <div class="alert-box-body"> 
                    <p>Before the registration process, please do InBody and know the height, Weight, shoulder width and waist width, and please take a front picture and two side pictures for the left side and the right side and a back side picture</p>
                  </div>
                  <div class="icon"> <i class="fas fa-exclamation-triangle fa-fw fa-2x"></i></div>
                </div>
                <div class="div-action text-center"><a class="btn" href="{{ route('register.get') }}"> <i class="fas fa-sign-in fa-fw"></i> Register Now  </a></div>
              </div>
            </div>
            <div class="image"> <img class="w-100" src="{{ url('/public') }}/images/v1008-02.png" alt=""/></div>
            <div class="col-lg-6">
              <div class="login-form"> 
                <h4 class="text-center"> <span>Log In </span></h4>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-floating mb-3 email">
                    <input class="form-control" id="floatingInput" type="email" name="email" placeholder="name@example.com"/>
                    <label for="floatingInput">Email </label>
                  </div>
                  <div class="form-floating password mb-3">
                    <input class="form-control" id="floatingPassword" type="password" name="password" placeholder="Password"/>
                    <label for="floatingPassword">Password</label>
                  </div>
                  @error('credentials')
                      
                          <strong>{{ $message }}</strong>
                    
                  @enderror
                  <div class="d-flex justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" id="flexCheckDefault" type="checkbox" value=""/>
                      <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                    </div><a class="forgot" href="">Forgot Password?</a>
                  </div>
                  <div class="div-action text-center">
                    <button class="btn text-center" type="submit"> <i class="fas fa-sign-in fa-fw"></i> Log In </button>
                  </div>
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="{{ url('/public') }}/js/jquery-3.6.0.min.js"> </script>
      <script src="{{ url('/public') }}/js/bootstrap.min.js"> </script>
      <script src="{{ url('/public') }}/js/Main.js"> </script>
    </body>
  </html>