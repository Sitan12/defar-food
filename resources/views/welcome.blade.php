<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<<<<<<< HEAD

=======
<link href="{{asset('css/style.css')}}" rel="stylesheet">
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
        <title>Defar Food</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased ">
<!-- ===========================NAVBAR======================== -->
<<<<<<< HEAD
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
=======
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
    <a class="navbar-brand" href="#">Defar-Food</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<<<<<<< HEAD
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
    @if (Route::has('login'))
      <ul class="navbar-nav">
      @auth
        <li class="nav-item">
             <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
=======
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    @if (Route::has('login'))
      <ul class="navbar-nav">
      <li class="nav-item">
             <a href="{{route('apropos')}}" class="nav-link"> A propros</a>
      </li> 
      <li class="nav-item">
             <a href="{{route('contact')}}" class="nav-link">Contactez-nous</a>
        </li>
      @auth
        <li class="nav-item">
             <a href="{{ url('/home') }}" class="nav-link">Mon compte</a>
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
        </li>    
         @else
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="login" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<<<<<<< HEAD
            LOG IN
=======
            Se connecter
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
          </a>
          <ul class="dropdown-menu" aria-labelledby="login">
           
            <li><a class="dropdown-item" href="{{ route('login') }}">Client</a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}">Assistant_Restaurant</a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}">Livreur</a></li>
          
          </ul>
        </li>
            
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="register" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<<<<<<< HEAD
            REGISTER
=======
            S'inscrire
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
          </a>
          <ul class="dropdown-menu" aria-labelledby="register">
          @if (Route::has('register'))
         
            <li><a class="dropdown-item" href="{{ route('register') }}">Client</a></li>
            <li><a class="dropdown-item" href="{{ route('restaurant.create') }}">Assistant_Restaurant</a></li>
            <li><a class="dropdown-item" href="{{ route('livreur.create') }}">Livreur</a></li>
            @endif
          </ul>
        </li>
<<<<<<< HEAD
        <li class="offset-md-6"><a class="dropdown-item" href="{{ route('login') }}">LOG_ADMIN</a></li>
=======
        <!-- <li class="offset-md-6"><a class="dropdown-item" href="{{ route('login') }}">LOG_ADMIN</a></li> -->
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
        @endauth
      </ul>
      @endif
    </div>
  </div>
</nav>
<<<<<<< HEAD
           </div> 
    </body>
=======
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('photoPlat/im1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Chez DefarFood, le plaisir du partage</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('photoPlat/im2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Le gout de la saveur, Je l'aime et vous?</h5>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('photoPlat/im3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Avec DefarFood, mangez a votre faim avec votre famille</h5>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   
<div class="container py-4">
<h1 class="text-center py-4" style="text-decoration: underline; color:orangered; font-weight:bold; font-size:55px">Nos restaurants</h1>
  <div class="row g-2">
        @foreach ($restaurants as $restaurant)
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
          @if($restaurant->photo!=null)
            <img src="/photoProfile/{{ $restaurant->photo }}" class="card-img-top" alt="plat" height="50%" width="50%">
          @else
          <img src="{{asset('photoProfile/default.jpg')}}" class="card-img-top" alt="plat" height="195px" width="50%">
          @endif
            <div class="card-body">
              <p class="card-text">{{$restaurant->description}}</p>
              <p class="card-text"><span style="float:right; color:orangered">#{{$restaurant->user->name}}</span></p><br/>
                <a href="{{route('plat.liste',$restaurant->user->id)}}" class="btn btn-primary">
                {{ __('Voir nos plats') }}
               </a>
            </div>
          </div>
      </div>
        @endforeach     
  </div>
</div>
    </body>
    <footer style="color: white" class="container-fluid bg-primary m-auto p-2 mt-4">
    <div class="row container m-auto">
      <div class="col-md-4 col-sm-4 col-lg-4 text-center col-auto ">
        <a href="index.php" style=" font-weight:bold; font-size:30px">Defar Food</a>
        <p class="p-4 text-center">Clients, partenaires, le rayonnement de nos références est le meilleur ambassadeur de notre savoir-faire !</p>
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4 col-auto text-center">
        <h3 class="text-uppercase"><strong>A propos</strong></h3> 
        <p class="p-2">
          <a class="text-white" href="index.php" style="text-decoration: none;">
            Accueil
          </a>
        </p>
        <p>
          <a class="text-white" href="index.php#quiSommeNous" style="text-decoration: none;">
          Qui sommes-nous?
          </a>
        </p>
        <p>
          <a class="text-white" href="produit.php#produit" style="text-decoration: none;">
          Nos Restaurants
          </a>
        </p>   
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4 col-auto" id="contact">
        <h3 class="text-uppercase"><strong>Information !</strong></h3>
        <p class="p-2">
        Lieu&nbsp;:&nbsp;Parcelles Rue 52<br>
        Mail&nbsp;:&nbsp;<a href="mailto:defarsci@gmail.com" class="text-white" style="text-decoration: none;">acsfroid@gmail.com</a><br>
        Tel&nbsp;:&nbsp;33 800 22 93<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;77 500 22 18<br>
        </p>
        <h3 class="m-2 d-flex">
          <a class="offset-1" href="https://www.facebook.com/Alliance-Customer-Service-104489741714876/" target="_blank">
            <i class="fab fa-facebook-square" style="color: white"></i>
          </a>
          <a class="offset-1" href="https://www.instagram.com/p/CMUYhVfjNwY/?igshid=3qm1dxu22kqi" target="_blank">
            <i class="fab fa-instagram-square" style="color: white"></i>
          </a>
           <a class="offset-1" href="mailto:acsfroid@gmail.com">
            <button type="button" class="btn border border-1 border-primary bg-white" style="color: #354A9F; font-weight: bold">
              Ecrivez-nous <i class="far fa-envelope"></i>
            </button>
          </a>
        </h3>
      </div>
    </div>
  </footer>
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
</html>
