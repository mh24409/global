<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">

    <a class="navbar-brand" href="{{ url('/global') }}">
      Global
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>
      <?php
      $con = mysqli_connect('localhost', 'root', '', 'global');
      $statment = 'select * from types';
      $q = mysqli_query($con, $statment);

      ?>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <ul class="navbar-nav text-uppercase ml-auto">
          @if (Auth::user())
          @if (Auth::user()->role=="admin")
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/adminindex">Dashboard</a>
          </li>
          @endif
          @endif
         

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Recently UpLOADed</a>
          </li>
          
          <li class="nav-item">
            <div class="dropdown">
              <button style="background-color: unset; border: unset" class="nav-link dropdown-toggle"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                AVILABLE TYPES
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php while ($r = mysqli_fetch_array($q)) : ?>
                <a class="dropdown-item" href="/typesproducts/<?= $r['id'] ?>"><?= $r['name'] ?></a>
                <?php endwhile ?>
              </div>
            </div>
          </li>
        </ul>

      </ul>
    </div>
  </div>
</nav>

<div class="btn-group dropup fixed-bottom " style="width: 100px;">
  <button  type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
    <i class="fas fa-user-circle" style="font-size: 25px;"></i>

  </button>

  <div  class="dropdown-menu">
    <!-- Authentication Links -->
    @guest
    <li class="nav-item">
      <i class="fas sign-in-alt" style="font-size: 20px;"></i>
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown">
      <a id="nav-item" class="nav-link " style="color: black !important; " href="#" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fas fa-user-alt" style="font-size: 20px;"></i>
        {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt" style="font-size: 20px;"></i>

          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </li>
    @endguest
  </div>
</div>