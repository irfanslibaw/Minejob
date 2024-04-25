<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Mainjob</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login-user.css') }}">
    <!-- My Fonts Gooogle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  </head>
  <body>


    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif



<div class="container-fluid">



    <section class="login d-flex">

      <div class="login-left w-50 h-100">
          <div class="row justify-content-center align-items-center h-100">

              <div class="login-isi col-6 ">
                  <div class="header">
                      <img src="{{ asset('Icon/Logo Main Job.png') }}" class="rounded-circle justi" alt="">
                      <h1 class="text-center">Login</h1>
                  </div>
                  <div class="login-form">
                    <form action="{{ route('loguser') }}" id="form-input" method="POST">
                @csrf
                      <label for="Email" class="form-label">Email</label>
                      <input type="email" class="form-control text-black @error('email') is-invalid @enderror" id="Email" name="email" placeholder="Masukkan Email">
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                      
                      <button class="sigin" type="submit">Sign in</button>
                          </form>
                      <div class="text-center mt-2">
                          <span class="text-white">Belum punya akun?<a href="{{ route('register') }}" class="text-black">Silahkan registrasi</a></span>
                      </div>
                  </div>
              </div>

          </div>

      </div>

      <div class="login-right w-50 h-100">
        <img src="{{ asset('Hero/Travail.jpeg') }}" class="d-block " alt="...">
      </div>
  </section>



</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
