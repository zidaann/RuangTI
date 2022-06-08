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
      
      <nav id="navbar" class="navbar">
          <ul>
              <li><a class="nav-link {{request()->is('courses') ? 'active' : ''}}" href="/dashboard/courses">Course</a></li>
              <li><a class="nav-link {{request()->is('handbooks') ? 'active' : ''}}" href="/dashboard/handbooks">Handbook</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  
  