<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<style>
   h1{
    font-size: 70px;
    padding: 90px 0 10px 0;
    justify-content: center;
    display: flex;
  }
  h3{
    font-size: 30px;
    padding: 50px 0 10px 0;
    justify-content: center;
    display: flex;
  }
  h4{
    font-size: 20px;
        display: flex;
        justify-content: center;
        padding: 5px 0 60px 0;
  }
</style>
<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-info">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
        </ul>
        <a href="{{url('login')}}" class="btn btn-light">Login</a>
        <a href="{{url('registrasi')}}" class="btn btn-light mx-3">Register</a>
      </div>
    </div>
    <body class="bg-body-secondary"> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        </ul>
      </div>
    </div>
  </nav>
  <body class="bg-body-secondary"> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      </ul>
    </div>
  </div>
</nav>
  </nav>
  <body class="bg-body-secondary"> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      </ul>
    </div>
  </div> 
  <div class="container">
    <div class="card shadow mt-4">
      
        <div class="bg-gradient justify-content-between">
            <a href="{{url('masyarakat/halaman')}}" >
            </a>
        </div>
        <div class="card-body">
            @if (session('pesan'))
                <div class="alert alert-danger" role="alert">
                    {{session('pesan')}}
                  </div>
                @endif
            
                @csrf
                <h1>SELAMAT DATANG!!</h1>
                <h3>Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
                <h4>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h4>
        </div>
    </div>
</div>

</nav>
</body>
</html>