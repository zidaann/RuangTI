<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    @auth
    <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="../assets/img/ruangti.png" alt="logo" class="img-fluid " >
      </a>
    @else
    <a href="/" class="logo d-flex align-items-center">
        <img src="../assets/img/ruangti.png" alt="logo" class="img-fluid " >
      </a>
    @endauth
    {{-- alternatif --}}
    {{-- {{request()->is('/events') ? 'active' : ''}} --}}
    {{-- {{ Request::is('about') ? 'active' : '' }} --}}
    <nav id="navbar" class="navbar">
        <ul>
            
            {{-- <li><a class="getstarted scrollto" href="">Login</a></li> --}}
            @auth
            <li><a class="nav-link {{request()->is('dashboard.courses') ? 'active' : ''}}" href="/dashboard/courses">Course</a></li>
            <li><a class="nav-link {{request()->is('dashboard.handbooks') ? 'active' : ''}}" href="/dashboard/handbooks">Handbook</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/img/login/login.png" width="24" height="24" class="rounded-circle me-2"> {{ auth()->user()->name }} 
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            {{-- <li><div class="dropdown mx-4">
                <img src="../assets/img/login/login.png" width="24" height="24" class="rounded-circle">
              <ul class="dropdown-menu text-small shadow" aria-labelledby="logout">
                <li>
                  <form action="/logout">
                    <button type="submit" class="dropdown-item"> Logout</button>
                  </form>
                </li>
              </ul>
            </div></li> --}}

            @else
              <li><a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="/">Home</a></li>
              <li><a class="nav-link {{request()->is('courses') ? 'active' : ''}}" href="/login">Courses</a></li>
              <li><a class="nav-link {{request()->is('handbooks') ? 'active' : ''}}" href="/login">Handbooks</a></li>
              <li><a class="nav-link {{request()->is('events') ? 'active' : ''}}" href="/events">Events</a></li>
              <li><a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="/about">About</a></li>
                <li><a class="nav-link getstarted {{request()->is('login') ? 'active' : ''}}" href="/login" >Login</a></li>
            @endauth
            
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header>

