@extends('cdnlogin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>
                <img src="{{ asset('Icon/Icon login.png') }}" alt="">
            </h1>
            <h2> LOGIN ADMIN PERUSAHAAN </h2>

            <form action="{{ route('logadminpt') }}" id="form-input" method="POST">
                @csrf
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" aria-label="email" aria-describedby="basic-addon1" required>
                            @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" aria-label="password" aria-describedby="basic-addon1" required>
                            @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                </div>

                <button type="submit">Sign in</button>
            </form>

            <small>Belum punya akun ?? <a href="{{ route('registerpt') }}">Registrasi</a></small>
        </div>
    </div>
</div>
@endsection


