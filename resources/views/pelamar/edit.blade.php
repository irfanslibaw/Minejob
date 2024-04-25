

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Minejobs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/ubahstatus.css') }}" type="text/css">
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
                <a class="nav-link mx-3" href="{{ route('adminpt.dsb') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item">Haii: <span>{{ Auth::guard('adminpt')->user()->namapt }}</span></a></li>
                  <li><a class="dropdown-item" href="{{ route('dloker_pt') }}">Data Loker</a></li>
                  <li><a class="dropdown-item" href="{{ route('pelamar.index') }}">Data Pelamar</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <form onsubmit="return confirm('Yakin Ingin logout?')" action="{{ route('adminpt.logout') }}" method="get">
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
                        <form action="{{ url('dpelamar/' .$pelamar->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="isi">
                            <label for="user_id" class="w-100 ">Nama Pelamar</label>
                            <select id="user_id"  name="user_id" class="form-control h-150 mx-auto" required>
                            <option disabled value>Pilih user</option>
                            <br>
                            <option value="{{ $pelamar->user_id }}">{{ $pelamar->user->nama }}</option>
                            </select>
                        </div>

                        <div class="isi">
                            <label for="status" class="ml-3 font-medium">Ubah Status</label>
                            <select id="status"  name="status" required
                            class="form-control h-150 mx-auto">
                                <option>diproses</option>
                                <br>
                                <option value="2">ditolak</option>
                                <option value="3">diterima</option>
                                </option>
                            </select>
                        </div>


                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <center><button class="btn custom-submit-btn " type="submit">Submit</button></center>
                            </div>
                        </div>
                    </form>

                    <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('pelamar.index') }}">
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
