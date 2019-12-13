<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>AnimalLand</title>



  <!-- Custom fonts for this template -->
  <script src="https://kit.fontawesome.com/821a9d9809.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/landing-page.min.css')}}" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

  <!-- Navigation -->
  <nav class="bg navbar navbar-light  static-top">
   
   
       
       
        
            @if(Auth::check())
            @if(Auth::user()->role->role=="Admin")
            
          <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown mr-auto">
                <button id="navbarDropdown" class=" btn btn-success  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                </button>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <button class=" btn btn-success" href="{{ route('showAnimals')}}">Nos Animaux</button>
            </li>
            
            <li class="nav-item">
                <button class=" btn btn-success" href="{{ route('showRaces')}}">Nos Races</button>
            </li>
            <li class="nav-item">
                <button class=" btn btn-success" href="{{ route('createAnimal')}}">Ajouter Animaux</button>
            </li>
            <li class="nav-item">
            <button class=" btn btn-success" href="{{ route('createRace')}}">Ajouter Races</button>
            </li>
          </ul>
            @else
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <button id="navbarDropdown btn btn-success" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                </button>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <button class="dropdown-item btn btn-success" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">  
            <li class="nav-item">
                <button class=" btn btn-success" href="{{ route('showAnimals')}}">Nos Animaux</button>
            </li>
            
            <li class="nav-item">
                <button class=" btn btn-success" href="{{ route('showRaces')}}">Nos Races</button>
            </li>
          </ul>
            @endif
            @else
            <li class="nav-item">
                <button class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</button>
            </li>
            <li class="nav-item">
                <button class=" btn btn-success" href="{{ route('showAnimals')}}">Nos Animaux</button>
            </li>
            @endif
        </ul>
        
</nav>


  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Bienvenue sur AnimalLand</h1>

        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        </div>
      </div>
    </div>
  </header>

  
  <section class="content bg-light text-center">
   @yield('content')
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
