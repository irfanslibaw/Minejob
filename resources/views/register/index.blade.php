<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/regis_user.css') }}">
</head>
<body>
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-6">
                <form action="/register" method="post">
                    @csrf
                    <div class="card p-5 shadow-5 my-3">
                        <h2 class="fw-bold mb-3 text-center">Registrasi</h2>
                        <div class="mb-4">
                            <label for="nama" class="form-label text-start">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label text-start">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label text-start">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="umur" class="form-label text-start">Umur</label>
                            <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Masukkan Umur">
                            @error('umur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="tgl-lahir">
                                <div class="mb-4">
                                    <label for="tanggal_lahir" class="form-label text-start">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class=" form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Masukkan Tanggal lahir">
                                    @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="gender">
                                <div class="mb-4">
                                    <label for="gender" class="form-label text-start">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class=" form-select  @error('jenis_kelamin') is-invalid @enderror" id="gender" aria-label="Default select example">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="submit" class="btn btn-block">Registrasi</button>
                        </div>
                        <div class="text-center">
                            <span>Sudah punya akun? <a href="{{ route('loguser') }}">Silahkan Login</a></span>
                        </div>
                    </div>
                </form>

            </div>
                    <div class="col-6">
                        <img src="{{ asset('Icon/contoh.jpg') }}" class="rounded-end-1 shadow-4" alt="">
                    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
