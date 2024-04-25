
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mainjobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/input-dloker.css') }}" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('Icon/Logo Main Job.png') }}" alt="">
           </a> <h5>MAINJOBS</h5>
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
                    <li><a class="dropdown-item">Haii: <span>{{ Auth::guard('adminpt')->user()->namapt }}</span></a></li>
                  <li><a class="dropdown-item" href="{{ route('dloker_pt') }}">Data loker</a></li>
                  <li><a class="dropdown-item" href="{{ route('pelamar.index') }}">Data riwayat</a></li>
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

    <div class="perusahaan">
      <div class="">
        <div class="">
          <div class="card">

            <div class="card-body">
              <form action="{{ url('dloker_pt') }}" method="POST">
                <div class="header">Tambah Loker Di Perusahaan Anda</div>
                <div class="knkr d-flex">
                    @csrf

                    <div class="knn">

                      <div class="mb-3">
                        <label for="datapt_id" class="w-100 mb-2">Nama perusahaan</label>
                        <select id="datapt_id"  name="datapt_id" required
                            class="form-select" aria-label="Default select example"">
                            <option value="{{ Auth::guard('adminpt')->user()->id }}">{{ Auth::guard('adminpt')->user()->namapt }}</option>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="w-100 mb-2">Bagian Pekerjaan</label>
                        <input type="text" name="bagian_pekerjaan" required value="{{ Session::get('bagian_pekerjaan') }}" class="form-control w-200 h-75">
                      </div>
                      <div class="mb-3">
                        <label class="w-100 mb-2">Tanggal Akhir</label>
                        <input type="date" name="tanggal_akhir" required value="{{ Session::get('tanggal_akhir') }}" class="form-control  w-200 h-75">
                      </div>

                      <div class="mb-3">
                        <label class="w-100 mb-2">Tingkat pekerjaan</label>
                        <input type="text" name="tingkat_pekerjaan" required value="{{ Session::get('tingkat_pekerjaan') }}"  class="form-control w-200 h-75">
                      </div>
                      <div class="mb-3 ">
                        <label class="w-100 mb-2">Minimal kelulusan</label>
                        <input type="text" name="minimal_kelulusan" required value="{{ Session::get('minimal_kelulusan') }}"  class="form-control  w-200 h-75" >
                      </div>
                        <div class="mb-3">
                            <label class="w-100 mb-2">Pengalaman Kerja</label>
                            <input type="text" name="pengalaman" required value="{{ Session::get('pengalaman') }}"  class="form-control w-150 h-75">
                        </div>
                  </div>

                  <div class="kri me-5">
                      <div class="mb-3 ">
                        <label class="w-100 mb-2">Jenis Pekerjaan</label>
                        <input type="text" name="jenis_pekerjaan" required value="{{ Session::get('jenis_pekerjaan') }}"  class="form-control  w-350 h-75">
                      </div>
                    <div class="mb-3">
                      <label class="w-100 mb-2 ">Deskripsi Pekerjaan</label>
                      <textarea name="deskripsi_pekerjaan" value="{{ Session::get('deskripsi_pekerjaan') }}" class=" panjang form-control"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="w-100 mb-2">Persyaratan</label>
                      <textarea name="persyaratan" value="{{ Session::get('persyaratan') }}" class="panjang form-control"></textarea>
                    </div>
                  </div>
                </div>

                <div class=" ">
                  <div class="row justify-content-center align-items-center">
                    <button type="submit" class="btn btn-submit">Submit</button>
                  </div>
                </div>

              </form>
                <div class="mb-3">
                        <a href="{{ route('dloker_pt') }}">
                        <center><button class="btn custom-back-btn ">Back</button>
                        </center>
                        </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

