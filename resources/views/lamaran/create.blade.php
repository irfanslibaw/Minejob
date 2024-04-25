<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Minejobs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/input-lamaran.css') }}" type="text/css">
</head>
<body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
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
                <a class="nav-link mx-3" href="{{ route('userloker.dsb') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item">Haii: <span>{{ Auth::user()->nama }}</span></a></li>
                  <li><a class="dropdown-item" href="{{ route('lamaran.index') }}">Data Loker</a></li>
                  <li><a class="dropdown-item" href="{{ route('riwayat.index') }}">Data Riwayat</a></li>
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




    <div class="container-fluid perusahaan">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <div class="card">
                <div class="card-header">
                    <h4>FORM PELAMAR</h4>
                </div>
                <div class="card-body">
                        <form action="/lamaran" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="isi ">
                            <label for="dloker_id" class="tw-100 ">Data Lowongan Pekerjaan</label>
                            <select id="dloker_id"  name="dloker_id" class="form-control h-150 mx-auto" required>
                                <option value="{{ $dloker->id }}">{{ $dloker->bagian_pekerjaan }}</option>
                        </select>
                        </div>


                        <div class="isi ">
                            <label for="datapt_id" class="w-100 ">Nama perusahaan</label>
                            <select id="datapt_id"  name="datapt_id" class="form-control h-150 mx-auto"  required>
                            <option disabled value>Pilih pt</option>
                            <br>
                            <option value="{{ $dloker->datapt->id }}">{{ $dloker->datapt->namapt }}</option>
                        </select>
                        </div>


                        <div class="isi">
                            <label for="user_id" class="w-100 ">Data Diri</label>
                            <select id="user_id"  name="user_id" class="form-control h-150 mx-auto" required>
                            <br>
                            <option value="{{ Auth()->user()->id }}">{{ Auth()->user()->email }}</option>
                        </select>
                        </div>




                        <input type="hidden" name="status" value="1">

                        <div class="isi upload-cv">
                            <label class="" for="pdf_file">Upload CV</label>
                            <input type="file" name="pdf_file" id="pdf_file" accept=".pdf" required class="form-control mx-auto d-flex  justify-content-center ">
                        </div>

                        <div class="d-flex justify-content-center align-items-center">


                            <div class="">
                                <center><button class="btn custom-submit-btn " type="submit">Submit</button></center>
                            </div>
                        </div>
                    </form>
                    <div class="">
                                <a href="{{ route('lamaran.index') }}">
                                <center><button class="btn custom-back-btn ">Back</button>
                                </center>
                                </a>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
