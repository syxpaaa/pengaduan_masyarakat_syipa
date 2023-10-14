<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    @yield('scc')
</head>
<body class="bg-body-secondary">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('pengaduan')}}">Pengaduan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('laporan')}}">Laporan</a>
              </li>
            </ul>
              <a href="{{url('login')}}" class="btn btn-info">Login</a>
              <a href="{{url('registrasi')}}" class="btn btn-info mx-3">Register</a>
          </div>
        </div>
      </nav>
    <div class="container">
        @yield('konten')
    </div>
</body>
</html>
