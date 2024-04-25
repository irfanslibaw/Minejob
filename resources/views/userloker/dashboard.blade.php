<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard-user.css') }}">

  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('Icon/Logo Main Job.png') }}" alt="">
           </a> <h5>MAINJOBS</h5>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" >Haii: <span>{{ Auth::user()->nama }}</span></a></li>
                  <li><a class="dropdown-item" href="{{ route('lamaran.index') }}">Data Loker</a></li>
                  <li><a class="dropdown-item" href="{{ route('riwayat.index') }}">Data riwayat</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <form onsubmit="return confirm('Yakin Ingin logout?')" action="{{ route('user.logout') }}" method="get">
                    @csrf
                    <button class="nav-link mx-3" type="submit">logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Carosel -->
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('Hero/dashboard.jpg') }}" class="d-block w-100 h-313" alt="">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('Hero/dashboard2.jpg') }}" class="d-block w-100 h-5" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Footer -->
      <div class="container footer">

        <div class="row">
            <div class="col-4">
                <h4> Get work done <span class="tebal">faster</span> and <span class="tebal">better</span> with us </h4>
            </div>
            <div class="col-4 offset-3 loker">
                <h3>LOKER</h3>
                <p>Perusahaan atau organisasi mempublikasikan lowongan kerja untuk menginformasikan peluang pekerjaan yang tersedia.Telusuri lowongan kerja dan temukan kesempatan kariermu selanjutnya dengan MAINJOBS.</p>
            </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
