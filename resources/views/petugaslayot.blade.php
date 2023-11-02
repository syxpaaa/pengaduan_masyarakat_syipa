<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Pengaduan</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css">
    <link rel="stylesheet" href="\css\bootstrap-icons.css">
    <link rel="stylesheet" href="\layout\css\style.css">
    
</head>
<body>
  <nav class="navbar" style="background-color: #abd9fa;">
  <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header" style="background-color: #abd9fa;">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Lapor!!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('petugas')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('validasi')}}">validasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('tanggapan')}}">Tanggapan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('register')}}">registrasi</a>
        </li>
          </ul>
        </div>
      </div>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control form-control-dark text-bg-light" placeholder="Search..." aria-label="Search">
            </form>
            <a href="{{url('keluar')}}" class="btn btn-light mx-2 ">Keluar</a>
          </div>
        </div>
  </nav>
  <div class="container-fluid mt-4">
    @yield('content')
</div>

      <script src="\js\bootstrap.min.js"></script>
</body>
</html>