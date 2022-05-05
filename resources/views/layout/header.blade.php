
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars fa-fw fa-lg"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link Register" href="{{ route('register.get') }}">Register Us</a></li>
                <li class="nav-item"><a class="nav-link Register" href="{{ route('login') }}">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <aside class="aside-bar"> <a class="link-head-page" href="Overview.html"> <img class="w-100" src="{{ url('/public') }}/images/ddWhite.png" alt=""/></a>
        <ul class="list-unstyled"> 
          <li class=" link-list" id="overviewAsideLink"> <a href="{{ route('overview.page') }}"> 
              <div class="icon"> <i class="fas fa-chart-pie fa-fw fa-2x"></i></div>
              <div class="text">Overview</div></a></li>
          <li class=" link-list" id="trainingAsideLink"> <a href="{{route('training.page') }}"> 
              <div class="icon"> <i class="fas fa-dumbbell fa-fw fa-2x"></i></div>
              <div class="text">Training</div></a></li>
          <li class="link-list " id="nutritionAsideLink"> <a href="{{ route('nutrition.page') }}"> 
              <div class="icon"> <i class="fas fa-utensils fa-fw fa-2x"></i></div>
              <div>Diet</div></a></li>
          <li class=" link-list"> <a href="Chat.html"> 
              <div class="icon"> <i class="far fa-comments fa-fw fa-2x"></i></div>
              <div class="text">Chat</div></a></li>
          <li class=" link-list"> <a href="Challenge.html"> 
              <div class="icon"> <i class="fas fa-medal fa-fw fa-2x"></i></div>
              <div class="text">Challenge</div></a></li>
          <li class=" link-list"> <a href="Settings.html"> 
              <div class="icon"> <i class="fas fa-user-cog fa-fw fa-2x"></i></div>
              <div class="text">Settings</div></a></li>
        </ul>
      </aside>
      @yield('content')