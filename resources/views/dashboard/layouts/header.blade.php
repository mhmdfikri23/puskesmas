<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Dashboard Puskesmas</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> --}}
  

    <div class="dropdown ms-auto">
      <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span data-feather="menu"></span>
        Menu
        </button>
        <ul class="dropdown-menu dropdown-menu-dark bg-dark">
          <li> <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-0 bg-dark border-0"><span data-feather="log-out"></span> Logout</button>
            </form>
          </li>
          <li><hr class="dropdown-divider"></li>
          <li><a href="/posts" class="text-decoration-none text-light"><span data-feather="hexagon"></span> Website</a></li>
      </ul>
    </div>


  
  {{-- <div class="navbar-nav">
    <div class="nav-item text-nowrap">
          
  


        <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 bg-dark border-0"><span data-feather="log-out"></span> Logout</button>
        </form>
    </div>
  </div> --}}
</header>