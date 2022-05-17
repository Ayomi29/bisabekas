<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- Bootstrap icon css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    {{-- My style CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <strong>
          <a class="navbar-brand justify-content-center" href="/">BisaBekas</a>
        </strong>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/">Home</a>
            </li>      
            <li class="nav-item">
              <a class="nav-link {{ ($active === "catalog") ? 'active' : '' }}"  href="/catalog">Catalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === "about") ? 'active' : '' }}"   href="/about">About Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control ms-lg-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light" type="submit"><i class="bi bi-search"></i></button>
          </form>
          <ul class="navbar-nav">
            @auth
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </ul>
            </li>
            @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('container')
    
    <!-- FOOTER -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; 2022 BisaBekas</p>
      
          <ul class="nav col-md-4 justify-content-center">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="/catalog" class="nav-link px-2 text-muted">Catalog</a></li>
            <li class="nav-item"><a href="/about" class="nav-link px-2 text-muted">About Us</a></li>
          </ul>
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-instagram"></i></a></li>
              <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-whatsapp"></i></a></li>
              <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-facebook"></i></a></li>
              <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-envelope"></i></a></li>      
              <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-arrow-up-square-fill"></i></a></li>
          </ul>
        </footer>
    </div>
    {{-- End Footer --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>