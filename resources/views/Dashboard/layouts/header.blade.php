<header class="navbar navbar-dark navbar-expand-lg sticky-top bg-dark flex-md-nowrap p-1 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Hail Hilal | Blog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
    {{-- <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 bg-dark border-0">
            Logout<span data-feather="log-out"></span>
          </button>
      </form>
      </div>
    </div> --}}
    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown px-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu px-3 border-0" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/"><span data-feather="home"></span> Home</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                <span data-feather="log-out"></span> Logout
                </button>
            </form>
        </ul>
      </li>
      @else
        <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
    </ul>
  </header>