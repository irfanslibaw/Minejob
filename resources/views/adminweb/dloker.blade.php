<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- My Style -->
     <link rel="stylesheet" href="{{ asset('css/Beranda-loker-aw.css') }}" type="text/css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('Icon/Logo Main Job.png') }}" alt="">
           </a> <h5 class="text-white">MAINJOBS</h5>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link mx-3" href="{{ route('adminweb.dsb') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item">Haii: <span>{{ Auth::guard('admin')->user()->nama }}</span></a></li>
                  <li><a class="dropdown-item" href="{{ route('datapt.index') }}">Data perusahaan</a></li>
                  <li><a class="dropdown-item" href="{{ route('dlokerweb') }}">Data loker</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <form onsubmit="return confirm('Yakin Ingin logout?')" action="{{ route('adminweb.logout') }}" method="get">
                    @csrf
                    <button class="nav-link mx-3" type="submit">logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <center>
        <div class="header"> <h6 class="text-align-center">Halaman Data Loker</h6></div>
      </center>
          <div class="container-fluid mb-4">
            <div class="container">
                @foreach ($dloker as $p)
                <div class="card m-2">
                    <a href=""><img src="{{ asset('gambarpt/'.$p->datapt->image) }}" style="width: 120px; height:120px;"></a>
                    <p class="mt-2">{{ $p->datapt->namapt }} <br>{{ $p->bagian_pekerjaan }}</p>
                    <div class="line"></div>
                    <div class="selengkapnya">

                            <a href="{{ url('dloker/'.$p->id.'/info') }}">
                            <button class="py-2">
                                >>SELENGKAPNYA<<
                            </button></a>

                    </div>
                </div>
                @endforeach
            </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
