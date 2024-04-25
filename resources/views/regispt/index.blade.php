<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/regis-perusahaan.css') }}">
  </head>
  <body>

    <div class="container d-flex justify-content-center">
        <div class="card p-5 shadow-5 my-5 w-65 rounded-3">
            <form action="/registerpt" method="post" enctype="multipart/form-data">
                @csrf

            <h2 class="fw-bold mb-5 text-center">Registrasi</h2>
            <div class="row">
                <div class="col-6">
                    <div class="mb-4">
                        <label for="namapt" class="form-label text-start">Nama Perusahaan</label>
                        <input type="text" name="namapt" class="form-control @error('namapt') is-invalid @enderror" id="namapt" placeholder="Masukkan Nama">
                        @error('namapt')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="image" class="form-label text-start">Gambar Logo</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-4">
                        <label for="email" class="form-label text-start">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email">
                        @error('email')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="password" class="form-label text-start">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password">
                        @error('password')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-4">
                        <label for="alamat" class="form-label text-start">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat Perusahaan">
                        @error('alamat')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="domisili" class="form-label text-start">Domisili</label>
                        <input type="text" name="domisili" id="domisili" class="form-control @error('domisili') is-invalid @enderror" placeholder="Masukkan Domisili Perusahaan">
                        @error('domisili')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-4">
                        <label for="no_hpkantor" class="form-label text-start">No Handphone</label>
                        <input type="text" name="no_hpkantor" class="form-control @error('no_hpkantor') is-invalid @enderror" placeholder="Masukkan Nomor Handphone">
                        @error('no_hpkantor')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="birthdate" class="form-label text-start">Link Resmi</label>
                        <input type="url" name="web_pt" class="form-control @error('web_pt') is-invalid @enderror" placeholder="Masukkan Alamat Perusahaan">
                        @error('web_pt')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mb-2">
            <button type="submit">Registrasi</button>
            </div>

            <div class="text-center">
                <span>Sudah punya akun? <a href="{{ route('logadminpt') }}">Silahkan Login</a></span>
            </div>
            </form>
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>
</html>
