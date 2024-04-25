<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mainjobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/infolokerweb.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('Icon/Logo Main Job.png') }}" alt="">
           </a>
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


       <!-- card -->
       <div class="container-fluid perusahaan">
        <div class=" justify-content-center align-items-center">
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <div class="logoo" style="text-align: center;">
                            <img src="{{ asset('gambarpt/'.$dloker->datapt->image) }}" alt="Image">
                        </div>
                        <div class="teks">
                        <h4>
                        {{ $dloker->datapt->namapt }}</h4>

                        <h5>{{ $dloker->bagian_pekerjaan }}</h5>

                        <h5>{{ $dloker->datapt->domisili }}</h5>

                        <h5>{{ $dloker->datapt->alamat }}</h5>

                        </div>

                    </div>

                    <div class="card-body">
                        <div class="deskripsi mt-5 mb-3">
                            <h5 style="text-align: left;">Deskripsi Pekerjaan:</h5>
                            <p>
                                {{ $dloker->deskripsi_pekerjaan }}</li>
                            </p>
                        </div>
                        <div class=" mt-5 mb-3">
                            <h5 style="text-align: left;">Persyaratan</h5>
                            <p>
                                {{ $dloker->persyaratan }}
                            </p>
                        </div>

                        <div class="infotambahan">
                            <h3 style="text-align: center; font-size: 20px;">Informasi Tambahan</h3>
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 45%;">
                                    <!-- Informasi di Sebelah Kiri -->
                                    <h5><b>Tingkat pekerjaan</b></h5><p style="">{{ $dloker->tingkat_pekerjaan }}</p>


                                    <h5><b>Pengalaman kerja</b></h5>
                                    <p style="">

                                        {{ $dloker->pengalaman }}</p>

                                </div>
                                <div class="kanan" style="width: 45%;">
                                    <!-- Deskripsi Pekerjaan -->
                                    <h5><b>Lokasi pekerjaan:</b> </h5>
                                    <p style="">{{ $dloker->datapt->domisili }}</p>

                                    <h5><b>Kualifikasi</b></h5>
                                    <p class="kualifikasi" style="">
                                        {{ $dloker->minimal_kelulusan }}
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <h5><b>Email Perusahaan:</b> </h5>
                            <p><a href="mailto:{{ $dloker->datapt->email }}">{{ $dloker->datapt->email }}</a></p>
                        </div>
                        <div class="text-center">
                            <h5><b>Website Resmi Perusahaan: </b></h5> <p><a href="{{ $dloker->datapt->web_pt }}">Web Resmi</a></p>
                        </div>


                        <div class="text-center">
                            <center>
                            <div class="back h-50 w-100">
                               <a href="{{ route('dlokerweb') }}"><button class="btn">Kembali</button></a>
                            </div>
                        </center>
                          </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
