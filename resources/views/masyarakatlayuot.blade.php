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
    <nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #bbc0fc;">
        <div class="container-fluid">
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
            </ul>
            @if (session('username'))    
              <a href="{{url('logot')}}" class="btn btn-light ">Keluar</a>
            @else
              <a href="{{url('login')}}" class="btn btn-light mx-2">Masuk</a>
              <a href="{{url('registrasi')}}" class="btn btn-light">Daftar</a>
    
            @endif
          </div>
        </div>
      </nav>
    <div class="container">
        @yield('konten')
    </div>
</body>
</html>
