<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- My Style -->
     <link rel="stylesheet" href="{{ asset('css/datapt.css') }}" type="text/css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
                  <li><a class="dropdown-item" href="{{ url('datapt') }}">Data perusahaan</a></li>
                  <li><a class="dropdown-item" href="{{ route('lamaran') }}">Data Pelamar</a></li>
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


      <div class="container-fluid">
        <div class="container ps-5 pe-5">
            <h3>Data Perusahaan Aplikasi </h3>

            <div class="row ">
                <div class="col-3 ">
                  <div class="search-box">
                    <a href=""><i class="bi bi-search"></i></a>
                    <input type="text" class="search-input" placeholder="Cari disini">
                  </div>
                </div>

            </div>
                    <div class="row">
                        <div class="">
                            <table class="table tabel-borderless">
                                <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Alamat Perusahaan</th>
                                    <th>Email Perusahan</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <?php $i = $datapt->firstItem() ?>
                                @foreach ($datapt as $d)
                                <tbody>

                                  <tr>
                                    <td>{{ $i }}</td>
                                    <td class="namapt">{{ $d->namapt }}</td>
                                    <td>{{ $d->alamat }}</td>
                                    <td>{{ $d->email }}</td>
                                    <td class="d-flex">
                                        <form onsubmit="return confirm('yakin ingin menghapus data ini?')" action="{{ url('datapt/'. $d->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="submit" class="button-hapus">Hapus</button>
                                        </form>

                                    </td>
                                  </tr>
                                </tbody>
                                 <?php $i++?>
                              @endforeach
                              </table>


                        </div>
                    </div>
                    <div class="pagination">
                        {{ $datapt->links() }}
                    </div>

            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
